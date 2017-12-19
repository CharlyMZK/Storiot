<?php
    class CartController extends DomainController{

        public function createItemInCartWithQuantity($cart,$item,$quantity){
            $itemInCart = new ItemInCart();
            $itemInCart->setCart($cart);
            $itemInCart->setItem($item);
            $itemInCart->setQuantity($quantity);
            return $itemInCart;
        }
        
        public function addItemInUserNotConnectedCart($item){
            $objectAddedInCart = $this->createItemInCartWithQuantity($cart,$item,1);
            $isInCart = false;
            
            if(is_array($_SESSION['objectsInCart'])){
                foreach ($_SESSION['objectsInCart'] as &$objectInCart) {
                    if($objectInCart->getItem()->getName() == $item->getName()){
                        $objectInCart->setQuantity($objectInCart->getQuantity()+1);
                        $isInCart = true;
                    }
                }
                if(!$isInCart){
                    array_push($_SESSION['objectsInCart'],  $objectAddedInCart);
                }
            }else{
                $_SESSION['objectsInCart'] = array($objectAddedInCart);
            }
        }
        
        public function addItemInUserConnectedCart($cart,$item){
            $itemInCart =  ItemInCartQuery::create()->findOneByItemId($item->getId());
            if($itemInCart == null){
                 $objectAddedInCart = $this->createItemInCartWithQuantity($cart,$item,1);
                $cart->addItemInCart($objectAddedInCart);
                $objectAddedInCart->save();
            }else{
                $itemInCart->setQuantity($itemInCart->getQuantity() + 1);
                $itemInCart->save();
            }
            return $isRequestOk;
        }
        
         public static function removeItemsInUserCart(){
            $itemsInCart = CartController::getItemsInUserConnectedCart();
            if(DomainController::isUserConnected()){
             foreach ($itemsInCart  as &$objectInCart) {
                   $objectInCart->delete();
                }
            }
        }
        
        public function addItemInCart($item){
            $item =  ItemQuery::create()->findOneById($_POST['item']);
            $isRequestOk = false;
            if(DomainController::isUserConnected()){
                $cart = CartQuery::create()->findOneByUserId($_SESSION['userId']);
                $this->addItemInUserConnectedCart($cart,$item);
                $isRequestOk = true;
            }else{
                $this->addItemInUserNotConnectedCart($item);
                $isRequestOk = true;
            }
            
            return $isRequestOk;
        }
        
        public function mergeSessionAndUserCarts($cart){
            $itemsInCart =  ItemInCartQuery::create()->findByCartid($cart->getId());
            if($_SESSION['objectsInCart'] != null){
                foreach ($_SESSION['objectsInCart']  as &$objectInSessionCart) {
                    $isTheObjectInUserCart = false;
                    foreach ($itemsInCart  as &$objectInCart) {
                            if($objectInCart->getItem()->getId() == $objectInSessionCart->getItem()->getId()){
                                $objectInCart->setQuantity($objectInCart->getQuantity() + $objectInSessionCart->getQuantity());
                                $objectInCart->save();
                                $isTheObjectInUserCart = true;
                            }
                    }
                    if(!$isTheObjectInUserCart){
                        $cart->addItemInCart($objectInSessionCart);
                        $objectInSessionCart->setCart($cart);
                        $objectInSessionCart->save();
                    }
                }
                $_SESSION['objectsInCart'] = array();
            }
        }
        
        public function setItemInCartQuantity($item, $quantity){
            $isRequestOk = false;
            $itemsInCart = $this->getItemsInCart();
            foreach ($itemsInCart  as &$objectInCart) {
                if($objectInCart->getItem()->getId() == $item){
                    $objectInCart->setQuantity($quantity);
                    if(DomainController::isUserConnected()){
                        $objectInCart->save();
                    }
                    $isRequestOk = true;
                }
            }
            return $isRequestOk;
        }
        
        public static function createOrderFromCart(){
            if(DomainController::isUserConnected()){
                $package = new Package();
                $itemsInCart = CartController::getItemsInUserConnectedCart();
                $user = UserQuery::create()->findOneById($_SESSION['userId']);
                $package->setUser($user);
                $package->setSendDate(time());
                $package->save();
                foreach ($itemsInCart  as &$objectInCart) {
                    $itemInPackage = new ItemInPackage();
                    $itemInPackage->setItem($objectInCart->getItem());
                    $itemInPackage->setPackage($package);
                    $itemInPackage->setQuantity($objectInCart->getQuantity());
                    $itemInPackage->save();                    
                }
            }
        }
        
        public static function getItemsInUserConnectedCart(){
            if(DomainController::isUserConnected()){
                $cart = CartQuery::create()->findOneByUserId($_SESSION['userId']);
                $itemsInCart =  ItemInCartQuery::create()->findByCartid($cart->getId());
            }
            return $itemsInCart;
        }
        
        public function getItemsInCart(){
            if(DomainController::isUserConnected()){
                 $cart = CartQuery::create()->findOneByUserId($_SESSION['userId']);
                $this->mergeSessionAndUserCarts($cart);
                $itemsInCart =  ItemInCartQuery::create()->findByCartid($cart->getId()); // Refresh the items
            }else{
                $itemsInCart = $_SESSION['objectsInCart'];
            }
            return $itemsInCart;
        }
        
         public function removeItemFromCart($itemId){
            $isRequestOk = false;
            $itemsInCart = $this->getItemsInCart();
            if(DomainController::isUserConnected()){
                $index = 0;
                $indexToRemove = NULL;
                foreach ($itemsInCart  as &$objectInCart) {
                    if($objectInCart->getItem()->getId() == $itemId){
                       $objectInCart->delete();
                       $isRequestOk = true;
                    }
                }
                
                if($indexToRemove !== NULL){
    
                    unset($itemsInCart[$indexToRemove]);
                    $itemsInCart = array_values($itemsInCart);
                }
            }else{
                $index = 0;
                $indexToRemove = NULL;
                foreach ($itemsInCart  as &$objectInCart) {
                    if($objectInCart->getItem()->getId() == $itemId){
                       $indexToRemove = $index;
                    }
                    $index ++;
                }
                
                if($indexToRemove !== NULL){
                    unset($itemsInCart[$indexToRemove]);
                    $itemsInCart = array_values($itemsInCart);
                    $isRequestOk = true;
                }
                $_SESSION['objectsInCart'] = $itemsInCart;
            }
            return $isRequestOk;
        }
             
        public function getNoTaxAmount($itemsInCart){
            $total = 0;
            if($itemsInCart != NULL){
                foreach ($itemsInCart  as &$objectInCart) {
                    $total += $objectInCart->getItem()->getPrice() * $objectInCart->getQuantity();
                } 
            }
            return $total;
        }
        
        public function getAmountWithTax($itemsInCart){
            $total = 0;
            if($itemsInCart != NULL){
                foreach ($itemsInCart  as &$objectInCart) {
                    $itemTypes = ItemTypeQuery::create()->findByItemId($objectInCart->getItem()->getId());
                    $itemPrice = $objectInCart->getItem()->getPrice();
                    foreach ($itemTypes  as &$itemType) {    
                     $type = $itemType->getType()->getName();
                     switch ($type) {
                        case "TVA_20":
                            $itemPrice = $itemPrice * 1.2;
                            break;
                        case "TVA_10":
                            $itemPrice = $itemPrice * 1.1;
                            break;
                        case "TVA_5_5":
                            $itemPrice = $itemPrice * 1.055;
                            break;
                    }
    
                    }
                    $total += $itemPrice * $objectInCart->getQuantity();
                }
            }
            return $total;
        }
                    
                    
        function launch(){
            
            $isRequestInError = false;
            if($this->request->action == 'addToCart'){
                if($this->addItemInCart($item)){
                    $this->response->setMessage("L'objet a bien été ajouté au panier");
                    $this->response->setCode(DomainController::$OK_CODE);
                }else{
                    $isRequestInError = true;
                }
                
            }else if ($this->request->action == 'setQuantity'){
                if($this->setItemInCartQuantity($_POST['item'],$_POST['quantity'])){
                    $this->response->setCode(DomainController::$OK_CODE);
                }else{
                    $isRequestInError = true;
                }
            }else if ($this->request->action == 'removeItem'){
                if($this->removeItemFromCart($_POST['item'])){
                    $this->response->setCode(DomainController::$OK_CODE);
                }else{
                    $isRequestInError = true;
                }
            }else{
                $itemsInCart = $this->getItemsInCart();
                if($itemsInCart != NULL){
                    $noTaxAmount = $this->getNoTaxAmount($itemsInCart);
                    $amountWithTax = $this->getAmountWithTax($itemsInCart);
                    $this->response->getContent()->assign('noTaxAmount', $noTaxAmount);
                    $this->response->getContent()->assign('amountWithTax', $amountWithTax);
                    $this->response->getContent()->assign('itemsInCart', $itemsInCart);    
                }
                $this->response->setTemplate('cart.tpl');
            }
                
            if($isRequestInError){
                $this->response->setMessage("Oups ! Un problème est survenu..");
                $this->response->setCode(DomainController::$ERROR_CODE);
            }
            return $this->response;
        }
        
    }
?>
