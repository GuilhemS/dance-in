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
        <h1> Veuillez selectioner la photo à ajouter depuis votre ordinateur : </h1>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            </br>
             <!-- On limite le fichier à 100Ko -->
             <input type="hidden" name="MAX_FILE_SIZE" value="100000">
             Photo : <input type="file" name="newPhoto">
             <input type="submit" name="envoyer" value="Ajouter la photo">
            </br>
        </form>


        <?php
        if(isset($_FILES['newPhoto']))
        {
             $dossier = 'upload/';
             $fichier = basename($_FILES['avatar']['name']);
             if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
             {
                  echo 'Upload effectué avec succès !';
             }
             else //Sinon (la fonction renvoie FALSE).
             {
                  echo 'Echec de l\'upload !';
             }
        }
        ?>
        </br>
        <a href="index.php?entite=Galerie&action=R">Retour</a>
    </div>
</body>
</html>
