<?php
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
    if($controller == 'admin'){require('controller/admin.php');}
    else{header('location:/404page');}
} else {
	//Si on ne spécifie pas de controller, on ouvre la page de présentation du CV
    require('controller/cv.php');
}
?>