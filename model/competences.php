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

function getAllCategoriesName(){
    $array = getAllCategories();
    $ret = array();
    foreach($array as $catFromTable){
        $ret[$catFromTable['id']]=$catFromTable['name'];
    }
    return $ret;
}

function addCompetence($name, $idCategorie, $niveau){
    $pdo = PdoSio::getPdoSio();
    $request = 'INSERT into competence (name, idCateg, niveau) values ('.$pdo->quote($name).','.$idCategorie.','.$niveau.');';
    $res = $pdo->actionRequest($request);
    return $res;
}

function  getAllCompetences(){
    $pdo = PdoSio::getPdoSio();
    $req = 'SELECT * FROM competence ORDER BY niveau DESC;';
    $ret = $pdo->selectRequest($req);
    return $ret;
}

function getAllCompetencesWithCatName(){
    $array = getAllCompetences();
    foreach($array as $key => $compFromTable){
        $array[$key]['categName']=getCatNameFromId($compFromTable['idCateg']);
    }
    return $array;
}

function getCatNameFromId($id){
    $pdo = PdoSio::getPdoSio();
    $req = 'SELECT name FROM comp_categ WHERE id='.$id.';';
    $ret = $pdo->selectRequest($req);
    return $ret[0]['name'];
}

function deleteComp($id){
    $pdo = PdoSio::getPdoSio();
    return $pdo->deleteRequest($id, "competence");
}

function deleteCat($id){
    $pdo = PdoSio::getPdoSio();
    return $pdo->deleteRequest($id, "comp_categ");
}

function updateCategorie($id, $name, $color){
    $pdo = PdoSio::getPdoSio();
    $request = 'UPDATE comp_categ set name='.$pdo->quote($name).', color='.$pdo->quote($color).' WHERE id='.$id.';';
    return $pdo->actionRequest($request);
}

function updateCompetence($id, $name, $idCategorie, $niveau){
    $pdo = PdoSio::getPdoSio();
    $request = 'UPDATE competence set name='.$pdo->quote($name).', idCateg='.$idCategorie.', niveau='.$niveau.' WHERE id='.$id.';';
    return $pdo->actionRequest($request);
}

?>