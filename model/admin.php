<?php
    require_once('model/PDO.php');

    function connexion($username, $password){
        $pdo = PdoSio::getPdoSio();
        $request = "SELECT COUNT(*) FROM users WHERE login ='".$pdo->quote($username)."' AND password = '".md5($password)."';";
        $res = $pdo->selectRequest($request);
        return intval($res[0]['COUNT(*)'])>0 ? true : false;
    }
?>