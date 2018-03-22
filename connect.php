<?php
//Connexion => DB
$user='root';
$pass='';
try {
$dbh = new PDO('mysql:host=localhost;dbname=hack2018', $user, $pass);

} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
 ?>
