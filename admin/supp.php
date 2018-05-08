<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Admin Classement supp</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php
  include '../assets/php/gen_nav.php';
  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Supprimer</h2>
        <p>
          <?php
          include '../assets/php/admin.php';
          include '../assets/php/pdo_init.php';
          $id=$pdo->prepare("SELECT zng_user.id,pseudo,nom,prenom,email,date_insc,idEni,temps FROM zng_user,ResEni WHERE zng_user.id = ResEni.id AND zng_user.id = ? AND idEni= ? ", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
          $tps=$pdo->prepare("SELECT zng_user.id,pseudo,nom,prenom,email,date_insc,idEni,temps FROM zng_user,ResEni WHERE zng_user.id = ResEni.id AND temps < ? ", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
          echo $_GET['id'];
          echo ' ';
          echo $_GET['idEni'];
          echo "<br>";
          try {
            if(isset($_GET['id']) && isset($_GET['idEni'])){
              $cla=$id;
              $cla->execute(array($_GET['id'],$_GET['idEni']));
              $res=$cla->fetchAll();
            }
            else if (isset($_GET['temps'])){
              $cla=$tps;
              $cla->execute(array($_GET['temps']));
              $res=$cla->fetchAll();
            }
            echo "<table class=\"zng-table\">";
            var_dump($res[0]);
            echo "<tr><th>id</th><th>pseudo</th><th>Nom</th><th>Prenom</th><th>email</th><th>Date Insc</th><th>idEni</th><th>temps</th></tr>";
            foreach ($res as $row) {
              echo "<tr>";
              for ($i=0; $i < $cla->columnCount(); $i++) {
                echo "<td>$row[$i]</td>";
              }
              echo "</tr>";
            }
            echo "</table>";
          } catch (PDOException $e) {
            die('Erreur: '.$e);
          }


          ?>
          <button type="button" class="zng-btn-form">Confirmer</button>

        </p>
      </div>
    </div>
  </div>
</body>
</html>
