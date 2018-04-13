<?php 
  session_start();

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=bde_cesi;charset=utf8', 'root', '');
  }
  catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
?>



<!DOCTYPE html>

<html>
  <head>
    <title>Connexion</title>
  </head>
    
  <body>
    <div>
      <form method="post" action="connexionBDD.php" autocomplete="on" enctype="multipart/form-data">
        <h1>Connexion</h1> 
          <p> 
            <label for="mail">Mail : </label>
            <input id="mail" name="pseudo" required="required" type="text" placeholder="jean.dupond@viacesi.fr"/>
          </p>

          <p> 
            <label for="mdp">Mot de passe : </label>
            <input id="mdp" name="mdp" required="required" type="password" placeholder="**********" /> 
          </p> 

          <p> 
            <input type="submit" value="Connexion" /> 
          </p>
          
          <p>
             Inscrivez-vous !
             <a href="inscription.php">Inscription</a>
          </p>
      </form>
    </div>
  </body>
</html>