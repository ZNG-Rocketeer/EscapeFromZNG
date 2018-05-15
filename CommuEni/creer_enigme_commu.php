<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Enigmes de la communauté</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
   <?php
	include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
	
		if(isset($_POST['question']) && isset($_POST['reponse']))
		{
			include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_commu.php';
			
			$insert_enigme->execute();
		}	
  ?>
  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" >
        <h2>Création de votre énigme</h2>
        <div class="p">
          <form class="zng-form" action="" method="post">
            Question <br>
            <textarea class="zng-textarea-form" name="question" rows="8" cols="80"></textarea>
            <br>
            Réponse <br>
            <input class="zng-text-form" type="text" name="reponse">

	    <input class="zng-btn-form" type="submit" name="Valider" value="Valider">
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
