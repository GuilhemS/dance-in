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

	<div class="contenu">

		<?php
		$bdd = new PDO('mysql:host=localhost;dbname=dance-in;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$reponse = $bdd->query('SELECT * FROM article WHERE titreArticle = "Acceuil";');

		while ($donnees = $reponse->fetch()){
			?>

			<?= $donnees['contenu']; ?> </p>
			_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
		</br>
	</br>

	<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

</div>

<div class="contenu">
	<table style="width: 745px;" align="center">
		<tr>
			<td>
				<img alt="Photo Marianne" src="images/Equipelogo.png" />
			</td>
			<td>
				<img alt="Photo Jeanne" src="images/Equipelogo.png" />
			</td>
			<td>
				<img alt="Photo Charlotte" src="images/Equipelogo.png" />
			</td>
		</tr>
		<tr>
			<td>
				Marianne est la fondatrice de l'école elle enseigne la danse classique et le contemporain.
			</td>
			<td>
				Jeanne enseigne depuis 10 ans maintenant le hip-hop.
			</td>
			<td>
				Charlotte a fini sa formation à l'opéra de Paris la saison dernière elle enseigne les claquettes et le modern jazz.
			</td>
		</tr>
	</table>
</div>

<?php include('include/footer.php'); ?>
</body>
</html>
