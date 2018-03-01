<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 31/01/18
 * Time: 16:23
 */

class ControleurConnexion {
    public function getFormConn() {
        include 'Vue/VueFormAdmin.php';
    }

    public function traiterConn() {
        session_start();

        if (isset($_POST['Valider'])) {
            if (!isset($_POST['login']) || !isset($_POST['password']) || ($_POST['login'] != 'admin' || $_POST['password'] != 'admin') ) {
                header('location:index.php?entite=connexion&action=connexion&msgErreur=Erreur d\'identification...');
            } else {
                // Cas ou l'identification est correct
                $_SESSION['identifie'] = 'OK';
                echo 'le';
                header('location:index.php?entite=Accueil');
            }
        } else {
            // Tentative frauduleuse d'accéder à cette page sans passer par l'identification
            header('location:index.php?entite=connexion&action=connexion&msgErreur=Identification manquante...');
        }
    }

    public function deconnexion() {
        session_start();

        session_destroy();

        header('location:index.php?entite=connexion&action=connexion');
    }
}
