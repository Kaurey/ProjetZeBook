<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Livres - ZeBook</title>
		<link rel="stylesheet" type="text/css" href="../menu.css">
		<link rel="stylesheet" type="text/css" href="index.css"> 

	</head>
	
	<header>

		<!-- Bannière et menu du site -->
		
		<?php include("../menu.php"); ?>
	
	</header>
	
	<body>

		<h1 id="titre1">Listes des livres</h1>

		<?php include("baseDonnées.php"); 
	

		$livre = $bdd->query('SELECT titre, editeur, isbn, editeur.libelle AS libelle_editeur, prenom, nom, genre.libelle AS libelle_genre
								FROM livre
								JOIN editeur ON livre.editeur = editeur.id
								JOIN auteur ON livre.isbn = auteur.idLivre
								JOIN personne ON auteur.idPersonne = personne.id
								JOIN genre ON livre.genre = genre.id');
		?>

		<div class="livre">

		<?php
		while($donnee = $livre->fetch()){
		?>
			<div class="livre1">
				<img src="images/miniature/min_<?php echo $donnee['isbn'];?>.jpg">
				<h2><?php echo $donnee['titre']; ?></h2>
				<p id="text">
					Ecrit par <?php echo $donnee['prenom'] . " " . $donnee['nom']; ?><br>
					Edité par <?php echo $donnee ['libelle_editeur']; ?><br>
					Genre : <?php echo $donnee ['libelle_genre']; ?>
	   			</p><br><br>
	   			<a href="detailLivre/detail.php?isbn=<?php echo $donnee['isbn'];?>">Voir plus</a>
	   		</div>
		
		<?php 

		}

		$livre->closeCursor();

		?>

		</div>
	   	 	
	   	<footer>
	   	</footer>
	</body>
</html>