<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 31/01/18
 * Time: 15:57
 */

session_start();
require 'Controleur/Routeur.php';
$routeur = new Routeur();
$routeur->routeurRequete();
?>
