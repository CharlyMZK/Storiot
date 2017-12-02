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
        
        function launch(){
            $name = 'Produits';
            $items = ItemQuery::create()->find();
        	$this->response->getContent()->assign('items', $items);
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate('mainItem.tpl');
            return $this->response;
        }
     
    }
?>
