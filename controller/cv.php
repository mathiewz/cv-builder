<?php
    require_once 'model/parcours.php';
    require_once 'model/competences.php';
    require_once 'model/presentation.php';
    session_start ();
    if(isset($_SESSION['connected'])){    //Si on est connecté, on vérifie est ce que l'on a demandé la déconnexion, et si c'est le cas on vide la variable de session
        if(isset($_POST['deco']) && $_POST['deco']){
            unset($_SESSION['connected']);
            header('location: .');    //on recharge la page pour eviter que l'appui sur F5 propose de renvoyer le formulaire une nouvelle fois
        }
    }

    $views = array();
    $views[] = 'cv';
    $views[] = 'details';

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
    

    $data = array(
        'studies' => getListParcoursScol(),
        'pro' => getListParcoursPro(),
        'competences' => getAllCompetences(),
        'categories' => getAllCategories(),
    );

    require('view/baseView.php');
?>