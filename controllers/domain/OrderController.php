<?php
    class OrderController extends DomainController{
        
            function getUserConnectedOrders(){
            return PackageQuery::create()->findByUserId($_SESSION['userId']);
        }
        
        function launch(){
            $user = UserQuery::create()->findOneById($_SESSION['userId']);
            $orders = $this->getUserConnectedOrders();
            $this->response->getContent()->assign('orders', $orders);
            $this->response->setTemplate('manageOrders.tpl');
            return $this->response;
        }
     
  
     
     
    }
?>
