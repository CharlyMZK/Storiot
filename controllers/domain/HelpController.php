<?php
    class HelpController extends DomainController{
        
        function launch(){
            $name = 'Aide';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('help.tpl');
            return $this->response;
        }
    }
?>
