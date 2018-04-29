<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Modifier Profil</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php include '../assets/php/gen_nav.php';
   ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Bienvenue<?php echo " ".$_SESSION["zngname"];?></h2>
        <div class="zng-padding-16">
          <form class="" action="" method="post">
            <?php
            include '../assets/php/pdo_users.php';
            $sel->execute(array($_SESSION['zngid']));
            $res=$sel->fetch();
            echo '<input class="zng-text-form" type="text" name="nom" value="'.$res['nom']."\"><br>";
            echo '<input class="zng-text-form" type="text" name="prenom" value="'.$res['prenom']."\"><br>";
            echo '<input class="zng-text-form" type="text" name="login" value="'.$res['pseudo']."\"><br>";
            ?>
            <input class="zng-text-form" type="password" name="oldpass" placeholder="Ancien mot de passe">
            <input class="zng-text-form" type="password" name="newpass" placeholder="Nouveau mot de passe">
            <input class="zng-text-form" type="password" name="newpass2" placeholder="Confirmation nouveau mot de passe">

            <button class="zng-btn" type="submit" name="button" style="margin:2%;">Confirmer modification</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
