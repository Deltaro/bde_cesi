<?php
	session_start();

	$bdd = new PDO('mysql:host=localhost;dbname=bde_cesi;charset=utf8', 'root', '');

	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];

	$requeteVerif = $bdd->prepare("SELECT mail FROM users WHERE mail = :mail");
	$requeteVerif->bindValue(':mail', $mail, PDO::PARAM_STR);
	$requeteVerif->execute();

	if ($requeteVerif->fetch()) {
	    echo("Cette adresse mail est déjà utilisée.");
	} else {
		echo("Votre compte a bien été créé.");

		$requete = $bdd->prepare("INSERT INTO users (mail, mdp, nom, prenom) VALUES( :mail, :mdp, :nom, :prenom)");
		$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
		$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
		$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
		$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);

		$requete->execute();
	}


	$requeteConnexion = $bdd->prepare("SELECT users (mail, mdp, nom, prenom) VALUES( :mail,:mdp, :nom, :prenom)");
	$requeteConnexion->bindValue(':mail', $mail, PDO::PARAM_STR);
	$requeteConnexion->bindValue(':mdp', $mdp, PDO::PARAM_STR);
	$requeteConnexion->bindValue(':nom', $nom, PDO::PARAM_STR);
	$requeteConnexion->bindValue(':prenom', $prenom, PDO::PARAM_STR);
?>

