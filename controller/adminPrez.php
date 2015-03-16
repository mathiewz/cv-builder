<?php
	session_start ();
	$views = array();
	$viewsContainer = array();
	if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
		$views[] = 'menuAdmin';
		if(isset($_POST['formSend'])){
			if($_POST['formSend']=='UploadPhoto' && $_FILES['photo']['size'] == 0){
				$viewsContainer[] = 'notifNoImage';
			} else if($_POST['formSend']=='Description'){
				var_dump($_POST);
			}
		}
		$viewsContainer[] = 'adminPrez';
	} else {
		$views[] = 'login';
	}
	require('view/baseView.php');
?>