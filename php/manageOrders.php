<?php
    class manageOrdersController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = "Gestion des commandes";
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate("manageOrders.tpl");
            return $this->response;
        }
     
      
    }
?>
