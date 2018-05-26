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
  <?php include 'assets/php/gen_nav.php';

  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>À propos de nous</h2>
        <p>
	Nous sommes des étudiants en informatique à l'université Jean Monnet de Saint Etienne. <br>
	Nous avons décidé de développer ce site afin de proposer aux utilisateurs de notre site de s'amuser et de partager leurs connaissances en proposant eux même des énigmes.
	Vous pouvez retrouver ce site sur <a href ="https://github.com/ZNG-Rocketeer/EscapeFromZNG" title="ZNG-Rocketeer">Github</a>
	<br><br>Et retrouvez toute l'équipe Zanga sur <a href="" title="Twitter team Zanga" >Twitter</a> et <a href="" title="Facebook Zanga Esport" >Facebook</a>.
	<br>Et enfin allez visiter les autres sites <a href="http://zng-esport.tk:88"> ZNG</a>.
      </p>
    </div>
  </div>
</div>
</body>
</html>
