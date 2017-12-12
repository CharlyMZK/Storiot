<?php
require '../vendor/autoload.php';
$app = new \Slim\App;

$app->get('/payOrder/{id}',

function ($resquest,$response,$args) {
    return $response->write("Your order #".$args['name']." is paid, congratulations !"); 
});

$app->run();