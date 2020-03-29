<!DOCTYPE html>
<html>
	<head>
		<title>Livre par Auteur - ZeBook</title>
		<link rel="stylesheet" type="text/css" href="../../menu.css">
		<link rel="stylesheet" type="text/css" href="livreAuteur.css">
	</head>

	<body>

	<header>

		<!-- Bannière et menu du site -->
		
		<?php include("../detailLivre/menu2.php"); ?>

	</header>

		<?php include("../baseDonnées.php");

		$livre_auteur = $bdd->query('SELECT titre, isbn
									 FROM livre
									 JOIN auteur ON livre.isbn = auteur.idLivre
									 WHERE idPersonne = 9')

		?>

		<?php include("livreAuteur.php");?>

	</body>
</html>	