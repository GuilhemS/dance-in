<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 18/02/18
 * Time: 20:13
 */

class ModelePhoto {
    public function getListePhoto() {
        $fichier = "../galerie.xml";
        $xml = simplexml_load_file($fichier);
        return $xml;
    }
}