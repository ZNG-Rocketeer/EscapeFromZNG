<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mot de passe oublié</title>
</head>
<body>
  <?php
  include '../assets/php/pdo_users.php';

  if(isset($_GET['mail'])){
    // selection user by mail
    $gmail->execute($_GET['mail']);
    // gen mdp aleatoire ->
    $res = $log->fetchAll();
    if ($log->rowCount()!=0) {
      $user = $res[0];
      $to = $user['mail'];
      $subject = "ZNG CONTACT";

      include '../assets/php/gmail.php'
    }
    else{
      echo "Vous n'êtes pas encore inscrit sur notre site";
    }
  }
  ?>
</body>
</html>
