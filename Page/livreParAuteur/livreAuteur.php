<?php

		while($donnee = $livre_auteur->fetch()){
		?>

		<img src="../images/miniature/min_<?php echo $donnee['isbn'];?>.jpg">

		<h2><?php echo $donnee['titre'];?></h2> <br>

		<a href="../detailLivre/detail<?php echo $donnee['isbn'];?>">Voir plus</a>

		<?php
		}

		$livre_auteur->closeCursor();

		?>