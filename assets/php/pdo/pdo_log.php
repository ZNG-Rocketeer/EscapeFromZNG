<?php
include 'pdo_init.php';

$sqllog = 'SELECT * FROM zng_user WHERE pseudo= ? AND pass = ? ';
$log = $pdo->prepare($sqllog, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
 ?>
