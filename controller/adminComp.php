<?php
    session_start ();
    $views = array();
    $viewsContainer = array();

    if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
        require_once('model/competences.php');
        if(isset($_POST['formSend'])){
            if($_POST['formSend'] == 'addCategorie'){
                addCategorie($_POST['nom'], $_POST['color']);
            } else if ($_POST['formSend'] == 'addCompetence') {
                addCompetence($_POST['nom'], $_POST['categorie'], $_POST['niveau']);
            }
        }

        $views[] = 'menuAdmin';
        $viewsContainer[] = 'adminComp';
        
        $categoriesSelect = getAllCategoriesName();
        $categories = getAllCategories();
        $competences = getAllCompetencesWithCatName();
        print_r($competences);
    } else {
        $views[] = 'login';
    }
    require('view/baseView.php');
?>