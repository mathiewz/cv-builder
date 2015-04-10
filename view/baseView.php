<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fileinput.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="css/farbtastic.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/fileinput.min.js"></script>
    <script src="js/fileinput_locale_fr.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="js/farbtastic.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php 
    foreach ($views as $viewName){
        include('view/'.$viewName.'.php'); 
    }
    if((isset($viewsContainer) && sizeof($viewsContainer)>0) || (isset($notifs) && sizeof($notifs)>0)){
        echo '<div class="container">
            <div class="panel panel-default">
                <div class="panel-body">';
                    if(isset($notifs) && sizeof($notifs)>0){
                        foreach ($notifs as $notif){
                            echo '<div class="alert '.$notif->getType().'" role="alert">'.$notif->getMessage().'</div>';
                        }
                    }
                    if(isset($viewsContainer) && sizeof($viewsContainer)>0){
                        foreach ($viewsContainer as $viewName){
                            include('view/'.$viewName.'.php'); 
                        }
                    }
                echo '</div>
            </div>      
        </div>';
    }
    ?>
    
</body>
</html>