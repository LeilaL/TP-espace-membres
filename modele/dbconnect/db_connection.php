<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=TP_espace_membres;charset=utf8', 'root', 'leilalababsa');
}

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


 ?>
