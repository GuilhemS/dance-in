<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 07/02/18
 * Time: 14:49
 */

include_once("Modele/ModeleArticles.php");

class ControleurArticles {
    private $modeleArticles;

    // Constructeur
    public function __construct(){
        $this->modeleArticles = new ModeleListeArticles();
    }

    public function getListeArticleAccueil() {
        $vListeAccueil = $this->modeleArticles->getListeAccueil();
        include 'Vue/VueListeArticles.php';
    }

    public function getArticleAccueil($id) {
        $vAccueil = $this->modeleArticles->getAccueil($id);
        include 'Vue/VueArticles.php';
    }

    public function modifArticleAccueil($id) {
        $vAccueil = $this->modeleArticles->getAccueil($id);
        include 'Vue/VueModif.php';
    }

    public function traiterModif() {
        if (isset($_POST['Valider'])) {
            $idArticle = $_POST['id'];
            include('Modele/connect.inc.php');
            $pdostat = $conn->prepare("UPDATE Articles SET titreArticle = ?, contenu = ? WHERE idArticle = ?");
            $pdostat->execute(array($_POST['titre'], $_POST['editor'], $idArticle));
            $vArticle = $this->modeleArticles->getAccueil($idArticle);
            include 'Vue/VueAccueil.php';
        } else {
            header('location:index.php?entite=Articles&action=U');
        }
    }

    public function supprimerArticle($id) {
        include('Modele/connect.inc.php');
        $pdostat = $conn->prepare("DELETE FROM Articles WHERE idArticle = ?");
        $pdostat->execute(array($id));
        header('location:index.php?entite=Articles&msgErreur=Element supprime avec succes');
    }

    public function ajouterArticle() {
        include 'Vue/VueAjout.php';
    }

    public function traiterAjout() {
        if (isset($_POST['Valider'])) {
            include ('Modele/connect.inc.php');
            $pdostat = $conn->prepare("INSERT INTO Articles ('catArticle', 'titreArticle', 'dateArticle', 'contenu') VALUES ?, ?, ?, ?;");
            $pdostat->execute(array($_POST['categorie'], $_POST['titre'], date('dmY'), $_POST['editor']));
        } else {
            header('location:index.php?entite=Articles&action=U&msgErreur=Erreur lors de l\'ajout de l\'article ...');
        }
    }
}
?>