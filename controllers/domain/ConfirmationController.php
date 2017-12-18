<?php
    class ConfirmationController extends DomainController{
        
        function launch(){
            $name = 'Confirmation';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('confirmation.tpl');
            return $this->response;
        }
    }
?>
