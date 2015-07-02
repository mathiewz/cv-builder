<?php
    session_start ();
    $views = array();
    $viewsContainer = array();
    if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
        require_once('model/competences.php');
        require_once('model/parcours.php');

        if(isset($_POST['formSend'])){
            if($_POST['formSend'] == 'addCategorie'){
                addCategorie($_POST['nom'], $_POST['color']);
            } else if ($_POST['formSend'] == 'addCompetence') {
                addCompetence($_POST['nom'], $_POST['categorie'], $_POST['niveau']);
            } else if ($_POST['formSend'] == 'catDelete') {
                deleteCat($_POST['id']);
            } else if ($_POST['formSend'] == 'compDelete') {
                deleteComp($_POST['id']);
            } else if ($_POST['formSend'] == 'editCategorie') {
                updateCategorie($_POST['id'], $_POST['nom'], $_POST['color']);
            } else if ($_POST['formSend'] == 'editCompetence') {
                updateCompetence($_POST['id'], $_POST['nom'], $_POST['categorie'], $_POST['niveau']);
            } else if ($_POST['formSend'] == 'addParcours'){
                $scolaire = isset($_POST['scolaire']);
                $debut = substr($_POST['debut'], 6,4).'-'.substr($_POST['debut'], 3,2).'-'.substr($_POST['debut'], 0,2);
                $fin = substr($_POST['fin'], 6,4).'-'.substr($_POST['fin'], 3,2).'-'.substr($_POST['fin'], 0,2);
                addParcours($scolaire, $_POST['nom'], $_POST['boite'], $_POST['description'], $_POST['ville'], $debut, $fin);
            } else if ($_POST['formSend'] == 'deleteParcours') {
                deleteParcours($_POST['id']);
            }
        }

        $views[] = 'menuAdmin';
        $viewsContainer[] = 'adminComp';
        $viewsContainer[] = 'adminParcours';
        
        $categoriesSelect = getAllCategoriesName();
        $categories = getAllCategories();
        $competences = getAllCompetencesWithCatName();
        $parcoursPro = getListParcoursPro();
        $ecoles = getListParcoursScol();
    } else {
        $views[] = 'login';
    }
    require('view/baseView.php');
?>