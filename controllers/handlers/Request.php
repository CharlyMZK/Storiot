<?php
    class Request {
        
        public $module;
        public $action;
        
        function __construct() {
            $this->route();
        }
    
        public function route()
        {
            if (isset($_GET['module'])){
                $this->module = $this->getParam('module');
            }else{
                $this->module = 'home';
            }
            
            if (isset($_GET['action']))
            {
                $this->action = $this->getParam('action');
            }else{
                $this->action = 'none';
            }
        }
        
        public function getParam($key){
            if($key == 'module'){
                return $_GET['module'];
            }
            if($key == 'action'){
                return $_GET['action'];
            }
        }
    }
?>