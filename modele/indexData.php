<?php

require_once ("dbconnect/db_connection.php");

function getUser ($pseudo,$email) {
  $bdd = get_dataBase();
$donnees = $bdd->prepare('SELECT * FROM membres WHERE pseudo = :pseudo, email = :email');
$donnees->execute(array(
  'pseudo' => $pseudo,
   'email' => $email
 ));
$resultat = $donnees->fetch(PDO::FETCH_ASSOC);
return $resultat;
}


function insertInBdd($pseudo, $pass_hache, $email){
$bdd = get_dataBase();
// Insertion bdd
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email
  ));
}
 ?>
