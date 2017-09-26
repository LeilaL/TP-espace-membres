<?php
require_once("../modele/indexData.php");

// Vérification de la validité des informations

// Pseudo
if (!empty($_POST)) {
    // if (isset($_POST['pseudo'])) {
    $resultat = getUser($_POST['pseudo'], $_POST['email']);
    // print_r($resultat['pseudo']);
    if (empty($_POST['pseudo'])) {
        echo 'vous devez rentrer un pseudo';
    } else {
        if ($_POST['pseudo'] == $resultat['pseudo']) {
            echo 'pseudo deja utilisé';
        } else {
            $pseudo = htmlspecialchars($_POST['pseudo']);
        }
    }
    // }


    // Password
    // if (!empty($_POST['mdp'])) {
    if ($_POST['pass'] == $_POST['conf_pass']) {
        $pass_hache = sha1($_POST['pass']);
    } else {
        echo 'Vous n\'avez pas entré le même mot de passe';
    }
    // }


    // Mail
    if (empty($_POST['email']) || !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) {
        echo 'Entrez un email';
    } else {
        if ($_POST['email'] == $resultat['email']) {
          echo 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !';
        } else {
          $email = htmlspecialchars($_POST['email']);
        }
    }


    insertInBdd($pseudo, $pass_hache, $email);
}


include("../vue/indexVue.php");
