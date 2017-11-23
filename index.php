<?php
	// LIBS
	require 'vendor/autoload.php';
	require 'controllers/FrontController.php';
	require 'controllers/ActionController.php';
    require_once  'generated-conf/config.php';
    
	// Routes
	FrontController::dispatch();
?>
