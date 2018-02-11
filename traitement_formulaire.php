<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 28/01/18
 * Time: 12:44
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="title" content="Dance'In"/>
    <meta name="description" content="Site vitrine Dance'In"/>
    <meta name="keywords" content="HTML,CSS,XML,JavaScript"/>
    <meta name="author" content="Alice DEVESA, Guilhem SABATHIER"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include('include/nav.php'); ?>
    <div class="contenu">

<?php

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

    // Quand le serveur sera configuré pour l'envoi de mail
    $config = "false";


    // On test si le formulaire a été soumis
    if (!isset($_POST['envoi'])) {
        echo '<p>'.$message_erreur_formulaire.'</p>'.'\n';
    } else {

        /*
         * cette fonction sert à nettoyer et enregistrer un texte
         */
        function Rec($text) {
            $text = htmlspecialchars(trim($text), ENT_QUOTES);
            $text = nl2br($text);
            return $text;
        };

        /*
         * Cette fonction sert à vérifier la syntaxe d'un email
         */
        function IsEmail($email) {
            $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
            return (($value === 0) || ($value === false)) ? false : true;
        }

        // Formulaire envoyé on récupère tous les champs
        $nom = (isset($_POST['nom']) ? Rec($_POST['nom']) : '');
        $email = (isset($_POST['email']) ? Rec($_POST['email']) : '');
        $objet = (isset($_POST['objet']) ? Rec($_POST['objet']) : '');
        $message = (isset($_POST['message']) ? Rec($_POST['message']) : '');

        // On vérifique l'email soit correct
        $email = (IsEmail($email) ? $email : '');

        // On créé l'email seulement si les 4 champs sont correctement renseignés
        if (($nom != '') && ($email != '') && ($objet != '') && ($message != '')) {
            // On génère puis on envoie l'email
            $headers = 'MIME-Version: 1.0' . '\r\n';
            $headers .= 'From: ' . $nom . ' <' . $email . '>' . '\r\n' .
                        'Reply-To: ' . $email . '\r\n' .
                        'Content-Type : text/plain; charset="utf-8"; DelSp="Yes"; format=flowed ' . '\r\n' .
                        'Content-Disposition : inline' . '\r\n' .
                        'Content-Transfer-Encoding: 7bit' . '\r\n' .
                        'X-Mailer:PHP/' . phpversion();

            // Envoyer un copie au visiteur ?
            if ($copie == 'oui') {
                $cible = $destinataire . ';' . $email;
            } else {
                $cible = $destinataire;
            }

            // Envoi du mail
            $num_emails = 0;
            $tmp = explode(';', $cible);

            foreach ($tmp as $email_destinataire) {
                if (mail($email_destinataire, $objet, $message, $headers)) {
                    $num_emails++;
                }
            }
            if ((($copie == 'oui') && ($num_emails == '2')) || (($copie == 'non') && ($num_emails == '1')) || ($config == 'false')) {
                echo '<p>' . $message_envoye . '</p>';
            } else {
                echo '<p>' . $message_non_envoye . '</p>';
            }
        } else {
            // Le formulaire n'est pas correctement saisie
            echo '<p>' . $message_formulaire_invalide . '<a href="formulaire.php"> Retour formulaire</a></p>' . '\n';
        }
    }

?>

    </div>
    <?php include('include/footer.php'); ?>
</body>
</html>
