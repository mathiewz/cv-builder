<?php
    session_start ();
    $views = array();
    $viewsContainer = array();

    if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
        require('model/presentation.php');		
        $views[] = 'menuAdmin';
        $viewsContainer[] = 'adminComp';
    } else {
        $views[] = 'login';
    }
    require('view/baseView.php');
?>