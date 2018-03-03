<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 18/02/18
 * Time: 20:12
 */

include_once ('Modele/ModelePhoto.php');
class ControleurGalerie {
    private $modelePhoto;

    // Constructeur
    public function __construct() {
        $this->modelePhoto = new ModelePhoto();
    }

    public function getListePhoto() {
        $vListePhoto = $this->modelePhoto->getListePhoto();
        include 'Vue/VueListePhoto.php';
    }

    public function supprimerPhoto($id) {
        
    }

    public function ajouterPhoto() {
        include 'Vue/VueAjoutPhoto.php';
    }
}