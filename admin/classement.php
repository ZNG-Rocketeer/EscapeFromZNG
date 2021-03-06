<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Admin des classements</title>
  <link rel="stylesheet" href="/assets/css/master.css">
  <script src="/assets/js/admin.js" charset="utf-8"></script>
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php'; ?>
  <div class="zng-center zng-margin-top">
    <div class="zng-solo">

            <div style="width:67%;min-height:100%;overflow-y:scroll;">

            <?php include $_SERVER['DOCUMENT_ROOT'].'/assets//php/pdo/pdo_init.php';
            include $_SERVER['DOCUMENT_ROOT'].'/assets//php/admin.php';

            $sel = $pdo->prepare("select zng_user.id AS id, zng_user.pseudo AS pseudo,ResEni.idEni AS idEni,ResEni.temps AS temps from zng_user join ResEni where (zng_user.id = ResEni.id)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sel->execute();
            $res = $sel->fetchAll();

            echo '<table id="tablesupp" class="zng-table">';
            echo '<tr><th>ID</th><th>Pseudo</th><th>idEni</th><th>temps</th><th></th></tr>';

            foreach ($res as $row) {
              echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td class=\"suppcolumn\"><div class=\"zng-admin-supp\" onclick='document.location.href=\"supp.php?id=".$row[0]."&idEni=".$row[2]."\"'></div></td></tr>";
            }

            echo '</table>';
            ?>
        
      </div>
    </div>
  </div>
</body>
</html>
