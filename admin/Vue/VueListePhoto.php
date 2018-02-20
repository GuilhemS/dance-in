<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 18/02/18
 * Time: 20:35
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
    }
    if (isset($_SESSION['identifie'])) {
        if ($vListePhoto->count() >= 1) {
            ?>
            Liste des photos :
            <br/><br/>
            <table border="2" align="center">
                <div class="liste">
                    <tbody style="align:center">
                    <tr><th>photo</th><th>description</th><th>supprimer</th></tr>
                    </tbody>
                    <?php
                    foreach ($vListePhoto as $photo) {
                        echo '<tr><td><img src="../images/slides/'.$photo->nom.'" alt="'.$photo->description.'" height="10%" width="20%"/></td>';
                        echo '<td>'.$photo->description.'</td>';
                        echo '<td align="center"><a href="index.php?entite=Galerie&action=D&id='.$photo->nom.'" onclick="return confirm(\"Etes vous sur de vouloir supprimer cet element?\")">
                                                            <img src="include/corbeille.png" alt="corbeille.png" /></a></td>';
                        echo '</tr>';
                    }
                    ?>
                </div>
            </table>
            <?php
        } else {
            echo 'Pas de pages ...';
        }
    }
    ?>
    <br/>
    <a href="index.php?entite=Galerie&action=A">Ajouter une photo</a>
</div>
</body>
</html>

