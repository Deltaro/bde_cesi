<?php 
	session_start();

	try{
		$bdd = new PDO('mysql:host=localhost;dbname=bde_cesi;charset=utf8', 'root', '');
	}
	catch(Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Acceuil - BDE CESI Écully</title>
	</head>



	<body>
		<?php include("header.php"); ?>



		<h1>BDE CESI LYON</h1>

		<p>Texte</p>




		<form method="post" action="test.php" enctype="multipart/form-data">
			<p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="fichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        	</p>

			<p><label>Prénom : <input type="text" name="prenom" /></label></p>
			<p><label>Nom : <input type="text" name="nom" /></label></p>
			<p><label>Adresse mail : <input type="text" name="mail" /></label></p>
			<p><label>Description : <textarea name="description" rows="8" cols="45"/></textarea></label></p>
			<input type="submit" value="valider" />

			<?php
			$reponse = $bdd->query('SELECT * FROM users');
			
			while($donnees = $reponse->fetch()){ ?>
				<p><?php echo $donnees['mail']; ?><br />
				<?php echo $donnees['mdp']; ?><br /></p>
			
			<?php
			}

			$reponse->closeCursor();

			?>
		</form>

	</body>



	<footer>
		<?php include("footer.php"); ?>
	</footer>
</html>