<?php
	/*session_start();*/
    class confirmationController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            $name = 'Confirmation';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('confirmation.tpl');
            return $this->response;
        }
     
      
    }
?>
