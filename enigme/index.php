<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Enigmes</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';

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
              include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_enigmes.php';
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


          ?>
          <?php
          include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_enigmes.php';
          $eni_users->execute();
          $res = $eni_users->fetchAll();

          $eni_nom->execute();
          $noms=$eni_nom->fetchAll();

          echo "<table class=\"zng-table coupables\"><th>Coupables</th>";

          for ($i=0,$j=0,$k=1; $i < $eni_nom->rowCount(); $i++,$k++) {
            echo "<tr><td>";
            if (intval($res[$j]['idEni']) == intval($noms[$i]['idEni'])) {
              echo $noms[$i]['Noms'];
              $j+=1;
            }
            else{
              echo "<a href=\"enigme_".$k."_1.php\" >********</a>";
            }
            echo "</td></tr>";
          }
          ?>
        </table>
          <button class="zng-btn-form" type="button" name="button">Continuer</button>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
