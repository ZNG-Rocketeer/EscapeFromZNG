<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Enigmes de la communauté</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
  ?>
  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" >
        <h2>Créations de la communauté</h2>
        <div class="p">
	   <?php
		include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_commu_jeu.php';

		$select_C_enigme_pas_fait->execute();
		
		$count_eni=$select_C_enigme_pas_fait->fetch();
		$enigme_max=$count_eni['C_id_eni'];
		$idEni=rand(1,$enigme_max);
		$select_enigme_commu->execute();
		$res=$select_enigme_commu->fetch();
		var_dump($res);
		?>   
        </div>
      </div>
    </div>
  </div>
</body>
</html>
