<?php
session_start()
?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/style.css">
<script src="assets/jeu.js" charset="utf-8"></script>
<body>
  <div id="redir">

  </div>
  <!-- Header -->
  <header class="zng-container zng-theme zng-padding" id="header">
    <div class="zng-center">
      <h1 class="zng-xxxlarge">EscapeFromZNG</h1>
      <div class="zng-padding-32">
        <button id="btn" class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="play()" style= "font-weight:900"><?php
        if ($_SESSION['znglogged']==yes) {
          echo "Jouez Maintenant";
        }else{
          echo "Inscrivez vous!";
        }
        ?></button>
      </div>
    </div>
  </header>


  <div class="zng-row-padding zng-center zng-margin-top">
    <div class="zng-half">
      <div class="zng-card" style="min-height:460px">
        <h2>Enigmes des créateurs</h2><br>
        <p>
          Vous avez étés piraté et on vous a dérobé des informations privées de haute importance les hackers ont laissé une trace derrière eux déchiffrez leur nom et découvrez qui se cache derrière cette attaque.
        </p>
        <p>
          Conseils: vous devez avoir des connaissances en informatique pour continuer si vous n'en avez pas demandez de l'aide à un ami en <a href="share/">partageant ce site</a>
        </p><br>
        <p>
          <noscript>
            <strong>Javascript est desactivé vous devez l'activer pour pouvoir continuer </strong>
          </noscript>
        </p>
      </div>
    </div>

    <div class="zng-half zng-sec-half">
      <div class="zng-card" style="min-height:460px">
        <h2>Enigmes de la communauté</h2><br>

        <br/>
      </div>
    </div>
  </div>

</body>
</html>
