<?php

$to= $user['pseudo']."<".$mail.">";

$sujet = "Mot de passe EscapeFromZNG";

$message_txt = "Bonjour ".$user['pseudo']."\n";
$message_txt .= "A l'intention de ".$user['genre'].". ".$user['nom']." ".$user['prenom']."\n";
$message_txt .= "Voici ton nouveau mot de passe change le dès que possible c'est important\n";
$message_txt .= $passmail."\n";

$message_html = "";

include "gmail_send.php";
    
?>
