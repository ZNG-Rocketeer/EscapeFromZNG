<?php
  try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php', 'php', 'zngphpescape');
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  // if select (pseudo ||) mail non vide location href connexion/index.php?signup=fail
  //INSERT INTO `zng_user` (`pseudo`, `pass`, `genre`, `nom`, `prenom`, `email`, `date_insc`, `date_naiss`) VALUES ('$_POST["pseudo"]', '$_POST["zngpass"]', '$_POST["genre"]', '$_POST["nom"]', '$_POST["prenom"]', '$_POST["mail"]', CURRENT_TIMESTAMP, '$_POST["date_naiss"]')
?>
