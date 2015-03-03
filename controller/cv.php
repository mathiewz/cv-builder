<?php
	session_start ();
	if(isset($_SESSION['connected'])){	//Si on est connecté, on vérifie est ceque l'on a demandé la déconnexion, et si c'est le cas on vide la variable de session
		if(isset($_POST['deco']) && $_POST['deco']){
			unset($_SESSION['connected']);
			header('location: .');	//on recharge la page pour eviter que l'appui sur F5 propose de renvoyer le formulaire une nouvelle fois
		}
	}
	$views = array();
	$views[] = 'cv';
	require('view/baseView.php');
?>