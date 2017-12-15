<?php
	// Libs
	require 'vendor/autoload.php';
	require 'domain/JSONHandler.php';
	require 'controllers/FrontController.php';
	require 'controllers/ActionController.php';
    require_once  'generated-conf/config.php';
    
	// Routes
	FrontController::dispatch();
?>
