<?php
require_once ("../modele/dbconnect/db_connection.php");
require_once("../modele/data.php");

$donnees = $bdd -> query('SELECT * FROM membres');
$resultat = $donnees -> fetchAll(PDO::FETCH_ASSOC);

// Vérification de la validité des informations

// Pseudo
if (isset($_POST['pseudo'])) {
  if ($_POST['pseudo'] != $resultat['pseudo']) {
    $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
  }
  else {
    echo 'Le pseudo existe déjà';
  }
}


// Password
if (isset($_POST['mdp'])) {
  if ($_POST['mdp'] == $_POST['pass']) {
    $pass_hache = sha1($_POST['pass']);
  }
  else {
    echo 'Vous n\'avez pas entré le même mot de passe';
  }
}


// Mail
if (isset($_POST['email'])) {
 $_POST['email'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
  if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])){
   echo 'L\'adresse ' . $_POST['email'] . ' est <strong>valide</strong> !';
  }
  else {
   echo 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !';
  }
}

// // Hachage du mot de passe
// $pass_hache = sha1($_POST['pass']);


include("../vue/inscription.php");
include("../vue/connexion.php");
 ?>
?>
