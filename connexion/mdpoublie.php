<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mot de passe oublié</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php
  include '../assets/php/gen_nav.php';
  echo "";
  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Bienvenue</h2>
        <?php
        include '../assets/php/pdo_users.php';
        if(isset($_GET['mail'])){
          $mail=$_GET['mail'];
          // selection user by mail
          $gmail->execute(array($mail));
          // gen mdp aleatoire ->
          $res = $gmail->fetchAll();
          if ($gmail->rowCount()!=0) {
            $user = $res[0];
            $to = $user['pseudo']."<".$mail.">";
            $subject = "ZNG CONTACT";
            include '../assets/php/gen_mail.php';
            echo $body;
            include '../assets/php/gmail.php';
            
          }
          else{
            echo "Vous n'êtes pas encore inscrit sur notre site";
          }
        }else{
          echo "else";
        }
        ?>
        <form class="zng-form" action="" method="post">
          <input type="text" name="mail">
          <input type="submit" value="Envoyer">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
