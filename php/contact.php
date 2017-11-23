<?php
    class contactController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = "Contacter le support";
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate("contact.tpl");
            return $this->response;
        }
     
      
    }
?>
