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
        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="images/slides/imagedanse1.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="images/slides/imagedanse2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="images/slides/imagedanse3.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="images/slides/imagedanse4.jpg" style="width:100%">
        </div><!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="images/slides/imagedanse1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Danse contemporaine">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/slides/imagedanse2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Moche">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/slides/imagedanse3.jpg" style="width:100%" onclick="currentSlide(3)" alt="thug life">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/slides/imagedanse4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Classique">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="dropdown2.js">
    </script>
</section>
<?php include('include/footer.php'); ?>
</body>
</html>