<?php

$to= $_POST['login']."<".$_POST['mail'].">";
$message_sign = "Bonjour ".$_POST['login']."\n";
$message_sign .= "Bienvenue sur notre site ".$_POST['genre'].". ".$_POST['nom']." ".$_POST['prenom']."\n";
$message_sign .= "Vous pouvez vous désormais jouer sur https://zngairone.tk\n";


require_once ("Mail.php");
require_once ("Mail/mime.php");


$from = "ZNG Contact <zng.contact@gmail.com>";
$body = $message_sign;
$sujet= "Bienvenue sur EscapeFromZNG";
$host = "smtp.gmail.com";
$port = "587";
$username = "zng.contact@gmail.com";
$password = "zanga_c_a_h";

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $sujet);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo("<p> Erreur envoi de mail de confirmation</p>");
} else {
    echo("<p>Inscription prise en compte par notre sytème</p>");
}


?>
