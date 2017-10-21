<?php
	session_start();
	$name = "Account";
    $smarty->assign('name', $name);
	$smarty->display("account.tpl");
?>
