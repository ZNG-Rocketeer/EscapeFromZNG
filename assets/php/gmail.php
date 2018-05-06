<?php
require_once "Mail.php";

$from = "ZNG Contact <zng.contact@gmail.com>";

$host = "smtp.gmail.com";
$port = "587";
$username = "zng.contact@gmail.com";
$password = "zanga_c_a_h";

$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
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
  echo("<p>Message successfully sent!</p>");
 }
?>
