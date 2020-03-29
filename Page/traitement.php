<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	
	<body>

		<?php include("baseDonnées.php");?>

		<?php

		$req = $bdd->prepare('INSERT INTO livre(titre, annee, isbn, editeur, genre, langue, nbPages) VALUES (:titre, :annee, :isbn, :editeur, :genre, :langue, :nbPages )');

		$req->execute(array(
			'titre' -> $_POST['titre'],
			'annee' -> $_POST['annee'],
			'isbn' -> $_POST['isbn'],
			'editeur' -> $_POST['editeur'],
			'genre' -> $_POST['genre'],
			'langue' -> $_POST['langue'],
			'nbPages'-> $_POST['Nb_pages']
			));

		?>


	</body>
</html>