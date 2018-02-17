<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 31/01/18
 * Time: 16:34
 */
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="title" content="Dance'In"/>
        <meta name="description" content="Site vitrine Dance'In"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

    <body>
    <div class="contenu">
        <?php
            if (isset($_GET['msgErreur'])) {
                echo "<h2>".$_GET['msgErreur']."</h2><BR/>";
            }
        ?>
        <form method='post' action='index.php?entite=connexion&action=traiterConnexion'>
            <fieldset>
                <legend>Veuillez entrer vos identifiants</legend>
                <p><label for="login">Login : </label><input type="text" id="login" name="login" tabindex="1" /></p>
                <p><label for="password">Mot de passe : </label><input type="password" id="password" name="password" tabindex="2" /></p>
                <div style="text-align: center"><input type="submit" name="Valider" value="Valider" /></div>
            </fieldset>
        </form>
        <br/>
        <p><a href="../index.php">Retour site</a></p>
    </div>
    </body>
</html>