<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php include '../assets/php/gen_nav.php';

  ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" >
        <h2>Inscription en cours</h2>
        <p>
          Veuillez patienter pendant que nous traitons votre inscription
          <br>
          <?php

          if (isset($_POST['znglogged'])) {
            if ($_POST['znglogged']==yes) {
              echo "<script type=\"text/javascript\">
              document.location.href=\"/\"
              </script>";
            }
          }
          //if ($_SERVER["HTTP_REFERER"]."signup.php" == "http://192.168.0.24".$_SERVER["PHP_SELF"] || $_SERVER["HTTP_REFERER"]."signup.php" == "http://zngairone.tk".$_SERVER["PHP_SELF"] ) {
          if (isset($_POST['genre']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naiss']) && isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['zngpass'])) {
            include '../assets/php/pb_co.php';
            include '../assets/php/pdo_sign.php';
            $mail->execute();
            if($mail->rowCount()!=0){
              echo "Ce mail est déjà enregistré";
            }
            else{
              echo "Pseudo: ".$_POST['login'];
              echo "<br> Password ".$_POST['zngpass'];
              echo "<br>".$_POST['genre'];
              echo ". ".$_POST['nom'];
              echo " ".$_POST['prenom'];
              echo "<br>Mail: ".$_POST['mail'];
              echo "<br>Naissance: ".$_POST['date_naiss'];
              $_SESSION['zngid'] = $_POST['login'];
              $_SESSION['zngpseudo'] = $_POST['pseudo'];
              $_SESSION['znglogged'] = yes;
              $_SESSION['zngmail'] = $_POST['email'];
              $_SESSION['zngname'] = $_POST['prenom'];
              $userinfo="Pseudo: ".$_POST['login']."\n".$_POST['genre'].". ".$_POST['nom']." ".$_POST['prenom']."\nMail: ".$_POST['mail']."\nPass: ".$_POST['zngpass'];
              $p->pushNote('erwanlc1@gmail.com', 'Nouvel Utilisateur sur EscapeFromZNG',$userinfo );

              $sign->execute();
            }
          }
          else{
            echo "fail";
          }

        //}
        ?>
      </p>
    </div>
  </div>
</div>

</body>
</html>
