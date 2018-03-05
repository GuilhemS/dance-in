<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 19/02/18
 * Time: 13:23
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
<?php include('include/nav.php'); ?>
    <div class="contenu">
        <?php
        if (isset($_GET['msgErreur'])) {
            echo "<BR/><h2>".$_GET['msgErreur']."</h2>";
        }?>
        <h1> Veuillez selectioner la photo à ajouter depuis votre ordinateur : </h1>
        <form method="POST" action="include/upload.php" enctype="multipart/form-data">
            </br>
            <p><label for="photo">Photo : </label><input type="file" name="newPhoto"></p>
            <p><label for="description">Description : </label><input type="text" id="description" name="description" tabindex="2" /></p>
            <input type="submit" name="envoyer" value="Ajouter la photo">
            </br>
        </form>
        </br>
        <a href="index.php?entite=Galerie&action=R">Retour</a>
    </div>
</body>
</html>
