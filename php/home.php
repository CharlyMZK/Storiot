<?php
    class HomeController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = "Nouveautés";
        	$this->response->getContent()->assign('page', "Accueil");
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('home.tpl');
            return $this->response;
        }
     
      
    }
?>
