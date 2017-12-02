<?php
    class paymentInformationController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            $name = 'Informations de paiements';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('payementInformation.tpl');
            return $this->response;
        }
     
      
    }
?>
