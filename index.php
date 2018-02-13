<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="title" content="Dance'In"/>
	<meta name="description" content="Site vitrine Dance'In"/>
	<meta name="keywords" content="HTML,CSS,XML,JavaScript"/>
	<meta name="author" content="Alice DEVESA, Guilhem SABATHIER"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" media="screen and (max-width: 200px) and (max-width:640p" href="responstyle.css" type="text/css"/>
</head>

<body>
	<?php include('include/nav.php');?>
<section>
	<div class="contenu">

		<?php
		$bdd = new PDO('mysql:host=localhost;dbname=dance-in;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$reponse = $bdd->query('SELECT * FROM Articles WHERE catArticle = "Accueil";');

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

<div class="contenu" style="display: flex; flex-wrap: wrap; flex-direction: row; justify-content: center;">

	<SPAN>
		<div class="circle" style="background-image:url(images/chorégraphe.png);"></div>
		<div style="width:200px"> Marianne est la fondatrice de l'école elle enseigne la danse classique et le contemporain. </div>
	</SPAN>
	<SPAN>
		<div class="circle" style="background-image:url(images/Equipelogo.png);"></div>
		<div style="width:200px"> Jeanne enseigne depuis 10 ans maintenant le hip-hop. </div>
	</SPAN>
	<SPAN>
		<div class="circle" style="background-image:url(images/Equipelogo.png);"></div>
		<div style="width:200px"> Charlotte a fini sa formation à l'opéra de Paris la saison dernière elle enseigne les claquettes et le modern jazz. </div>
	</SPAN>

</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</section>
<?php include('include/footer.php'); ?>
</body>
</html>
