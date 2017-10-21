<?php
	session_start();
	$name = "Confirmation";
    $smarty->assign('name', $name);
	$smarty->display("confirmation.tpl");
?>
