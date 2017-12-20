<?php
    class ItemController extends DomainController{

        function launch(){
            
            $itemId = $_GET['id'];
            
            $item = ItemQuery::create()->findOneById($itemId);
            
            if(isset($item)) {
                $this->response->getContent()->assign('item', $item);
                $this->response->setTemplate('item.tpl');
            } else {
                $this->response->setTemplate('404.tpl');
            }
            
            return $this->response;
        }
    }
?>
