<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 24/01/18
 * Time: 14:22
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
        <section>
            <!-- Container for the image gallery -->
            <div class="contenu">
                <?php
                $fichier = "galerie.xml";
                $xml = simplexml_load_file($fichier);
                $longueur = 0;
                foreach ($xml as $photo) {
                    echo '<div class="mySlides">';
                    echo '<img src="images/slides/'.$photo->nom.'" style="width:100%">';
                    echo '</div>';
                    $longueur ++;
                }
                ?>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Image text -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <!-- Thumbnail images -->
                <div class="row">
                    <?php
                    $indice = 0;
                    foreach ($xml as $photo) {
                        echo '<div class="column">';
                        echo '<img class ="demo cursor" src="images/slides/'.$photo->nom.'" style="width:100%" onclick="currentSlide('.$indice++.')" alt="'.$photo->desciption.'">';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <script type="text/javascript" src="dropdown2.js">
            </script>
        </section>
        <?php include('include/footer.php'); ?>
    </body>
</html>
