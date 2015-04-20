<?php
    require('model/presentation.php');
    session_start ();
    if(isset($_SESSION['connected'])){    //Si on est connecté, on vérifie est ce que l'on a demandé la déconnexion, et si c'est le cas on vide la variable de session
        if(isset($_POST['deco']) && $_POST['deco']){
            unset($_SESSION['connected']);
            header('location: .');    //on recharge la page pour eviter que l'appui sur F5 propose de renvoyer le formulaire une nouvelle fois
        }
    }

    $views = array();
    $views[] = 'cv';

    //on charge le nom des différentes photos pour les afficher dans la vue
    $profilPics = array();
    if ($handle = opendir('img/uploads')) {
        while ($entry = readdir($handle)) {
            if($entry != '.' && $entry != '..'){
                $profilPics[] = $entry;
            }
        }
        closedir($handle);
    }

    require('view/baseView.php');
?>