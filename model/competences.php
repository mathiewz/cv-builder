<?php
require_once('model/PDO.php');

function addCategorie($name, $color){
    $pdo = PdoSio::getPdoSio();
    $request = 'INSERT into comp_categ (name, color) values ('.$pdo->quote($name).','.$pdo->quote($color).');';
    $res = $pdo->actionRequest($request);
    return $res;
}

function  getAllCategories(){
    $pdo = PdoSio::getPdoSio();
    $req = 'SELECT * FROM comp_categ;';
    $ret = $pdo->selectRequest($req);
    return $ret;
}

?>