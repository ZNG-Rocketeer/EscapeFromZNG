<?php
session_start()
?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/master.css">
<script src="../assets/js/tailles.js" charset="utf-8"></script>

<body onload="taille()" onresize="taille()">
  <!-- Header -->
  <?php include '../assets/php/gen_nav.php';

  ?>
  <div id="confirmdel" class="zng-hidden-panel">
    <span class="important"><?php echo $_SESSION['zngpseudo'] ?> veuillez confirmer la suppression de votre compte</span><br>
    <button type="button" onclick="document.location.href='../connexion/supprimer.php'">Confirmation</button>
  </div>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Bienvenue<?php echo " ".$_SESSION["zngname"];?></h2>
        <p>
          <?php
          include '../assets/php/pdo_users.php';
          $sel->execute(array($_SESSION['zngid']));
          $res=$sel->fetch();

          echo $res['genre'].". ".$res['nom']." ".$res['prenom']." aka ".$res['pseudo'];
          if ($res['genre']=="M") {
            echo "<br>Né le ";
          }else{
            echo "<br>Née le ";
          }
          echo substr($res['date_naiss'],8,2);
          echo " ";
          echo substr($res['date_naiss'],5,2);
          echo " ";
          echo substr($res['date_naiss'],0,4);
          if ($res['genre']=="M") {
            echo "<br>et inscrit le ";
          }else{
            echo "<br>et inscrite le ";
          }
          echo substr($res['date_insc'],8,2);
          echo " ";
          echo substr($res['date_insc'],5,2);
          echo " ";
          echo substr($res['date_insc'],0,4);
          ?>
          <br><br>
          <button type="button" class="zng-btn" onclick="document.location.href='modifier.php'">Modifier</button>
          <button class="zng-btn" type="button" onclick="document.getElementById('confirmdel').style.display='block';" style="color:red;">Supprimer compte</button><br><br>
          <!--
          nom
          prenom
          Pseudo
          ...
          adresse pour partager mon profil
          Admin access
        -->

        <?php
        if ($_SESSION['zngid']== 12 || $_SESSION['zngid']== 13) {
          echo "Pages administration<br>";
          echo "<button class='zng-btn zng-black-btn' type=\"button\" name=\"button\" onclick=\"document.location.href='../admin/page.php'\" >Toutes les pages ;-)</button>
          <button class='zng-btn zng-black-btn' type=\"button\" name=\"button\" onclick=\"document.location.href='../admin/enigmes.php'\" >Toutes les enigmes ;-)</button>
          <button class='zng-btn zng-black-btn' type=\"button\" name=\"button\" onclick=\"document.location.href='../admin/classement.php'\" >Admin classements</button>";
        }
        ?>
        <br><br>
        <button class="zng-btn" type="button" name="button" onclick="document.location.href='/connexion/disconnect.php'" style="color:red">Se déconnecter</button>

      </p>
    </div>
  </div>
</div>
</body>
</html>
