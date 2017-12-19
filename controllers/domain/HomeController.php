<?php
    class HomeController extends DomainController{
        
        function launch() {
            if($this->request->action == 'signOut'){
                $this->signOut();   
            }
            
            
            return $this->returnToHome();
        }
     
        function signOut() {
            $_SESSION['userId'] = 0;
            $_SESSION['userFirstName'] = '';
        }
      
    }
?>
