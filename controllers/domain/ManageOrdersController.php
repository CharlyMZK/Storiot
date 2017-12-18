<?php
    class ManageOrdersController extends DomainController{

        function launch(){
            $name = 'Gestion des commandes';
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('manageOrders.tpl');
            return $this->response;
        }
     
      
    }
?>
