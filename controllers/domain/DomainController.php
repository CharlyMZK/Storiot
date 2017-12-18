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