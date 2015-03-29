<?php
	session_start ();
	$views = array();
	$viewsContainer = array();
	var_dump($_FILES);
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

		//On définitx les différents champs du formulaire de description
		$formNames = array();
		$forms['nom'] = 'Votre nom';
		$forms['prenom'] = 'Votre prenom';
		$forms['date'] = 'Votre date de naissance';
		$forms['description'] = 'Quelques mots sur vous';
	} else {
		$views[] = 'login';
	}
	require('view/baseView.php');
?>