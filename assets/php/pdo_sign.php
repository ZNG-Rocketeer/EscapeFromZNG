<?php
include 'pdo_init.php';

$sqlsign = "INSERT INTO zng_user (pseudo, pass, genre, nom, prenom, email, date_insc, date_naiss) VALUES (:pseudo, :zngpass, :genre, :nom, :prenom, :mail, CURRENT_TIMESTAMP, :date_naiss)";

$sign = $pdo->prepare($sqlsign, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sign->bindParam(':pseudo',$_POST['login']);
$sign->bindParam(':zngpass',md5($_POST['zngpass']));
$sign->bindParam(':genre',$_POST['genre']);
$sign->bindParam(':nom',$_POST['nom']);
$sign->bindParam(':prenom',$_POST['prenom']);
$sign->bindParam(':mail',$_POST['mail']);
$sign->bindParam(':date_naiss',$_POST['date_naiss']);

$sqlmail = 'SELECT * FROM zng_user WHERE email= ?';
$mail = $pdo->prepare($sqlmail, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$mail->bindParam(1,$_POST['mail']);
?>
