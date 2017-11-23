<?php
    class manageAccountController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = "Manage account";
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate("manageAccount.tpl");
            return $this->response;
        }
     
      
    }
?>
