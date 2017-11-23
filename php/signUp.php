<?php
    class signUpController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = "Inscription";
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate("signUp.tpl");
            return $this->response;
        }
     
        function signUp(){
            $email = $_POST["email"];
        	$password = $_POST["password"];
        	$firstName = $_POST["firstName"];
        	$lastName = $_POST["lastName"];
        	$gender = $_POST["gender"];
        	$zipCode = $_POST["zipCode"];
        	$city = $_POST["city"];
        	$phone = $_POST["phone"];
        	
        	
        }
    }
?>
