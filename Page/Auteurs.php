<!DOCTYPE html>
test3 branche
<html>
	<head>
		<meta charset="utf-8">
		<title>Auteurs - ZeBook</title>
		<link rel="stylesheet" type="text/css" href="../menu.css">
		<link rel="stylesheet" type="text/css" href="auteur.css">
	</head>

	<header>
		
		<!-- Bannière et menu du site -->

		<?php include("../menu.php"); ?>

	</header>

	<body>

		<h1 id="titre1">Auteurs</h1>

		<?php include("baseDonnées.php");

		$auteur = $bdd->query('SELECT DISTINCT prenom, nom, personne.id AS id_personne
							  FROM auteur
							  JOIN personne ON auteur.idPersonne = personne.id');
		?>
		
		<div class="auteur">
		
			<?php

			while($donnee = $auteur->fetch()){

			?>

				<div class="auteur1">
				
					<a href="livreParAuteur/livreAuteur<?php echo $donnee['id_personne']?>">
						<img src="images/auteurs/auteur<?php echo $donnee['id_personne'];?>.jpg">

						<h2><?php echo $donnee['prenom'] . " " . $donnee['nom'];?></h2>
					</a>

				</div>

			<?php

			}

			?>
		</div>
		

	</body>
</html>