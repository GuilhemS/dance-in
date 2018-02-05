<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 31/01/18
 * Time: 15:58
 */

require_once 'Controleur/ControleurConnexion.php';

class Routeur {

    // Route une requete entrante, execution de la bonne methode de controle en fonction de l'URL
    public function routeurRequete(){
        if (isset($_GET['entite'])) {

            switch ($_GET['entite']) {
                case 'connexion' :
                    switch ($_GET['action']) {
                        case 'connexion' : // Si pas encore connecte
                            $connexion = new ControleurConnexion();
                            $connexion->getFormConn();
                            break;
                        case 'traiterConnexion' : // Traitement du login et mot de passe
                            $connexion = new ControleurConnexion();
                            $connexion->traiterConn();
                            break;
                        case 'deconnexion' : // Deconnexion
                            $deconnexion = new ControleurConnexion();
                            $deconnexion->deconnexion();
                        default : // Pour tout autre valeur on affiche la page de connexion
                            $connexion = new ControleurConnexion();
                            $connexion->getFormConn();
                            break;
                    }

            }
        }
    }
}