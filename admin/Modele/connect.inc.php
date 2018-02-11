<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 05/02/18
 * Time: 09:05
 */
    $user = 'root';
    $mdp = 'beurredekarite';
    try {
        $conn = new PDO ('mysql:host=localhost;dbname=dance-in;charset=UTF8', $user, $mdp, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }
    catch (PDOException $e) {
        echo 'Erreur : '.$e->getMessage();
        die();
    }
?>