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
        
        public function isUserConnected(){
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
        
        public function addItemInCart($item){
            $item =  ItemQuery::create()->findOneById($_POST['item']);
            if($this->isUserConnected()){
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
                            echo "<br/>Equals !";
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
                echo $objectInCart->getItem()->getId()." <> ".$item;
                if($objectInCart->getItem()->getId() == $item){
                    $objectInCart->setQuantity($quantity);
                }
                
            }
        }
        
        public function getItemsInCart(){
            if($this->isUserConnected()){
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
            
            
            var_dump(count($itemsInCart));
            if($this->isUserConnected()){
                 $index = 0;
             $indexToRemove = NULL;
             foreach ($itemsInCart  as &$objectInCart) {
                echo "!".$objectInCart->getItem()->getId()." <> ".$itemId."!";
                if($objectInCart->getItem()->getId() == $itemId){
                   $objectInCart->delete();
                }

            }
            echo "Index to reomve : ".$indexToRemove;
            if($indexToRemove !== NULL){
                echo "!!! Removing !!!!!!";
                //$itemsInCart = array_splice($itemsInCart,$indexToRemove,1);   
                unset($itemsInCart[$indexToRemove]);
                $itemsInCart = array_values($itemsInCart);
            }
     
            }else{
                 $index = 0;
                 $indexToRemove = NULL;
                 foreach ($itemsInCart  as &$objectInCart) {
                    echo "!".$objectInCart->getItem()->getId()." <> ".$itemId."!";
                    if($objectInCart->getItem()->getId() == $itemId){
                       $indexToRemove = $index;
                    }
                    $index ++;
                }
                echo "Index to reomve : ".$indexToRemove;
                if($indexToRemove !== NULL){
                    echo "!!! Removing !!!!!!";
                    //$itemsInCart = array_splice($itemsInCart,$indexToRemove,1);   
                    unset($itemsInCart[$indexToRemove]);
                    $itemsInCart = array_values($itemsInCart);
                }
            
                $_SESSION['objectsInCart'] = $itemInCart;
            }
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
                    echo $_POST['item'] . " - ".$_POST['quantity'];
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
                    $this->response->getContent()->assign('itemsInCart', $itemsInCart);
                    $this->response->setTemplate('cart.tpl');
                    
                }
            return $this->response;
        }
        
    }
?>
