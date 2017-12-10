<?php
    class mainItemController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch() {
            $items = $this->findItems();
        	$this->response->getContent()->assign('items', $items);
            $this->response->setTemplate('mainItem.tpl');
            return $this->response;
        }
        
        function findItems() {
            $search = $_POST['search'];
            $typeString = $this->request->action;

            if(!empty($typeString) && $typeString != "none" && $typeString != "sendForm") {
                $type = TypeQuery::create()->findOneByName($typeString);
                if($type) {
                    $itemTypes = ItemTypeQuery::create()->filterByTypeId($type->getId())->find();
                    if($itemTypes) {
                        $items = array();
                        foreach ($itemTypes as &$itemType) {
                            foreach(ItemQuery::create()->filterById($itemType->getItemId())->find() as &$item) {
                                array_push($items, $item);
                            }
                        }
                    }
                }
            } else if ($this->request->action == 'sendForm' && $search != null) {
                $search = '%'.ucfirst($search).'%';
                $items = ItemQuery::create()->where('Item.name LIKE ?', $search)->find();
            } else {
                $items = ItemQuery::create()->find();
            }
            
            return $items;
        }
    }
?>
