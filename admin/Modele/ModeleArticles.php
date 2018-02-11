<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 05/02/18
 * Time: 09:40
 */

include_once('Articles.php');
include_once('connect.inc.php');

class ModeleListeArticles {
    // methode qui renvoie un tableau d'objet article de la page d'accueil
    // ce tableau est construit à partir d'une requete SQL sur la table Article de la BD
    public function getListeAccueil() {
        // Variable conn initialisé dans le fichier connect.inc.php
        global $conn;
        $res = $conn->prepare("SELECT * FROM Articles WHERE catArticle = 'Accueil'");
        $res->execute();
        foreach ($res as $articles) {
            $listeAccueil[] = new Articles($articles['id'], $articles['titre'], $articles['contenu']);
        }
        return $listeAccueil;
    }

    public function getAccueil($id) {
        global $conn;
        $res = $conn->prepare("SELECT * FROM article WHERE catArticle = 'Accueil' AND id = :pId");
        $res->execute(array('pId' => $id));
        $article = $res->fetch();
        $unArticleAccueil = new Articles($article['id'], $article['titre'], $article['contenu']);
        return $unArticleAccueil;
    }

    public function getListeEvenement() {
        global $conn;
        $res = $conn->prepare("SELECT  * FROM Articles WHERE catArticle = 'Evenement'");
        $res->execute();
        foreach ($res as $articles) {
            $listeEvenement[] = new Articles($articles['id'], $articles['titre'], $articles['contenu']);
        }
        return $listeEvenement;
    }

    public function getEvenement($id) {
        global $conn;
        $res = $conn->prepare("SELECT * FROM Articles WHERE catArticle = 'Evenement' AND  id = :pId");
        $res->execute(array('pId' => $id));
        $articleEvenement = $res->fetch();
        $unArticleEvenement = new Articles($articleEvenement['id'], $articleEvenement['titre'], $articleEvenement['contenu']);
        return $unArticleEvenement;
    }

    public function getListePlanning() {
        global $conn;
        $res = $conn->prepare("SELECT * FROM Articles WHERE catArticle = 'Planning'");
        $res->execute();
        foreach ($res as $articles) {
            $listePlanning[] = new Articles($articles['id'], $articles['titre'], $articles['contenu']);
        }
        return $listePlanning;
    }

    public function getPlanning($id){
        global $conn;
        $res = $conn->prepare("SELECT * FROM Articles WHERE catArticle = 'Planning' AND id = :pId");
        $res->execute(array('pId' => $id));
        $articlePlanning = $res->fetch();
        $unArticlePlanning = new Articles($articlePlanning['id'], $articlePlanning['titre'], $articlePlanning['contenu']);
        return $unArticlePlanning;
    }

}