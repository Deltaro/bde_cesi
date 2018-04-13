<?php
	session_start();

	$bdd = new PDO('mysql:host=localhost;dbname=bde_cesi;charset=utf8', 'root', '');

	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];

	$requeteConnexion = $bdd->prepare("SELECT mail, mdp FROM users WHERE mail = :mail AND mdp = :mdp");
	$requeteConnexion->bindValue(':mail', $mail, PDO::PARAM_STR);
	$requeteConnexion->bindValue(':mdp', $mdp, PDO::PARAM_STR);
	$requeteConnexion->execute();

	if($requeteConnexion->fetch()){
		echo("Vous êtes connecté");
	}
	else {
		echo("Mail ou mot de passe incorrect");
	}
?>