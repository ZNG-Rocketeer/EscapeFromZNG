<?php
include 'pdo_init.php';

$sqlsign = "INSERT INTO zng_user (pseudo, pass, genre, nom, prenom, email, date_insc, date_naiss,ip) VALUES (:pseudo, :zngpass, :genre, :nom, :prenom, :mail, CURRENT_TIMESTAMP, :date_naiss,:ip)";

$sign = $pdo->prepare($sqlsign, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sign->bindParam(':pseudo',$_POST['login']);
$sign->bindParam(':zngpass',md5($_POST['zngpass']));
$sign->bindParam(':genre',$_POST['genre']);
$sign->bindParam(':nom',$_POST['nom']);
$sign->bindParam(':prenom',$_POST['prenom']);
$sign->bindParam(':mail',$_POST['mail']);
$sign->bindParam(':date_naiss',$_POST['date_naiss']);
$sign->bindParam(':ip',$_SERVER['REMOTE_ADDR']);

$sqlmail = 'SELECT * FROM zng_user WHERE email= ?';
$mail = $pdo->prepare($sqlmail, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$mail->bindParam(1,$_POST['mail']);

$sqlid = 'SELECT id FROM zng_user WHERE email = ?';
$id = $pdo->prepare($sqlid, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$id->bindParam(1,$_POST['email']);
?>
