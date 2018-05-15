<?php
include 'pdo_init.php';

$sqldelete_user='DELETE FROM zng_user WHERE id= ? AND email= ? ';
$delete_user= $pdo->prepare($sqldelete_user,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$delete_user->bindParam(1,$_POST['idEni']);
$delete_user->bindParam(2,$_SESSION['zngid']);



?>
