<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/style.css">
<script src="assets/tailles.js" charset="utf-8"></script>

<body onload="taille()" onresize="taille()">
  <!-- Header -->
  <nav id="nav" class="zng-padding">
    <a href="/" class="zng-bar-item zng-button">Accueil</a>
    <a href="/page.php" class="zng-bar-item zng-button">Solo</a>
    <a href="/pagehalf.php" class="zng-bar-item zng-button">Duo</a>
    <a href="/signup.php" class="zng-bar-item zng-button">Inscription</a>
  </nav>

  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Unique</h2><br>
        <a class="zng-padding-32" href="page.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Exemple de page solo
          </button>
        </a><br>

        <a class="zng-padding-32" href="pagehalf.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Exemple de page duo
          </button>
        </a><br>

        <a class="zng-padding-32" href="signup.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Exemple de page inscrption
          </button>
        </a><br>
        <a class="zng-padding-32" href="enigme_pass.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Enigme Pass
          </button>
        </a>
        <br/>
        <a class="zng-padding-32" href="enigme_lien.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Enigme Lien
          </button>
        </a>
        <br/>
        <a class="zng-padding-32" href="enigme_bas_de_page.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Enigme Bas de page
          </button>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
