<!DOCTYPE html>
<html>
	<head>
		<title>Détail du Livre - ZeBook</title>
		<link rel="stylesheet" type="text/css" href="../../menu.css">
		<link rel="stylesheet" type="text/css" href="detail.css">
	</head>

	<header>

		<!-- Bannière et menu du site -->
		
		<?php include("menu2.php"); ?>
	
	</header>

	<body>

		<?php include("../baseDonnées.php");

		$parametre_isbn = $_GET['isbn'];

		$detail = $bdd->query('SELECT isbn, titre, nom, prenom, role.libelle AS libelle_role, editeur.libelle AS libelle_editeur, genre.libelle AS libelle_genre, 											langue.libelle AS libelle_langue , nbpages, annee
							   FROM livre
							   JOIN editeur ON livre.editeur = editeur.id
							   JOIN auteur ON livre.isbn = auteur.idLivre
							   JOIN personne ON auteur.idPersonne = personne.id
							   JOIN genre ON livre.genre = genre.id
							   JOIN langue ON livre.langue = langue.id
							   JOIN role ON auteur.idRole = role.id
							   WHERE isbn = $parametre_isbn'); // Je n'ai pas réussi à trouver comment insérer une variable dans l'isbn malgré mes recherches sur internet

		 ?>

		 <?php include("../baseDonnées");?>


		 
		

	</body>
</html>