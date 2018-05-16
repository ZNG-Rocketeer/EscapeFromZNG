<?php

// Pages accessibles en visiteurs
$pages=array("/connexion/index.php",
"/connexion/signup.php",
"/connexion/mdpoublie.php",
"/connexion/log.php",
"/classement/index.php");
session_start();
echo "<!-- Header -->
<nav class=\"zng-padding zng-nav\">
<a href=\"/\" class=\"zng-bar-item zng-btn\">Accueil</a>
<a href=\"/profile/annuaire.php\" class=\"zng-bar-item zng-btn\">Annuaire</a>
<a href=\"/classement\" class=\"zng-bar-item zng-btn\">Classement</a>
<a href=\"/connexion\" class=\"zng-bar-item zng-btn\">Inscription</a>
";

if (substr($_SERVER['PHP_SELF'],0,15) == "/enigme/enigme_") {
  echo  "<span class=\"zng-bar-item zng-padding\" id=\"chronotime\">0:00:00:00</span>
  <form class=\"zng-hidden\" name=\"Enigme\" action=\"index.php\" method=\"POST\">
   <input type=\"text\" name=\"idEni\" value=\"".substr($_SERVER['PHP_SELF'],15,1)."\">
   <input type=\"text\" name=\"temps\" id=\"chronosec\"><input type=\"text\" name=\"verif\">
   </form>
   ";
}

if ($_SESSION['znglogged']=='yes'){
  echo "<a href=\"/profile/\" ><button id=\"nav-profil\" class=\"zng-btn\">${_SESSION['zngpseudo']}</button></a>";
}
else{

  if (!in_array($_SERVER['PHP_SELF'],$pages)) {
    echo "<script type=\"text/javascript\">
    document.location.href=\"/connexion\"
    </script>";
  }
}
echo "</nav>";


?>
