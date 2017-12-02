<?php
    class additionnalInformationController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            session_start();
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = 'Informations de livraisons';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('additionnalInformation.tpl');
            return $this->response;
        }
     
      
    }
?>
