<?php
	require('model/admin.php');
	session_start ();
	$views = array();
	if(isset($_POST['login']) && isset($_POST['password'])){
		$_SESSION['connected'] = connexion($_POST['login'], $_POST['password']);
	}
	if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
		$views[] = 'menuAdmin';
	} else {
		$views[] = 'login';
	}
	require('view/baseView.php');
?>