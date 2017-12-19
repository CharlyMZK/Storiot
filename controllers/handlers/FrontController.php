<?php
    abstract class FrontController{
        
        public static function dispatch(){
            $request = new Request();
            $response = new Response();
            
            try{
            ActionController::process($request, $response)->display();
            }catch(Exception $e){
                $response = FrontController::create404response($response)->display();
            }
        }
        public static function create404response($response){
            $response->setTemplate('404.tpl');
            return $response;
        }
    }
?>