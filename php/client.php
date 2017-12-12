<?php
	$erreur = false;
	if ($action == 'validation') {
		$nom = $_POST ['nom'];
		$prenom = $_POST ['prenom'];
		$email = $_POST ['email'];
		$erreur = true;
		if ($erreur) $smarty->display('$page.tpl');
	} else $smarty->display('$page.tpl');
?>
