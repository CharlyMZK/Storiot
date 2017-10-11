<?php
	// LIBS
	require 'vendor/autoload.php';
    require_once  'generated-conf/config.php';
	
	// SMARTY
	$smarty = new Smarty ();
	
	$smarty->template_dir = 'templates/';
	$smarty->compile_dir = 'templates_c/';
	$smarty->config_dir = 'configs/';
	$smarty->cache_dir = 'cache/';

	
	// FRONT CONTROLEUR	
	if (isset ($_GET ['page'])) $page = $_GET ['page']; else $page = "home";
	if (isset ($_GET ['action'])) $action = $_GET ['action']; else $action = "";
		
	if ($page) {
		require("php/$page.php");
	} else {
		require("php/home.php");
	}
?>
