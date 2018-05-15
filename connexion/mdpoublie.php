<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mot de passe oublié</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Bienvenue</h2>
        <form class="zng-form" action="" method="post">
          <input class="zng-text-form" type="text" name="mail" placeholder="Votre Email"> <br>
          <input class="zng-btn-form" type="submit" value="Envoyer">
        </form>
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_users.php';
        
        include $_SERVER['DOCUMENT_ROOT'].'/assets/php/passgen.php';


        if(isset($_POST['mail'])){
          $mail=$_POST['mail'];
          
          // selection user by mail
          $mdp->execute(array($mail));
          
          $res = $mdp->fetchAll();
          echo $res[0]['pseudo'];
          if ($mdp->rowCount()!=0) {
            $user = $res[0];
            $sujet = "ZNG CONTACT";
            $random=new Pass;
            $pass=$random->randomPassword();
            $passmail=$pass;
            $pass=md5($pass);
            // Nouveau mot de passe dans table zng_user + mail
            $mdp_nouv->execute();
            include '../assets/php/gmail_mdp.php';
            echo "";
          }
          else{
            echo "Vous n'êtes pas encore inscrit sur notre site";
          }
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
