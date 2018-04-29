<?php
include 'pdo_init.php';

$sqlsel = 'SELECT pseudo,genre,nom,prenom,email,date_insc,date_naiss FROM zng_user WHERE id= ? ';
$sel = $pdo->prepare($sqlsel, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

 ?>
