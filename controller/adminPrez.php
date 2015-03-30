<?php
    session_start ();
    $views = array();
    $viewsContainer = array();

    if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
        require('model/presentation.php');        
        $views[] = 'menuAdmin';
        if(isset($_POST['formSend'])){
            if($_POST['formSend']=='UploadPhoto'){
                $uploaddir = 'img/uploads/';
                $extension = '.'.substr($_FILES['photo']['type'], 6);
                $uploadfile = $uploaddir.'profilPic-'.date('Y-m-d-H-i-s').$extension;
                move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
            } else if($_POST['formSend']=='Description'){
                $birthday = substr($_POST['birthday'], 6,4).'-'.substr($_POST['birthday'], 3,2).'-'.substr($_POST['birthday'], 0,2);
                updateDesc($_POST['nom'],$_POST['prenom'],$birthday,$_POST['description']);
            }
        }
        $viewsContainer[] = 'adminPrez';

        //On définitx les différents champs du formulaire de description
        $formNames = array();
        $forms['nom'] = 'Votre nom';
        $forms['prenom'] = 'Votre prenom';
        $forms['birthday'] = 'Votre date de naissance';
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