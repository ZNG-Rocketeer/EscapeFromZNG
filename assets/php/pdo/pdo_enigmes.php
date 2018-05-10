<?php
include 'pdo_init.php';

$sql_eni_users='SELECT * FROM ResEni WHERE id = ? ';
$sql_eni_nom='SELECT * FROM NomsEni ';
$sql_eni_sel='SELECT * FROM ResEni WHERE id = ? AND idEni = ? ';
$sql_eni_ins = 'INSERT INTO ResEni (id,idEni,temps) VALUES ( ? , ? , ? )';
$sql_eni_up = 'UPDATE ResEni SET temps = ? WHERE id = ? AND idEni = ?';

$eni_nom = $pdo->prepare($sql_eni_nom, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$eni_users = $pdo->prepare($sql_eni_users, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$eni_sel = $pdo->prepare($sql_eni_sel, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$eni_ins = $pdo->prepare($sql_eni_ins, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$eni_up = $pdo->prepare($sql_eni_up, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$eni_ins->bindParam(1,$_SESSION['zngid']);
$eni_ins->bindParam(2,$idEni);
$eni_ins->bindParam(3,$temps);

$eni_up->bindParam(1,$temps);
$eni_up->bindParam(2,$_SESSION['zngid']);
$eni_up->bindParam(3,$idEni);

$eni_sel->bindParam(1,$_SESSION['zngid']);
$eni_sel->bindParam(2,$idEni);

$eni_sel->bindParam(1,$_SESSION['zngid']);
$eni_nom->bindParam(1,$num);

?>
