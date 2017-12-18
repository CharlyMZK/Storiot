<?php
    class SignInController extends DomainController{
        
        private $email;
        private $password;
        
        function launch() {
            if($this->request->action == 'sendForm') {
                if(!$this->errorParameters()) {
                    if($this->testConnection()) {
                        $newItems = ItemQuery::create()->find();
                        $promotedItems = ItemQuery::create()->find();
                        $bestReviewItems = ItemQuery::create()->find();
                        
                        $this->response->getContent()->assign('newItems', $newItems);
                        $this->response->getContent()->assign('promotedItems', $promotedItems);
                        $this->response->getContent()->assign('bestReviewItems', $bestReviewItems);
                        
                        
                    	$this->response->getContent()->assign('page', 'home');
                        $this->response->getContent()->assign('name', 'Nouveautés');
                        $this->response->setTemplate('home.tpl');
                    } else {
                        $this->response->getContent()->assign('email', $this->email); 
                        $this->response->getContent()->assign('errorMessage', 'L\'adresse email ou le mot de passe est incorrect');
                        $this->response->setTemplate('signIn.tpl');  
                    }
                } else {
                    $this->response->getContent()->assign('errorMessage', 'L\'adresse email ou le mot de passe est incorrect');
                    $this->response->setTemplate('signIn.tpl');
                }
            } else {
                $this->response->setTemplate('signIn.tpl');                
            }
            
            return $this->response;
        }
        
        function errorParameters() {
            $error = false;
            
            $regExEmail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-z\-0-9]+\.)+[a-z]{2,}))$/i';
            $regExPassword = '/.{6,}/';
            
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
            
            return $error;
        }
        
        function testConnection() {
            $result = false;
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            
            $user = UserQuery::create()->findOneByEmail($this->email);
            
            if($user && password_verify($this->password, $user->getPassword())) {
                $this->createSession($user);
                $result = true;
            }
            
            return $result;
        }
        
        function createSession($user) {
            $_SESSION['userId'] = $user->getId();
            $_SESSION['userFirstName'] = $user->getFirstName();
        }
    }
?>