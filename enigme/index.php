<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php include '../assets/php/gen_nav.php';

  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Enigmes</h2>
        <p>

          <?php
          if(isset($_POST['idEni']) && isset($_POST['temps']) && isset($_POST['verif'])){
            $idEni = $_POST['idEni'];
            $temps = $_POST['temps'];
            $verif = $_POST['verif'];

            if ($temps + 1 == md5($verif)) {
              include '../assets/php/pdo/pdo_enigmes.php';
              $eni_fin->execute(array($_SESSION['zngid'],$idEni,$temps));
            }
          }

          ?>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
