<?php
    class helpController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            $name = 'Aide';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('help.tpl');
            return $this->response;
        }
     
      
    }
?>
