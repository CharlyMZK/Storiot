<?php
    class ActionController{
        protected $_request;
        protected $_response;
        
        public static function process(Request $request, Response $response){
            session_start();
            if($request->getParam('module') == ""){
                $module = 'home';
            }else{
                $module = $request->getParam('module');
            }
            if(!file_exists($path= 'php/'.$module.'.php')){
                $module = 'home';
                $path = 'php/home.php';
            } 
            require_once($path);
            $class = $module.'Controller';
            $controller = new $class($request,$response);
            return $controller->launch();
        }
        
    }
?>