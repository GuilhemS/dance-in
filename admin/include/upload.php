<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 03/03/18
 * Time: 19:21
 */

$dossier = '../../images/slides/';
$fichier = basename($_FILES['newPhoto']['name']);
$taille_maxi = 1000000;
$taille = filesize($_FILES['newPhoto']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['newPhoto']['name'], '.');
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
    $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
    $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
    //On formate le nom du fichier ici...
    $fichier = strtr($fichier,
        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    if(move_uploaded_file($_FILES['newPhoto']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
    {
        header('location:../index.php?entite=Galerie&action=R&msgErreur=Upload effectué avec succès !');
    }
    else //Sinon (la fonction renvoie FALSE).
    {
        header('location:../index.php?entite=Galerie&action=A&msgErreur=Echec de l\'upload !');
    }
}else{
    header('location:../index.php?entite=Galerie&action=A&msgErreur=' + $erreur);
}
