<?php
    require_once('model/PDO.php');

    function updateDesc($nom, $prenom, $birthday, $description){
        $pdo = PdoSio::getPdoSio();
        $request = "REPLACE into description (id, nom, prenom, birthday, description) values(1, '".$nom."', '".$prenom."', '".$birthday."', '".$description."');";
        $res = $pdo->actionRequest($request);
        return $res;
    }

    function getElement($column){
        $pdo = PdoSio::getPdoSio();
        $request = "SELECT ".$column." FROM description;";
        $res = $pdo->selectRequest($request);
        return $res[0][$column];
    }
?>