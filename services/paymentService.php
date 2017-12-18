<?php
require '../vendor/autoload.php';
$app = new \Slim\App;

function runPayment(){
    sleep(1);
    return true;
}

$app->post('/payOrder/{id}',function ($resquest,$response,$args) {
    if(runPayment()){
        return $response->write(JSONHandler::json_response('Le paiement a bien eu lieu, merci !',200));     
    }else{
        return $response->write(JSONHandler::json_response('Oups ! Un problème est survenu ..',500));    
    }
    
});

$app->run();