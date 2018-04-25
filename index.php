<?php
session_start()
?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/style.css">
<body>

  <!-- Header -->
  <header class="zng-container zng-theme zng-padding" id="header">
    <div class="zng-center">
      <h1 class="zng-xxxlarge">EscapeFromZNG</h1>
      <div class="zng-padding-32">
        <?php
        echo "<button class=\"zng-btn zng-xlarge zng-theme-dark zng-hover-teal\" onclick=\"document.getElementById('id01').style.display='block'\" style=\"font-weight:900\";>";
        if (isset($_SESSION['logged'])) {
          echo "Jouez maintenant";
        }else{
          echo "Inscrivez vous";
        }
        echo "</button>";
        $_SESSION['logged']=yes;
        ?>

      </div>
    </div>
  </header>

  <div class="zng-row-padding zng-center zng-margin-top">
    <div class="zng-half">
      <div class="zng-card zng-container" style="min-height:460px">
        <h2>Enigmes des créateurs</h2><br>
        <a class="zng-padding-32" href="page.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Exemple de page solo
          </button>
        </a>

        <a class="zng-padding-32" href="pagehalf.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Exemple de page duo
          </button>
        </a>

        <a class="zng-padding-32" href="signup.php">
          <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
            Exemple de page inscrption
          </button>
        </a>
      </div>
    </div>

    <div class="zng-half zng-sec-half">
      <div class="zng-card zng-container" style="min-height:460px">
        <h2>Enigmes de la communauté</h2><br>
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
	<br/>
      </div>
    </div>
  </div>

</body>
</html>
