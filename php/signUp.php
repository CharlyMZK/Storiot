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
            if($this->request->action == 'sendForm'){
                if($this->isParametersOk() && !$this->testUserExist()) {
                    $this->createUser();
                    $this->response->setTemplate('home.tpl');
                } else {
                    $this->response->setTemplate('signUp.tpl'); 
                }
            } else {
                $this->response->setTemplate('signUp.tpl'); 
            }
            
            return $this->response;
        }
     
        function isParametersOk() {
            $result = true;
            $error = '';
            $errorMessage = 'Veuillez renseigner ';
            
            $email = $_POST['email'];
        	$password = $_POST['password'];
        	$confirmPassword = $_POST['confirmPassword'];
        	$firstName = $_POST['firstName'];
        	
        	if(empty($email)) {
        	    $error .= 'l\'email';
        	} else {
        	    $this->response->getContent()->assign('email', $email);
        	}
        	if(empty($password)) {
        	    $error = $this->addCommaIfEmpty($error);
        	    $error .= 'le mot de passe';
        	}
        	if(empty($confirmPassword)) {
        	    $error = $this->addCommaIfEmpty($error);
        	    $error .= 'le mot de passe de confirmation';
        	}
        	if(empty($firstName)) {
        	    $error = $this->addCommaIfEmpty($error);
        	    $error .= 'le prénom';
        	} else {
        	    $this->response->getContent()->assign('firstName', $firstName);
        	}
        	
        	if(!empty($error)){
        	    $result = false;
        	    $errorMessage .= $error;
        	    $this->response->getContent()->assign('errorMessage', $errorMessage);
        	}
        	
        	return $result;
        }
        
        function testUserExist() {
            $result = false;
            $email = $_POST['email'];
            
            $user = UserQuery::create()->findOneByEmail($email);
            if($user) {
                $result = true;
                $this->response->getContent()->assign('errorMessage', 'L\'email renseigné est déjà utilisé');
            }
            
            return $result;
        }
        
        function createUser() {
            // Récupération des données
            $email = $_POST['email'];
        	$password = $_POST['password'];
        	$firstName = $_POST['firstName'];
        	
        	// Mise des données dans l'objet à inserer dans la base
        	$user = new User();
        	$user->setEmail($email);
        	$user->setPassword($password);
        	$user->setFirstName($firstName);
        	$user->save();
        	
        	$cart = new Cart();
        	$cart->setUser($user);
        	$cart->save();
        }
        
        function addCommaIfEmpty($string) {
            if(!empty($string)) {
                $string .=', ';
            }
            return $string;
        }
    }
?>
