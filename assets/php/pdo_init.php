<?php
  try{
    $pdo = new PDO('mysql:host=localhost;dbname=php', 'php', 'zngphpescape',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
?>
