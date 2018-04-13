<?php 
  session_start();
?>



<!DOCTYPE html>

<html>
  <head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
  </head>

  <?php include("header.php"); ?>
 
  <body>
    <div>
      <form method="post" action="inscriptionBDD.php" autocomplete="on" class="inscription">
        <p> 
          <label for="mail">Mail : </label>
          <input id="mail" name="mail" required="required" type="text" placeholder="jean.dupond@viacesi.fr"/>
        </p>

        <p> 
          <label for="mdp">Mot de passe : </label>
          <input id="mdp" name="mdp" required="required" type="password" placeholder="**********" /> 
        </p>

        <p> 
          <label for="nom">Nom : </label>
          <input id="nom" name="nom" required="required" type="text" placeholder="Dupond" /> 
        </p>

        <p> 
          <label for="prenom">Prenom : </label>
          <input id="prenom" name="prenom" required="required" type="text" placeholder="Jean" /> 
        </p>

        <p> 
          <input type="submit" value="Inscription" /> 
        </p>

        <p>
           Vous avez déjà un compte ?
           <a href="connexion.php">Connexion</a>
        </p>
      </form>
    </div>
  </body>

    <footer>
    <?php include("footer.php"); ?>
    </footer>
</html>