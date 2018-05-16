<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Annuaire</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
<?php include '../assets/php/gen_nav.php';
      include '../assets/php/pdo/pdo_init.php';
      if(isset($_GET['pseudo']){
          $user_sql= $pdo->query("SELECT id,nom,prenom,email FROM zng_user WHERE pseudo LIKE ".$_GET['pseudo']);
          $user = $user_sql->fetchAll();
      }
      else if(isset($_GET['name'])){
          $user_sql= $pdo->query("SELECT id,nom,prenom,email FROM zng_user WHERE nom LIKE ".$_GET['name']." OR prenom LIKE ".$_GET['name']);
          $user = $user_sql->fetchAll();
      }
      else if(isset($_GET['name']) && isset($_GET['pseudo']){
          $user_sql= $pdo->query("SELECT id,nom,prenom,email FROM zng_user WHERE nom LIKE ".$_GET['name']." OR prenom LIKE ".$_GET['name']." AND pseudo LIKE ".$_GET['pseudo']);
          $user = $user_sql->fetchAll();
          
      }
      else {
          echo '<script>document.location.href="annuaire.php"</script>';
      }
      $nb_creat=$pdo->prepare("SELECT COUNT(*) AS Count FROM CommuEni WHERE id = ?");
      $nb_creat->bindParam(1,$i);
      $nb_joue=$pdo->prepare("SELECT COUNT(*) AS Count FROM ResEni WHERE id = ?");
      $nb_joue->bindParam(1,$i);
?>
  

  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
      <h2>Recherche de profil</h2>
      <?php
      echo "<table><tr><th>Nom</th><th>Prenom</th><th>Mail</th><th>Nb créations</th><th>Nb Jouées</th></tr>";
      for($i=0;$i< $user_sql->rowCount();$i++){
          $nbc=$nb_creat->execute()['Count'];
          $nbj=$nb_joue->execute()['Count'];
          echo "<tr><td>".$user[$i]['nom']."</td><td>".$user[$i]['prenom']."</td><td>".$user[$i]['email']."</td><td>".$nbc."</td><td>".$nbj."</td></tr>";
      }
      echo '</table>';
      ?>
      </div>
    </div>
  </div>
</body>
</html>
