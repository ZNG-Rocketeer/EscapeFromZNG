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
        <form class="zng-form" action="" method="post">
          <input type="text" name="mail">
          <input type="submit" value="Envoyer">
        </form>
        <?php
        include '../assets/php/pdo_users.php';
        echo "teeeest";

        if(isset($_POST['mail'])){
          $mail=$_POST['mail'];
          echo $mail;
          // selection user by mail
          $mdp->execute(array($mail));
          // gen mdp aleatoire ->
          $res = $mdp->fetchAll();
          echo $mdp->rowCount();
          if ($mdp->rowCount()!=0) {
            $user = $res[0];
            $mail = $user['pseudo']."<".$mail.">";
            $sujet = "ZNG CONTACT";
            $pass=randomPassword();
            echo $pass;
            $mdp_nouv->execute(array("erwan",$mail));
            mail_mdp($mail,$user,$pass);
          }
          else{
            echo "Vous n'êtes pas encore inscrit sur notre site";
          }
        }else{
          echo "else";
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
