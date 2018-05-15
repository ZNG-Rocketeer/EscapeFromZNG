<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';

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
            if ($_SESSION['znglogged']==yes) {
              echo "<script type=\"text/javascript\">
              document.location.href=\"/\"
              </script>";
            }
          }
          //if ($_SERVER["HTTP_REFERER"]."signup.php" == "http://192.168.0.24".$_SERVER["PHP_SELF"] || $_SERVER["HTTP_REFERER"]."signup.php" == "http://zngairone.tk".$_SERVER["PHP_SELF"] ) {

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
