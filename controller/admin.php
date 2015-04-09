<?php
	require('model/admin.php');
	session_start ();
    $views = array();
    $errorLogin = false;
	if(isset($_POST['login']) && isset($_POST['password'])){
		$_SESSION['connected'] = connexion($_POST['login'], $_POST['password']);
	}
	if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
		$views[] = 'menuAdmin';
	} else {
        require_once('classes/Notification.class.php');
        if(isset($_POST['login'])){
            $errorLogin = true;
        }
        $views[] = 'login';
	}
	require('view/baseView.php');
?>