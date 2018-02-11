<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 05/02/18
 * Time: 09:37
 */

// Cette classe servira à transférer, en mode objet, des données entre le modèle, le controleur et la vue
class Articles {
    public $id;
    public $categorie;
    public $titre;
    public $contenu;

    public function __construct($id, $categorie, $titre, $contenu) {
        $this->id = $id;
        $this->categorie = $categorie;
        $this->titre = $titre;
        $this->contenu = $contenu;
    }
}
?>