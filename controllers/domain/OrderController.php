<?php
    class OrderController extends DomainController{
        
        function launch(){
            $this->response->setTemplate('order.tpl');
            return $this->response;
        }
     
    }
?>
