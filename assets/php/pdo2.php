<?php
include 'pdo.php';

$resultat = $pdo->query ( "SELECT COUNT(email) FROM php.`zng_user` ");
$rowcount = $resultat->rowCount()-1;
echo "rc".$rowcount; //faire test de l'unicité de compte
$resultat->closeCursor();
$stmt=$pdo->query("INSERT INTO `zng_user` (`pseudo`, `pass`, `genre`, `nom`, `prenom`, `email`, `date_insc`, `date_naiss`) VALUES (airone, 'airpass', 1, 'LE', 'ER', "lce987@live.fr", CURRENT_TIMESTAMP, 1998-10-12)");
//$verif=$pdo->prepare("")
//$stmt=$pdo->prepare("INSERT INTO `zng_user` (`pseudo`, `pass`, `genre`, `nom`, `prenom`, `email`, `date_insc`, `date_naiss`) VALUES (:pseudo, :zngpass, :genre, :nom, :prenom, :mail, CURRENT_TIMESTAMP, :date_naiss)");
 ?>
