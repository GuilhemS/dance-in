<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 28/01/18
 * Time: 12:44
 */

// Adresse mail destinataire
$destinataire = "guilhem.s@protonmail.com";

// Copie (envoie une copie au visiteur)
$copie = "oui";

// Message de confirmation du mail
$message_envoye = "Votre message a été envoyé avec succès !";
$message_non_envoye = "Une erreur est survenu. L'envoie de votre message a échoué";

// Message d'erreur du formulaire
$message_erreur_formulaire = "Vous devez d'abord envoyer <a href=\"formulaire.php\"> le formulaire</a>";
$message_formulaire_invalide = "Formulaire invalide ! Vérifiez que tous les champs soit bien remplis.";


// On test si le formulaire a été soumis
if(!isset($_POST['envoi'])){
    echo '<p>'.$message_erreur_formulaire.'</p>'.'\n';
}else{

}


