<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=bde_cesi;charset=utf8', 'root', '');
    $bdd->exec("set names utf8");
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
