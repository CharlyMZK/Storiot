<?php
require '../vendor/autoload.php';
$app = new \Slim\App;

function runPayment(){
    sleep(1);
    return true;
}

function getPaymentHashCode($ref,$expireMonth,$expireYear){
    return "#".$ref.$expireMonth.$expireYear;
}

$app->post('/payOrder/{id}',function ($resquest,$response,$args) {
    if(runPayment()){
        $hashcode = getPaymentHashCode($_POST["ref"],$_POST["expireMonth"],$_POST["expireYear"]);
        $date = $_POST["date"];
        $pricePaid = $_POST["amountWithTaxes"]." ".$_POST["devise"];
        return $response->write(JSONHandler::json_payment_response('Le paiement a bien eu lieu, merci !', $hashcode, $pricePaid, $date ,200));     
    }else{
        return $response->write(JSONHandler::json_payment_response('Oups ! Un problème est survenu ..', $hashcode,  $pricePaid, $date ,500));    
    }
    
});

$app->run();