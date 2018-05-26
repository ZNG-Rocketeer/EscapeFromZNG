<?php

$to= $_POST['login']."<".$_POST['mail'].">";

$sujet= "Bienvenue sur EscapeFromZNG";

$message_txt = "Bonjour ".$_POST['login']."\n";
$message_txt .= "Bienvenue sur notre site ".$_POST['genre'].". ".$_POST['nom']." ".$_POST['prenom']."\n";
$message_txt .= "Vous pouvez vous désormais jouer sur https://zngairone.tk\n";

$message_html = "<style>.mdp{backgroundcolor:grey;}</style>
                 <table>
                 <tr><td colspan='3'><h1>Bonjour ".$_POST['login']."</h1></td></tr>
                 <tr><td colspan='3'>Bienvenue sur notre site ".$_POST['genre'].". ".$_POST['nom']." ".$_POST['prenom']."</td></tr>
                 <tr>
                   <td class='mdp'>Twitter</td>
                   <td>Facebook</td>   
                   <td>ZNG-Esport</td>
                 </tr>
                 </table>";

include "gmail_send.php";


?>
