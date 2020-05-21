<!DOCTYPE html>
<html>
	<head>
		<title>Détail du Livre - ZeBook</title>
		<link rel="stylesheet" type="text/css" href="../menu.css">
		<link rel="stylesheet" type="text/css" href="detail.css">
	</head>

	<header>

		<!-- Bannière et menu du site -->
		
		<?php include("menu2.php"); ?>
	
	</header>

	<body>

		<?php include("../baseDonnées.php");

		$isbn = $_GET['isbn'];

		$detail = $bdd->prepare('SELECT isbn, titre, nom, prenom, role.libelle AS libelle_role, editeur.libelle AS libelle_editeur, genre.libelle AS libelle_genre, 											langue.libelle AS libelle_langue , nbpages, annee
							   FROM livre
							   JOIN editeur ON livre.editeur = editeur.id
							   JOIN auteur ON livre.isbn = auteur.idLivre
							   JOIN personne ON auteur.idPersonne = personne.id
							   JOIN genre ON livre.genre = genre.id
							   JOIN langue ON livre.langue = langue.id
							   JOIN role ON auteur.idRole = role.id
							   WHERE isbn = :isbn');
		$detail->execute(array(
           	'isbn' => $isbn));

		while($donnee = $detail->fetch())
		 	{
		 	?>	

		 	<img src="../images/<?php echo $donnee['isbn'];?>.jpg">

		 	<p>
		 		Titre : <?php echo $donnee['titre'];?> <br>
		 	   
		 	   	Auteur : <?php echo $donnee['prenom'] . " " . $donnee['nom'];?> <br>
		 	   
		 	   	Rôle : <?php echo $donnee['libelle_role'];?> <br>
		 	   
		 	   	Editeur : <?php echo $donnee['libelle_editeur'];?> <br>
		 	   
		 	   	Genre : <?php echo $donnee['libelle_genre'];?> <br>
		 	   
		 	   	Langue : <?php echo $donnee['libelle_langue'];?><br>
		 	   
		 	   	Nombre de pages : <?php
		 	   
		 	   	if($donnee['nbpages'] = "NULL"){
		 	   		echo "Inconnu";
		 	   	}else{
		 	   		echo $donnee['nbpages'];
		 	   	}?> <br>
		 	   
		 	   	Année de publication : <?php echo $donnee['annee'];?>
		 	</p>

		 	
		 	<?php 

			}

			$detail->closeCursor();

			?>
			<input type="submit" name="panier" value="Ajouter au panier">

	</body>
</html>