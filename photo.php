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
		<div class="photo">
	      <div class="image-slider">
	         <div class="mySlide">
	            <img src="images/slides/imagedanse1.jpg" style="width:100%; margin-bottom:-6px">
	         </div>

	         <div class="mySlide">
	            <img src="images/slides/imagedanse2.jpg" style="width:100%">
	         </div>

	         <div class="mySlide">
	            <img src="images/slides/imagedanse3.jpg" style="width:100%">
	         </div>

	         <div class="mySlide">
	            <img src="images/slides/imagedanse4.jpg" style="width:100%">
	         </div>

	         <!-- Boutons suivant et précédent -->
	         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	         <a class="next" onclick="plusSlides(1)">&#10095;</a>

	         <!-- Text de l'image -->
	         <div class="caption-container">
	            <p id="caption"></p>
	         </div>

				<div class="row">
					<div class="column">
						<img class="demo cursor" src="images/slides/imagedanse1.jpg" alt="image1" style="width:100%" onclick="currentSlide(1)">
					</div>
					<div class="column">
						<img class="demo cursor" src="images/slides/imagedanse2.jpg" alt="image2" style="width:100%" onclick="currentSlide(2)">
					</div>
					<div class="column">
						<img class="demo cursor" src="images/slides/imagedanse3.jpg" alt="image3" style="width:100%" onclick="currentSlide(3)">
					</div>
					<div class="column">
						<img class="demo cursor" src="images/slides/imagedanse4.jpg" alt="image4" style="width:100%" onclick="currentSlide(4)">
					</div>
				</div>
	      </div>
		</div>
		<script type="text/javascript" src="slideshow.js">
		</script>
		<?php include('include/footer.php'); ?>
	</body>
</html>
