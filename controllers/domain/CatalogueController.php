<?php
    class CatalogueController extends DomainController{ 
        
        function launch() {
            $items = $this->findItems();
        	$this->response->getContent()->assign('items', $items);
            $this->response->setTemplate('catalogue.tpl');
            return $this->response;
        }
        
        function findItems() {
            $request = $_GET['id'];
            $search = $_POST['search'];
            $typeString = $this->request->action;
            
            $this->response->getContent()->assign('search', $search);
            
            // Filter search
            if($typeString == 'filter' && isset($request)) {
                $type = TypeQuery::create()->findOneByName($request);
                if(isset($type)) {
                    $itemTypes = ItemTypeQuery::create()->filterByTypeId($type->getId())->find();
                    if(isset($itemTypes)) {
                        $items = array();
                        foreach ($itemTypes as &$itemType) {
                            foreach(ItemQuery::create()->filterById($itemType->getItemId())->find() as &$item) {
                                array_push($items, $item);
                            }
                        }
                    }
                }
            } else if ($this->request->action == 'search' && isset($search)) {
                // Search by user
                $search = '%'.$search.'%';
                $items = ItemQuery::create()->where('Item.name LIKE ?', $search)->find();
            } else {
                // All items
                $items = ItemQuery::create()->find();
            }
            
            return $items;
        }
    }
?>
