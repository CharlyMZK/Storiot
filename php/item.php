<?php
    class itemController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $itemId = $_POST["id"];
            $firstItem = ItemQuery::create()->findPK($itemId);
            $name = "Produit";
            $this->response->getContent()->assign('name', $name);
            $this->response->getContent()->assign('item', $firstItem);
            $this->response->setTemplate("item.tpl");
            return $this->response;
        }
     
      
    }
?>
