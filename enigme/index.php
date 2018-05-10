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

            if ($temps * 5.55 == $verif) {
              include '../assets/php/pdo/pdo_enigmes.php';
              $eni_sel->execute();
              echo $temps . "s ";
              if ($eni_sel->rowCount() > 0) {
                $temps_prec = $eni_sel->fetch()['temps'];
                if ( $temps_prec > $temps) {
                  echo "Bravo tu t'es amélioré";
                  $eni_up->execute();
                }else{
                  echo "Tu as déjà fais mieux: ". $temps_prec . "s" ;
                }
              }
              else{
                echo "Première performance";
                $eni_ins->execute();
              }
            }
            else{
              echo $temps;
              echo " != ";
              echo $verif;
            }
          }else{
            echo isset($_POST['idEni']);
            echo isset($_POST['temps']);
            echo isset($_POST['verif']);
          }

          $eni_users->execute();
          $res = $eni_users->execute();
          $eni_noms->execute();
          for ($i=0; $i < $eni_noms->rowCount(); $i++) {
            $num=$i;
            $eni_nom->execute();

          }

          ?>
          <button type="button" name="button">Continuer</button>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
