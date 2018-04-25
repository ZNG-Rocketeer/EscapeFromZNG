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
  <?php include '../assets/php/gen_nav.php'
   ?>

  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Bienvenue<?php echo " ".$_SESSION["zngnom"];?></h2>
        <!--
        nom
        prenom
        Pseudo
        ...
        adresse pour partager mon profile
      -->
    </div>
  </div>
</div>
</body>
</html>
