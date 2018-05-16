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
    <?php
    if ($_SESSION['znglogged']=="yes") {
      echo "
      <figure class=\"profil\" onclick=\"document.location.href = 'profile';\">
      <button type=\"button\" name=\"button\" class=\"profil\" ></button>
      <figcaption>"."".$_SESSION['zngpseudo']."</figcaption>
      </figure>
      ";
      echo "
      <figure style=\"visibility:hidden;float:left;\" class=\"profil\" onclick=\"document.location.href = 'profile';\">
      <button type=\"button\" name=\"button\" class=\"profil\" ></button>
      <figcaption>"."".$_SESSION['zngpseudo']."</figcaption>
      </figure>
      ";
    }

    ?>
    <div class="zng-center">
      <h1 class="zng-title">escape FROm ZNG</h1>
      <div class="zng-header">
        <button id="btn" class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="play()" style= "font-weight:900"><?php
        if ($_SESSION['znglogged']=="yes") {
          echo "Jouez Maintenant";
        }else{
          echo "Se connecter";
        }
        ?></button>
      </div>
    </div>
  </header>

  <noscript>
    <span class="important">Javascript est désactivé, vous avez besoin d\'activer javascript pour poursuivre sur notre site sans quoi votre expérience sera gachée</span>
  </noscript>
  <div class="zng-center zng-margin-top">
    <div class="zng-half">
      <div class="zng-card" >
        <h2>Enigmes des créateurs</h2>
        <p>
          Vous avez été piraté et on vous a dérobé des informations privées de haute importance les hackers ont laissé une trace derrière eux déchiffrez leur nom et découvrez qui se cache derrière cette attaque.
          <a href="" onclick="play()" title="Suite explication enigmes"> Lire la suite ici </a>
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
        <p>Vous devez terminer les enigmes des créateurs avant de commencer celles de la communauté après cela et dès que celles ci seront prêtes le bouton ci-dessus vous emmènera vers ces dernières énigmes</p>
      </div>
    </div>
    <div class="zng-half zng-sec-half">
      <div class="zng-card" >
        <h2>Enigmes de la communauté</h2>
        <p>
	<a href="CommuEni/creer_enigme_commu.php">
	<button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal">Créer Enigme</button>
	</a>
	<br/>
	<a href="CommuEni/index.php">
	<button class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal">Jouer</button>
	</a>

        </p>
      </div>
    </div>
  </div>
</body>
</html>
