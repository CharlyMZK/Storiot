<?php
    class SignUpController extends DomainController{
        
        private $email;
        private $password;
        private $confirmPassword;
        private $gender;
        private $firstName;
        private $lastName;
        private $birthDate;
        private $address;
        private $zipCode;
        private $city;
        private $phone;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch() {
            if($this->request->action == 'sendForm') {
                if(!$this->errorParameters()) {
                    if(!$this->userExist()) {
                        if($this->passwordMatchs()) {
                            $user = $this->createUser();
                            if($user){
                                $this->response->getContent()->assign('user', $user);
                                $this->response->setTemplate('confirmSignUp.tpl');
                            } else {
                                $this->response->getContent()->assign('errorMessage', 'Il y a eu un problème lors de la création de votre compte, veuillez recommencer');
                                $this->response->setTemplate('signUp.tpl'); 
                            }
                        } else {
                            $this->response->getContent()->assign('errorMessage', 'Le mot de passe et le mot de passe de confirmation ne sont pas les mêmes');
                            $this->response->setTemplate('signUp.tpl'); 
                        }
                    } else {
                        $this->response->getContent()->assign('errorMessage', 'L\'email renseigné est déjà utilisé');
                        $this->response->setTemplate('signUp.tpl'); 
                    }
                } else {
                    $this->response->getContent()->assign('errorMessage', 'Vous avez renseigné des informations incorrectes, veuillez recommencer');
                    $this->response->setTemplate('signUp.tpl'); 
                }
            } else {
                $this->response->setTemplate('signUp.tpl'); 
            }
            
            return $this->response;
        }
        
        function errorParameters() {
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
                $this->email = $_POST['email'];
            } else {
                $error = true;
            }
            if(preg_match($regExPassword, $_POST['password'])) {
                $this->password = $_POST['password'];
            } else {
                $error = true;
            }
            if(preg_match($regExPassword, $_POST['confirmPassword'])) {
                $this->confirmPassword = $_POST['confirmPassword'];
            } else {
                $error = true;
            }
            if(preg_match($regExName, $_POST['lastName'])) {
                $this->lastName = $_POST['lastName'];
            } else {
                $error = true;
            }
            if(preg_match($regExName, $_POST['firstName'])) {
                $this->firstName = $_POST['firstName'];
            } else {
                $error = true;
            }
            if(preg_match($regExBirthDate, $_POST['birthDate'])) {
                $this->birthDate = $_POST['birthDate'];
            } else {
                $error = true;
            }
            if(preg_match($regExAddress, $_POST['address'])) {
                $this->address = $_POST['address'];
            } else {
                $error = true;
            }
            if(preg_match($regExZipCode, $_POST['zipCode'])) {
                $this->zipCode = $_POST['zipCode'];
            } else {
                $error = true;
            }
            if(preg_match($regExCity, $_POST['city'])) {
                $this->city = $_POST['city'];
            } else {
                $error = true;
            }
            if(preg_match($regExPhone, $_POST['phone'])) {
                $this->phone = $_POST['phone'];
            } else {
                $error = true;
            }
            
        	$this->gender = $_POST['gender'];
        	
        	return $error;
        }
        
        function userExist() {
            $result = false;
            
            if($this->email) {
                $user = UserQuery::create()->findOneByEmail($this->email);
                if($user) {
                    $result = true;
                }
            }
    
            return $result;
        }
        
        function passwordMatchs(){
            $result = false;
            
            if($this->password && $this->confirmPassword) {
                if($this->password == $this->confirmPassword) {
            	    $result = true;
            	}
            }
            
        	return $result;
        }
        
        function createUser() {
        	$user = new User();
        	$user->setEmail($this->email);
        	$user->setPassword(password_hash($this->password, PASSWORD_DEFAULT));
        	$user->setGender($this->gender);
        	$user->setLastName(strtoupper($this->lastName));
        	$user->setFirstName(ucfirst($this->firstName));
        	$user->setBirthDate(DateTime::createFromFormat('d/m/Y', $this->birthDate));
        	$user->setAddress($this->address);
        	$user->setZipCode($this->zipCode);
        	$user->setCity(ucfirst($this->city));
        	$user->setPhone($this->phone);
        	$user->save();
        	
        	$cart = new Cart();
        	$cart->setUser($user);
        	$cart->save();
        	
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
