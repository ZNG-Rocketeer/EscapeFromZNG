<?php
  $idEni = $_POST['idEni'];
  $temps = $_POST['temps'];
  $verif = $_POST['verif'];

  if ($temps * 5.55 == $verif) {
    include '$_SERVER['DOCUMENT_ROOT']/assets/php/pdo/pdo_enigmes.php';
    $eni_fin->execute(array($_SESSION['zngid'],$idEni,$temps));
    echo $temps;
    echo $idEni;
  }
  else{
    echo "erreur";
  }
?>
