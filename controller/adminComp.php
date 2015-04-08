<?php
    session_start ();
    $views = array();
    $viewsContainer = array();

    if (isset($_SESSION['connected']) && $_SESSION['connected']==true) {
        if(isset($_POST['formSend'])){
            if($_POST['formSend'] == 'addCategorie'){
                print_r($_POST);
            }
        }

        $views[] = 'menuAdmin';
        $viewsContainer[] = 'adminComp';
    } else {
        $views[] = 'login';
    }
    require('view/baseView.php');
?>