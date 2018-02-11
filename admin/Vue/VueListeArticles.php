<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 10/02/18
 * Time: 16:43
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="title" content="Dance'In"/>
    <meta name="description" content="Site vitrine Dance'In"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php include('include/nav.php'); ?>
<div class="contenu">
    <?php
    if (isset($_GET['msgErreur'])) {
        echo "<BR/><h2>".$_GET['msgErreur']."</h2>";
    }
    if (isset($_SESSION['identifie'])) {
        if (count($vListeAccueil >= 1)) {
            
        }
    }

    ?>
</div>
<?php include('include/footer.php'); ?>
</body>
</html>
