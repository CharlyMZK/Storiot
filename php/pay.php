<?php
	$idClient = $_GET ["idClient"];
	$mt = $_GET ["mt"];

	// Client Restful
	// ...
	
	$smarty->assign ("client",$idClient);
	$smarty->assign ("montant",$mt);
	$smarty->assign ("trans",$buffer);
//	$smarty->display("$page.tpl"); 

$name = "Payer";
$smarty->assign('name', $name);
$smarty->display("pay.tpl");
?>

