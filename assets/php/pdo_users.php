<?php
include 'pdo_init.php';

$sqlsel = 'SELECT pseudo,genre,nom,prenom,email,date_insc,date_naiss FROM zng_user WHERE id= ? ';
$sel = $pdo->prepare($sqlsel, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$sqlmdp = "SELECT pseudo,genre,nom,prenom FROM zng_user WHERE email = ? ";
$mdp =  $pdo->prepare($sqlmdp,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));


$sqlmdp_nouv = "
UPDATE table
SET pass = md5( ? )
FROM zng_user
WHERE email = ?
 ";
$mdp_nouv =  $pdo->prepare($sqlmdp_nouv,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

?>
