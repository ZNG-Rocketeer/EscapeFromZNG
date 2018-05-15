<?php
include 'pdo_init.php';

$id=$pdo->prepare("SELECT zng_user.id,pseudo,nom,prenom,email,date_insc,idEni,temps FROM zng_user,ResEni WHERE zng_user.id = ResEni.id AND zng_user.id = ? AND idEni= ? ", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$sqldelete_class='DELETE FROM ResEni WHERE idEni= ? AND id= ? ';
$delete= $pdo->prepare($sqldelete_class,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$delete->bindParam(1,$_POST['idEni']);
$delete->bindParam(2,$_SESSION['zngid']);



?>
