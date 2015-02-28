<?php
if(isset($_GET['controller'])){
    echo $_GET['controller'];
} else {
    require('cv.php');
}
?>