<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Admin users</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php'; ?>
  <div id="card" class="zng-center zng-margin-top">

      <table id="tableuser" class="zng-table zng-solo">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/assets//php/pdo/pdo_init.php';

        $sel = $pdo->prepare("select id,pseudo,nom,prenom,email,date_insc,date_naiss,ip from zng_user", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sel->execute();
        $res = $sel->fetchAll();

        echo '<thead><tr><th>ID</th><th>Pseudo</th><th>Nom</th><th>Prenom</th><th>email</th><th>Date Inscription</th><th>Date Naissance</th><th>ip</th><th>Supp</th><th>Ban</th></tr></thead>';

        foreach ($res as $row) {
          echo "<tr";
          if ($row[0]==12 || $row[0]==13 || $row[0]==14) {
            echo " class=\"tr-admin\"";
          }
          echo "><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td class=\"suppcolumn\"><div class=\"zng-admin-supp\" onclick='document.location.href=\"suppuser.php?id=";
          echo $row[0]."\"'></div></td><td class=\"suppcolumn\"><div class=\"zng-admin-supp\" onclick='document.location.href=\"banuser.php?id=".$row[0]."\"'></div></td></tr>";
        }



        ?>
      </table>


    </div>
  </body>
  </html>
