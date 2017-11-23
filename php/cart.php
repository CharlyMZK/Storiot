<?php
    class cartController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = "Panier";
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate("cart.tpl");
            return $this->response;
        }
     
      
    }
?>
