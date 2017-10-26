<?php
    $firstItem = ItemQuery::create()->findPK(1);
    $name = "Produit";
    $smarty->assign('item', $firstItem);
    $smarty->assign('name', $name);
	$smarty->display("item.tpl");
?>
