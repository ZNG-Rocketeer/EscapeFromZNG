<?php
session_start()
?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/assets/css/master.css">
<script src="/assets/js/jeu.js" charset="utf-8"></script>
<body>
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

  <noscript>
    <span class="important">Javascript est désactivé, vous avez besoin d'activer javascript pour poursuivre sur notre site sans quoi votre expérience sera gachée</span>
  </noscript>

  <div class="zng-row-padding zng-center zng-margin-top">
    <div class="zng-half">
      <div class="zng-card" style="min-height:460px">
        <h2>Enigmes des créateurs</h2>
        <p>
          Vous avez été piraté et on vous a dérobé des informations privées de haute importance les hackers ont laissé une trace derrière eux déchiffrez leur nom et découvrez qui se cache derrière cette attaque.
        </p>
        <p>
          <span class="important">Conseils:</span> vous devez avoir des connaissances en informatique pour continuer si vous n'en avez pas demandez de l'aide à un ami en partageant ce site

        </p><br>
        <div >
          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_email"></a>
            <a class="a2a_button_google_gmail"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_facebook_messenger"></a>
          </div>
          <script>
          var a2a_config = a2a_config || {};
          a2a_config.linkname = "EscapeFromZNG";
          a2a_config.linkurl = "http://zngairone.tk";
          a2a_config.onclick = 1;
          a2a_config.locale = "fr";
          </script>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->
        </div>

      </div>
    </div>

    <div class="zng-half zng-sec-half">
      <div class="zng-card" style="min-height:460px">
        <h2>Enigmes de la communauté</h2>
        <p>
          <a class="zng-padding-32" href="page.php">
            <button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">
              Exemple de page solo
            </button>
          </a><br>
          
          <button type="button" name="button" class="profil" onclick="document.location.href = 'profile';"></button>
          <br/>
        </p>
      </div>
    </div>
  </div>

</body>
</html>
