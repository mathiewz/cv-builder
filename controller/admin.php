<?php
	require('model/admin.php');
	session_start ();
	$views = array();
    $notifs = array();
	if(isset($_POST['login']) && isset($_POST['password'])){
		$_SESSION['connected'] = connexion($_POST['login'], $_POST['password']);
	}
	if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
		$views[] = 'menuAdmin';
	} else {
        require_once('classes/Notification.class.php');
        $notifs[] = new Notification(Notification::$ERR_MESSAGE, "Echec de l'authentification");
		$views[] = 'login';
	}
	require('view/baseView.php');
?>