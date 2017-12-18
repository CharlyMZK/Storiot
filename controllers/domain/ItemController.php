<?php
    class ItemController extends DomainController{

        function launch(){
            $itemId = $_POST['id'];
            $firstItem = ItemQuery::create()->findPK($itemId);
            $name = 'Produit';
            $this->response->getContent()->assign('name', $name);
            $this->response->getContent()->assign('item', $firstItem);
            $this->response->setTemplate('item.tpl');
            return $this->response;
        }
    }
?>
