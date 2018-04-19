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
  <nav id="nav" class="zng-padding">
    <a href="/" class="zng-bar-item zng-button">Accueil</a>
    <a href="/page.php" class="zng-bar-item zng-button">Solo</a>
    <a href="/pagehalf.php" class="zng-bar-item zng-button">Duo</a>
    <a href="/connexion" class="zng-bar-item zng-button">Inscription</a>
  </nav>

  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Bienvenue<?php echo " ".$_SESSION["zngnom"];?></h2><br>
        <!--
        nom
        prenom
        Pseudo
        ...
      -->
    </div>
  </div>
</div>
</body>
</html>
