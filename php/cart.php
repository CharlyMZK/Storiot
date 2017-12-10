<?php
	
    class cartController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        public static function isUserConnected(){
            $isConnected = null;
            if($_SESSION['userId'] != 0){
                $isConnected = true;
            }else{
                $isConnected = false;
            }
            return $isConnected;
        }
        
        public function addItemInNotConnectedCart($item){
            $objectAddedInCart = new ItemInCart();
            $objectAddedInCart->setCart($cart);
            $objectAddedInCart->setItem($item);
            $objectAddedInCart->setQuantity(1);
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
        
        public function addItemInConnectedCart($cart,$item){
            $itemInCart =  ItemInCartQuery::create()->findOneByItemId($item->getId());
            if($itemInCart == null){
                $objectAddedInCart = new ItemInCart();
                $objectAddedInCart->setCart($cart);
                $objectAddedInCart->setItem($item);
                $objectAddedInCart->setQuantity(1);
                $cart->addItemInCart($objectAddedInCart);
                $objectAddedInCart->save();
            }else{
                $itemInCart->setQuantity($itemInCart->getQuantity() + 1);
                $itemInCart->save();
            }
        }
        
         public static function removeItemsInUserCart(){
            $itemsInCart = cartController::getItemsInUserConnectedCart();
            if(cartController::isUserConnected()){
             foreach ($itemsInCart  as &$objectInCart) {
                   $objectInCart->delete();
                }
            }
        }
        
        public function addItemInCart($item){
            $item =  ItemQuery::create()->findOneById($_POST['item']);
            if(cartController::isUserConnected()){
                $cart = CartQuery::create()->findOneByUserId($_SESSION['userId']);
                $this->addItemInConnectedCart($cart,$item);
            }else{
                $this->addItemInNotConnectedCart($item);
            }
        }
        
        public function mergeSessionAndUserCarts($cart,$itemsInCart){
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
            $itemsInCart = $this->getItemsInCart();
            foreach ($itemsInCart  as &$objectInCart) {
                if($objectInCart->getItem()->getId() == $item){
                    $objectInCart->setQuantity($quantity);
                }
                
            }
        }
        
        public static function getItemsInUserConnectedCart(){
            if(cartController::isUserConnected()){
                $cart = CartQuery::create()->findOneByUserId($_SESSION['userId']);
                $itemsInCart =  ItemInCartQuery::create()->findByCartid($cart->getId());
            }
            return $itemsInCart;
        }
        
        public function getItemsInCart(){
            if(cartController::isUserConnected()){
                $cart = CartQuery::create()->findOneByUserId($_SESSION['userId']);
                $itemsInCart =  ItemInCartQuery::create()->findByCartid($cart->getId());
                $this->mergeSessionAndUserCarts($cart,$itemsInCart);
            }else{
                $itemsInCart = $_SESSION['objectsInCart'];
            }
            return $itemsInCart;
        }
        
         public function removeItemFromCart($itemId){
             $itemsInCart = $this->getItemsInCart();
            if(cartController::isUserConnected()){
                 $index = 0;
             $indexToRemove = NULL;
             foreach ($itemsInCart  as &$objectInCart) {

                if($objectInCart->getItem()->getId() == $itemId){
                   $objectInCart->delete();
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
                }
            
                $_SESSION['objectsInCart'] = $itemInCart;
            }
         }
             
        public function getNoTaxAmount($itemsInCart){
            $total = 0;
            foreach ($itemsInCart  as &$objectInCart) {
                $total += $objectInCart->getItem()->getPrice() * $objectInCart->getQuantity();
            }
            return $total;
        }
        
        public function getAmountWithTax($itemsInCart){
            $total = 0;
            
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
            return $total;
        }
                    
                    
        function launch(){
                if($this->request->action == 'addToCart'){
                    $state = 'Item ajouté';
                    $this->addItemInCart($item);
                    $this->response->getContent()->assign('state', $state);
                    $this->response->setTemplate('addedToCartResponse.tpl');
                    return $this->response;
                }else if ($this->request->action == 'setQuantity'){
                    $state = 'Quantité augementée';
                    $this->setItemInCartQuantity($_POST['item'],$_POST['quantity']);
                    $this->response->getContent()->assign('state', $state);
                    $this->response->setTemplate('addedToCartResponse.tpl');
                    return $this->response;
                }else if ($this->request->action == 'removeItem'){
                    $state = 'Item removed';
                    $this->removeItemFromCart($_POST['item']);
                    $this->response->getContent()->assign('state', $state);
                    $this->response->setTemplate('addedToCartResponse.tpl');
                }else{
                    $itemsInCart = $this->getItemsInCart();
                    $noTaxAmount = $this->getNoTaxAmount($itemsInCart);
                    $amountWithTax = $this->getAmountWithTax($itemsInCart);
                    $this->response->getContent()->assign('noTaxAmount', $noTaxAmount);
                    $this->response->getContent()->assign('amountWithTax', $amountWithTax);
                    $this->response->getContent()->assign('itemsInCart', $itemsInCart);
                    $this->response->setTemplate('cart.tpl');
                    
                }
            return $this->response;
        }
        
    }
?>
