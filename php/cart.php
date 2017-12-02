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
        
        function launch(){
            $name = 'Panier';
            if($this->request->action == 'addToCart'){
                $user = UserQuery::create()->findOneById($_SESSION['userId']);
                $this->response->getContent()->assign('name', $name);
                $this->response->setTemplate('addedToCartResponse.tpl');
                return $this->response;
            }else{
                $this->response->getContent()->assign('name', $name);
                $this->response->setTemplate('cart.tpl');
                return $this->response;
            }
            
        }
     
      
    }
?>
