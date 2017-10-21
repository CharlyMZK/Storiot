<?php
	session_start();
	$name = "Cart";
    $smarty->assign('name', $name);
	$smarty->display("cart.tpl");
?>
