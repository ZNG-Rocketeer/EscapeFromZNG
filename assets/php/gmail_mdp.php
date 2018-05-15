<?php

$to= $user['pseudo']."<".$mail.">";
$message_mdp = "Bonjour ".$user['pseudo']."\n";
$message_mdp .= "A l'intention de ".$user['genre'].". ".$user['nom']." ".$user['prenom']."\n";
$message_mdp .= "Voici ton nouveau mot de passe change le dès que possible c'est important\n";
$message_mdp .= $passmail."\n";


require_once ("Mail.php");
require_once ("Mail/mime.php");

        
$from = "ZNG Contact <zng.contact@gmail.com>";
$body = $message_mdp;
$sujet = "Support EscapeFromZNG";
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
    echo("<p>" . $mail->getMessage() . "</p>");
} else {
    $mail_succes=1;
}

    
?>
