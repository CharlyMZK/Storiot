<?php
    class recoverPasswordController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            $name = 'Réinitialiser le mot de passe';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('recoverPassword.tpl');
            return $this->response;
        }
     
      
    }
?>
