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
                if(!$this->testUserExist() && $this->passwordMatchs()) {
                    $user = $this->createUser();
                    if($user){
                        $this->response->getContent()->assign('user', $user);
                        $this->response->setTemplate('confirmSignUp.tpl');
                    } else {
                        $this->response->getContent()->assign('errorMessage', 'Vous avez renseigné des informations incorrectes, veuillez recommencer');
                        $this->response->setTemplate('signUp.tpl'); 
                    }
                } else {
                    $this->response->setTemplate('signUp.tpl'); 
                }
            } else {
                $this->response->setTemplate('signUp.tpl'); 
            }
            
            return $this->response;
        }
        
        function testUserExist() {
            $result = false;
            $regExEmail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-z\-0-9]+\.)+[a-z]{2,}))$/i';

            if(preg_match($regExEmail, $_POST['email'])) {
                $email = $_POST['email'];
            } 
            
            if($email) {
                $user = UserQuery::create()->findOneByEmail($email);
                if($user) {
                    $result = true;
                    $this->response->getContent()->assign('errorMessage', 'L\'email renseigné est déjà utilisé');
                }
            }
    
            return $result;
        }
        
        function passwordMatchs(){
            $result = false;
            $regExPassword = '/.{6,}/';
            
            $password = preg_match($regExPassword, $_POST['password']);
        	$confirmPassword = preg_match($regExPassword, $_POST['confirmPassword']);
        	
        	if(preg_match($regExPassword, $_POST['password'])) {
                $password = $_POST['password'];
            }
            if(preg_match($regExPassword, $_POST['confirmPassword'])) {
                $confirmPassword = $_POST['confirmPassword'];
            }
            
            if($password && $confirmPassword) {
                if($password === $confirmPassword) {
            	    $result = true;
            	} else {
            	    $this->response->getContent()->assign('errorMessage', 'Le mot de passe et le mot de passe de confirmation ne sont pas les mêmes');
            	}
            }
            
        	return $result;
        }
        
        function createUser() {
            $error = false;
            
            $regExEmail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-z\-0-9]+\.)+[a-z]{2,}))$/i';
            $regExPassword = '/.{6,}/';
            $regExName = '/[a-z ,.\'-]+/i';
            $regExBirthDate = '/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/';
            $regExAddress = '/^[0-9]+[a-z ,.\'-]+$/i';
            $regExZipCode = '/[0-9]{5}/';
            $regExCity = '/[a-z -]{1,30}/i';
            $regExPhone = '/[0-9]{10}/';
            
            if(preg_match($regExEmail, $_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $error = true;
            }
            if(preg_match($regExPassword, $_POST['password'])) {
                $password = $_POST['password'];
            } else {
                $error = true;
            }
            if(preg_match($regExPassword, $_POST['confirmPassword'])) {
                $confirmPassword = $_POST['confirmPassword'];
            } else {
                $error = true;
            }
            if(preg_match($regExName, $_POST['lastName'])) {
                $lastName = $_POST['lastName'];
            } else {
                $error = true;
            }
            if(preg_match($regExName, $_POST['firstName'])) {
                $firstName = $_POST['firstName'];
            } else {
                $error = true;
            }
            if(preg_match($regExBirthDate, $_POST['birthDate'])) {
                $birthDate = $_POST['birthDate'];
            } else {
                $error = true;
            }
            if(preg_match($regExAddress, $_POST['address'])) {
                $address = $_POST['address'];
            } else {
                $error = true;
            }
            if(preg_match($regExZipCode, $_POST['zipCode'])) {
                $zipCode = $_POST['zipCode'];
            } else {
                $error = true;
            }
            if(preg_match($regExCity, $_POST['city'])) {
                $city = $_POST['city'];
            } else {
                $error = true;
            }
            if(preg_match($regExPhone, $_POST['phone'])) {
                $phone = $_POST['phone'];
            } else {
                $error = true;
            }
            
        	$gender = $_POST['gender'];
        	
        	if(!$error) {
            	// Mise des données dans l'objet à inserer dans la base
            	$user = new User();
            	$user->setEmail($email);
            	$user->setPassword($password);
            	$user->setGender($gender);
            	$user->setLastName(strtoupper($lastName));
            	$user->setFirstName(ucfirst($firstName));
            	$user->setBirthDate(DateTime::createFromFormat('d/m/Y', $birthDate));
            	$user->setAddress($address);
            	$user->setZipCode($zipCode);
            	$user->setCity(ucfirst($city));
            	$user->setPhone($phone);
            	$user->save();
            	
            	$cart = new Cart();
            	$cart->setUser($user);
            	$cart->save();
        	}
        	
        	return $user;
        }
        
        function addCommaIfEmpty($string) {
            if(!empty($string)) {
                $string .=', ';
            }
            return $string;
        }
    }
?>
