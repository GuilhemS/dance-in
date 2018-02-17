<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 31/01/18
 * Time: 15:58
 */

require_once 'Controleur/ControleurConnexion.php';
require_once 'Controleur/ControleurArticles.php';

class Routeur {

    // Route une requete entrante, execution de la bonne methode de controle en fonction de l'URL
    public function routeurRequete(){
        if (isset($_GET['entite'])) {

            switch ($_GET['entite']) {
                case 'Articles' :
                    switch ($_GET['action']) {
                        case 'R' : // R = Read = Lectures des articles ou d'un seul si parametre id
                            if (isset($_GET['id'])) {
                                $ctrlArt = new ControleurArticles();
                                $ctrlArt->getArticleAccueil($_GET['id']);
                            } else {
                                $ctrlArt = new ControleurArticles();
                                $ctrlArt->getListeArticleAccueil();
                            }
                            break;
                        case 'U' : // U = Update = Modification d'un article a partir de son id
                            if (isset($_GET['id'])) {
                                $ctrlArt = new ControleurArticles();
                                $ctrlArt->modifArticleAccueil($_GET['id']);
                            }
                            break;
                        case 'traiterU' : // Apres modification on traite la modification
                            $ctrlArt = new ControleurArticles();
                            $ctrlArt->traiterModif();
                            break;
                        case 'D' : // D = Delete = Suppression de l'article
                            $ctrlArt = new ControleurArticles();
                            $ctrlArt->supprimerArticle($_GET['id']);
                            break;
                        case 'A' : // A = Add = Ajout d'un nouvel article
                            $ctrlArt = new ControleurArticles();
                            $ctrlArt->ajouterArticle();
                            break;
                        case 'traiterA' : // Traitement de l'ajout d'un nouvel article
                            $ctrlArt = new ControleurArticles();
                            $ctrlArt->traiterAjout();
                        default : // Pour toutes les autres valeurs de parametre action, on affiche la liste page
                            $ctrlArt = new ControleurArticles();
                            $ctrlArt->getListeArticleAccueil();
                    }
                    break;
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

                case 'Accueil' :
                    if (isset($_SESSION['identifie'])) {
                        include 'Vue/VueAccueil.php';
                    } else {

                    }
                default: 	// pour toutes les autres valeurs du parametre 'entite', on affiche la liste des Categories
                    if (isset($_GET['id'])) {
                        $ctrlArt = new ControleurArticles();
                        $ctrlArt->getArticleAccueil($_GET['id']);
                    }
                    else {
                        $ctrlArt = new ControleurArticles();
                        $ctrlArt->getListeArticleAccueil();
                    }
                    break;
            }
        } else {
            if (isset($_SESSION['identifie'])) {
                /*$ctrlArt = new ControleurArticles();
                $ctrlArt->getListeArticleAccueil();*/
                include 'Vue/VueAccueil.php';
            } else {
                $connexion = new ControleurConnexion();
                $connexion->getFormConn();
            }
        }
    }
}