<?php
include 'pdo_init.php';


$sqlselect_enigme_commu = 'SELECT Question,rep FROM CommuEni WHERE idEni= ? ';
$select_enigme_commu= $pdo->prepare($sqlselect_enigme_commu,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$sqlselect_C_enigme_pas_fait = 'SELECT COUNT(idEni) AS C_id_eni FROM CommuEni WHERE idEni NOT IN (SELECT idEni FROM ResEni WHERE id= ? )';
$select_C_enigme_pas_fait= $pdo->prepare($sqlselect_C_enigme_pas_fait,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$select_enigme_commu->bindParam(1,$idEni);

$select_C_enigme_pas_fait->bindParam(1,$_SESSION['zngid']);


?>
