<?php
	session_start();
	$name = "Panier";
    $smarty->assign('name', $name);
	$smarty->display("cart.tpl");
?>
