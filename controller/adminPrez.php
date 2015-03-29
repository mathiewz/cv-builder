<?php
	session_start ();
	$views = array();
	$viewsContainer = array();
	var_dump($_FILES);

	if(isset($_FILES['photo'])){
		$uploaddir = 'img/uploads/';
		$extension = '.'.substr($_FILES['photo']['type'], 6);
		$uploadfile = $uploaddir.'profilPic-'.date('Y-m-d-H-i-s').$extension;
		move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
	}

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

		//on charge le nom des différentes photos pour l'apercu
		$profilPics = array();
		if ($handle = opendir('img/uploads')) {
		    while ($entry = readdir($handle)) {
		    	if($entry != '.' && $entry != '..'){
		        	$profilPics[] = $entry;
		    	}
		    }
		    closedir($handle);
		}

	} else {
		$views[] = 'login';
	}
	require('view/baseView.php');
?>