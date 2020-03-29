<?php

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