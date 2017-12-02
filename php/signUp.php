<?php
    class signUpController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            if($this->request->action=='sendForm'){
                $this->createUser();
                $this->response->getContent()->assign('name', 'Nouveautés');
                $this->response->setTemplate('home.tpl');
            } else {
                $this->response->getContent()->assign('name', 'Inscription');
                $this->response->setTemplate('signUp.tpl'); 
            }
            
            return $this->response;
        }
     
        function createUser(){
            // Récupération des données
            $email = $_POST['email'];
        	$password = $_POST['password'];
        	$firstName = $_POST['firstName'];
        	$lastName = $_POST['lastName'];
        	$gender = $_POST['gender'];
        	$address = $_POST['address'];
        	$zipCode = $_POST['zipCode'];
        	$city = $_POST['city'];
        	$phone = $_POST['phone'];
        	
        	// Mise des données dans l'objet à inserer dans la base
        	$user = new User();
        	$user->setEmail($email);
        	$user->setPassword($password);
        	$user->setFirstName($firstName);
        	$user->setLastName($lastName);
        	$user->setGender($gender);
        	$user->setAddress($address);
        	$user->setZipCode($zipCode);
        	$user->setCity($city);
        	$user->setPhone($phone);
        	$user->save();
        }
    }
?>
