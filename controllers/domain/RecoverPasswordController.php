<?php
    class RecoverPasswordController extends DomainController{
        
        function launch(){
            if($this->request->action == 'sendForm') {
                $user = $this->getUser();
                if($user) {
                    $this->resetPassword($user);
                } 
                // On redirige toujours sur la page d'accueil pour pas donner d'indice sur les emails connus
                $this->response->setTemplate('home.tpl');
            } else {
                $this->response->setTemplate('recoverPassword.tpl');
            }
            
            return $this->response;
        }
        
        function getUser() {
            $email = $_POST['email'];
            return $user = UserQuery::create()->findOneByEmail($email);
        }
        
        function resetPassword($user) {
            $user->setPassword("0000");
            $user->save();
        }
    }
?>
