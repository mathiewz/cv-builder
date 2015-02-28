<?php
	if(isset($_POST['deco']) && $_POST['deco']){
		session_start ();
		unset($_SESSION['connected']);
	}
	$views = array();
	$views[] = 'cv';
	require('view/baseView.php');
?>