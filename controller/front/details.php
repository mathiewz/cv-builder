<?php
    require_once 'model/parcours.php';
    require_once 'model/competences.php';

    $data = array(
        'studies' => getListParcoursScol(),
        'pro' => getListParcoursPro(),
        'competences' => getAllCompetences(),
        'categories' => getAllCategories(),
    );

    require('view/details.php');
?>