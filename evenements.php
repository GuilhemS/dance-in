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
		<?php include('include/nav.php');?>
		<section>
				<div class="contenu">

					<?php
					$bdd = new PDO('mysql:host=localhost;dbname=dance-in;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

					$reponse = $bdd->query('SELECT * FROM Articles WHERE catArticle = "Evenement";');

					while ($donnees = $reponse->fetch()){
						?>
						<div class="noteEvenement">
							<blockquote class="note verte">
								<?= $donnees['contenu']; ?>
							</blockquote>
						</div>

							<?php
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
						?>

				</div>


		<?php include('include/footer.php'); ?>
	</body>
</html>
