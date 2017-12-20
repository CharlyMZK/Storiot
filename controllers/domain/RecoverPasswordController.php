<?php
    class RecoverPasswordController extends DomainController{
        private $email;
        
        function launch(){
            if($this->request->action == 'send') {
                $this->email = $_POST['email'];
                
                $this->response->getContent()->assign('email', $email);
                
                $user = $this->getUser();
                
                if($user) {
                    $this->response->getContent()->assign('successMessage', 'Le nouveau mot de passe est 000000');
                    $this->resetPassword($user);
                } else {
                    $this->response->getContent()->assign('errorMessage', 'L\'adresse email est inconnue');
                }
            } 
            $this->response->setTemplate('recoverPassword.tpl');
            
            return $this->response;
        }
        
        function getUser() {
            return $user = UserQuery::create()->findOneByEmail($this->email);
        }
        
        function resetPassword($user) {
            $user->setPassword(password_hash("000000", PASSWORD_DEFAULT));
            $user->save();
        }
    }
?>
