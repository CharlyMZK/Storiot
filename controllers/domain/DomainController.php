<?php
    abstract class DomainController{
        
        public $publisher;
        public $request;
        public $response;
        public static $ERROR_CODE = 500;
        public static $OK_CODE = 200;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        public function returnToHome() {

            $newItems = ItemQuery::create()->filterById(array('min' => 1, 'max' => 2))->find();
            $promotedItems = ItemQuery::create()->filterById(array('min' => 3, 'max' => 4))->find();
            $bestReviewItems = ItemQuery::create()->filterById(5)->find();
            
            $this->response->getContent()->assign('newItems', $newItems);
            $this->response->getContent()->assign('promotedItems', $promotedItems);
            $this->response->getContent()->assign('bestReviewItems', $bestReviewItems);
            
            
        	$this->response->getContent()->assign('page', 'home');
            $this->response->getContent()->assign('name', 'Nouveautés');
            $this->response->setTemplate('home.tpl');
            
            return $this->response;
        }
        
        public static function isUserConnected(){
            $isConnected = null;
            if($_SESSION['userId'] != 0){
                $isConnected = true;
            }else{
                $isConnected = false;
            }
            return $isConnected;
        }
    }
?>