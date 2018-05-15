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
          
            <?php
            include '../assets/php/pdo/pdo_users.php';
            $sel->execute(array($_SESSION['zngid']));
            $res=$sel->fetch();
if(isset($_POST['mod'])){
    if(isset($_POST['nom']) && $_POST['prenom'] && $_POST['login'] && $_POST['oldpass']){
        if($_POST['newpass'] && $_POST['newpass2']){}
    }
}
else{
    echo '<form class="" action="" method="post">';
    echo 'Nom :<br><input class="zng-text-form" type="text" name="nom" value="'.$res['nom']."\"><br>";
    echo 'Prenom :<br><input class="zng-text-form" type="text" name="prenom" value="'.$res['prenom']."\"><br>";
    echo 'Pseudo :<br><input class="zng-text-form" type="text" name="login" value="'.$res['pseudo']."\"><br>";
    echo 'Ancien mot de passe <br><input class="zng-text-form" type="password" name="oldpass" placeholder="Ancien mot de passe"> <br>';
    echo 'Nouveau Mot de passe <br>
            <input class="zng-text-form" type="password" name="newpass" placeholder="Nouveau mot de passe"><br>';
    echo 'Confirmation <br>
            <input class="zng-text-form" type="password" name="newpass2" placeholder="Confirmation nouveau mot de passe">';
}
?>
            

            <button class="zng-btn" type="submit" name="mod" style="margin:2%;">Confirmer modification</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
