<?php
    require('../model/PDO.php');

    $id = $_POST['id'];
    $pdo = PdoSio::getPdoSio();
    $req = 'SELECT * FROM parcours WHERE id = '.$id.';';
    $retRequest = $pdo->selectRequest($req);
    $ret = substr(json_encode($retRequest),1,-1);
    echo $ret;
?>