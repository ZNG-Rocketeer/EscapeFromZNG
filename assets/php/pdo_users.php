<?php
include 'pdo_init.php';

$sqlsel = 'SELECT pseudo,genre,nom,prenom,email,date_insc,date_naiss FROM zng_user WHERE id= ? ';
$sel = $pdo->prepare($sqlsel, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$sqlgmail = "SELECT pseudo,genre,prenom FROM zng_user WHERE email = ? ";
$gmail =  $pdo->prepare($sqlgmail,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

?>
