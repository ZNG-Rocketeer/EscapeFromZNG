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
  echo  "<form class=\"zng-hidden\" name=\"chronoForm\">
  <span class=\"zng-bar-item\" id=\"chronotime\">0:00:00:00</span>
  <input type=\"button\" name=\"startstop\" value=\"start!\" onClick=\"chronoStart()\" />
  <input type=\"button\" name=\"reset\" value=\"reset!\" onClick=\"chronoReset()\" />
  </form>";
}


if ($_SESSION['znglogged']==yes){
  echo "<button id=\"nav-profil\" class=\"zng-btn\" onclick=\"document.location.href='../profile/'\">${_SESSION['zngpseudo']}</button>";
}
else{

  if (!in_array($_SERVER['PHP_SELF'],$pages)) {
    echo "<script type=\"text/javascript\">
    document.location.href=\"../\"
    </script>";
  }
}
echo "</nav>";
// if ($_SESSION['znglogged'] == yes){
//   echo $_SESSION['pseudo'];
// }
// else{
//   echo "Sign up / Login"
// }

//if ($_SESSION['znglogged']==yes){
//echo "<button class=\"nav-profil\">$_SESSION['zngnom']</button>
// ";
//echo "</nav>";

//<a class="pushbullet-subscribe-widget" data-channel="ZNGad" data-widget="button" data-size="small"></a>
//<script type="text/javascript">(function(){var a=document.createElement('script');a.type='text/javascript';a.async=true;a.src='https://widget.pushbullet.com/embed.js';var b=document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a,b);})();</script>
?>
