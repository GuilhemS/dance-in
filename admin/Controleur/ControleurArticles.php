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
            $pdostat = $conn->prepare("UPDATE Articles SET titreArticle = ?, contenu = ? WHERE id = ?");
            $pdostat->execute(array($_POST['titreArticle']), $_POST['contenu'], $idArticle);
            $vArticle = $this->modeleArticles->getAccueil($idArticle);
            include 'Vue/VueArticles.php';
        } else {
            header('location:index.php?entite=Articles&action=U');
        }
    }
}
?>