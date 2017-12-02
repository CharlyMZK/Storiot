<?php
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
            $name = 'Payer';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('pay.tpl');
            return $this->response;
        }
     
      
    }
?>
