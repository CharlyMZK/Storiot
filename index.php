<?php
	// Libs
	require 'vendor/autoload.php';
	require 'libs/JSONHandler.php';
	require 'controllers/handlers/FrontController.php';
	require 'controllers/handlers/ActionController.php';
    require_once  'generated-conf/config.php';
    
	// Routes
	FrontController::dispatch();
?>
