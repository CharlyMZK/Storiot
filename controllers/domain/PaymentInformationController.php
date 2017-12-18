<?php
    class PaymentInformationController extends DomainController{
        
        function launch(){
            $name = 'Informations de paiements';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('payementInformation.tpl');
            return $this->response;
        }
     
      
    }
?>
