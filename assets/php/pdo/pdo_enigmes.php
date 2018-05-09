<?php
include 'pdo_init.php';

$sql_eni_fin = 'INSERT INTO ResEni (id,idEni,temps) VALUES (:id,:idEni,:temps)';
$eni_fin = $pdo->prepare($sql_eni_fin, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

?>
