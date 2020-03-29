<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire - ZeBook</title>
        <link rel="stylesheet" type="text/css" href="../menu.css">
        <link rel="stylesheet" type="text/css" href="new_livre.css">
    </head>

    <header>
        
        <!-- Bannière et menu du site -->

        <?php include("../menu.php"); ?>

    </header>

    <body>

        <?php include("baseDonnées.php");?>

        <form method="post" action="traitement.php" class="formulaire">
            <h1 id="titre_formulaire">Formulaire d'ajout d'un livre</h1>
            <p>
                Titre du livre :<br>
                <input type="text" name="titre"><br>
                Prénom de l'auteur :<br>
                <input type="text" name="Prenom_auteur"><br>
                Nom de l'auteur :<br>
                <input type="text" name="nom_auteur"><br>
                Isbn :<br>
                <input type="text" name="isbn"><br>
                Editeur :<br>
                <input type="text" name="editeur"><br>
                Genre :<br>
                <input type="text" name="genre"><br>
                Langue du livre :<br>
                <input type="text" name="langue"><br>
                Année de publication du livre :<br>
                <input type="text" name="annee"><br>
                Nombre de pages :<br>
                <input type="text" name="Nb_pages"><br><br>
                <input type="submit" name="envoyer" value="Suggérer" id="envoie">
            </p>
        </form>

        <form method="post" action="traitement2.php" class="formulaire1">
            <h1 id="titre_formulaire">Formulaire de supression d'un livre</h1>
            <p id="supprime">
                Veuillez entrer l'isbn du livre que vous souhaitez supprimer<br><br>
                
                Isbn :<br>
                <input type="text" name="isbn"><br><br>
                <input type="submit" name="envoyer" value="Suggérer" id="envoie">
            </p>
        </form>
    </body>
</html>