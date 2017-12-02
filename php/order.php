<?php
    class orderController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            $name = 'Commande';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('order.tpl');
            return $this->response;
        }
     
      
    }
?>
