<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/assets/css/master.css">
<script src="/assets/js/tailles.js" charset="utf-8"></script>

<body onload="taille()" onresize="taille()">
  <?php
  include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Unique</h2>
        <p>

          <a class="zng-padding-32" href="pagehalf.php">
            <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" >
              Exemple de page duo
            </button>
          </a><br/>

          <a class="zng-padding-32" href="../connexion">
            <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" >
              Exemple de page inscription
            </button>
          </a><br/>
          <a class="zng-padding-32" href="users.php">
            <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" >
              Users
            </button>
          </a><br/>

        </p>
      </div>
    </div>
  </div>

</body>
</html>
