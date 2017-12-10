<?php
    require 'php/cart.php';
    class payController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            if($this->request->action == 'pay'){
                if(cartController::isUserConnected()){
                    cartController::createOrderFromCart();
                    cartController::removeItemsInUserCart();
                    $name = 'Payer';
                    $this->response->getContent()->assign('name', $name);
                    $this->response->setTemplate('pay.tpl');
            
                }else{
                    $this->response->setTemplate('signIn.tpl');         
                }
                return $this->response;
            }
            
        }
     
      
    }
?>
