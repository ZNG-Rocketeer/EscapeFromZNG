<?php
include 'pdo_init.php';


$sqlinsert_enigme = 'INSERT INTO CommuEni(id,Question,rep) values ( ? , ? , ? )';
$insert_enigme= $pdo->prepare($sqlinsert_enigme,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$insert->bindParam(1,$_SESSION['zngid']);
$insert->bindParam(2,$_POST['question']);
$insert->bindParam(3,$_POST['reponse']);

?>
