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
          <form class="zng-form enigme-form" action="" method="post">
	    Entrez directement votre enigme en remplissant les sections "Question" et "Réponse" :
	    <br/>
	    <br/>
	    <label for="question">Question </label><br>
            <textarea class="zng-textarea-form" name="question" id="question" rows="8" cols="80"></textarea>
            <br/>
            <label for="reponse">Réponse</label><br>
            <input class="zng-text-form" type="text" name="reponse" id=reponse">
	    <br/>
	    <input class="zng-btn-form" type="submit" name="Valider" value="Valider">
	    </form>
	    <br/>
	    <br/>
	    Ou  en envoyant votre fichier (en .php/.html/.js/.css) avec la section ci-dessous : <br/>
	    <br/>
	    <form class="zng-form enigme-form" action="upload.php" method="post" enctype="multipart/form-data">
	    <table>
	    <tr>
	    <td> <label for="php">Fichier PHP : </label> </td>
	    <td> <input type="file" name="php" id="php" value="php"> </td>
	    </tr>
	    <tr>
	    <td><label for="html">Fichier HTML : </label></td>
	    <td><input type="file" name="html" id="html" value="html"></td>
	    </tr>
	    <tr>
	    <td><label for="js">Fichier JavaScript : </label></td>
	    <td><input type="file" name="js" id="js" value="js"></td>
	    </tr>
	    <tr>
	    <td><label for="css">Fichier CSS : </label></td>
	    <td><input type="file" name="css" id="css" value="css"></td>
	    <tr>
	    <tr>
	    td><label for="css">Commentaire sur vos fichiers : </label></td>
	    <td><input type="file" name="css" id="css" value="css"></td>
	    </tr>
	    </table>
	    <br/>
	    <br/>
	    <label for="commentaire">Commentaire sur vos fichiers :</label>
            <textarea class="zng-textarea-form" name="commentaire" id="commentaire" rows="8" cols="80"></textarea>
	    <br/>
	    <br/>
           <input class="zng-btn-form" type="submit" name="Envoyer" value="Envoyer">
	    </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
