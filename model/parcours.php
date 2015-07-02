<?php
require_once('model/PDO.php');

function addParcours($scolaire, $nom, $etablissement, $description, $ville, $debut, $fin){
    $pdo = PdoSio::getPdoSio();
    $request = 'INSERT into parcours (scolaire, nom, etablissement, description, ville, debut, fin) values (
        '.$pdo->quote($scolaire).',
        '.$pdo->quote($nom).',
        '.$pdo->quote($etablissement).',
        '.$pdo->quote($description).',
        '.$pdo->quote($ville).',
        '.$pdo->quote($debut).',
        '.$pdo->quote($fin).'
    );';
    $res = $pdo->actionRequest($request);
    return $res;
}

function  getListParcoursPro(){
    $pdo = PdoSio::getPdoSio();
    $req = 'SELECT * FROM parcours WHERE scolaire = 0;';
    $ret = $pdo->selectRequest($req);
    return $ret;
} 

function  getListParcoursScol(){
    $pdo = PdoSio::getPdoSio();
    $req = 'SELECT * FROM parcours WHERE scolaire = 1;';
    $ret = $pdo->selectRequest($req);
    return $ret;
} 

function getParcoursFromId($id){
    $pdo = PdoSion::getPdoSion();
    $req = 'SELECT * FROM parcours WHERE id = '.$id.';';
    $ret = $pdo->selectRequest($req);
    return $ret;
}

function deleteParcours($id){
    $pdo = PdoSio::getPdoSio();
    return $pdo->deleteRequest($id, "parcours");
}
?>