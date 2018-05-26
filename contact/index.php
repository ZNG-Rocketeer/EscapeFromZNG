<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
  include $_SERVER['DOCUMENT_ROOT'].'/assets//php/pb_co.php';
  if (isset($_POST['body']) && isset($_SESSION['zngpseudo'])) {
    $title = "Contact EscapeFromZNG ".$_SESSION['zngpseudo'];
    $p->pushNote("erwanlc1@gmail.com",$title,$_POST['body']);
  }
  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Contact</h2>
        <p>
          <form class="" action="" method="post">
            <label>
              Contenu du message <input class="zng-text-form" type="textarea" name="body">
            </label>
            <input class="zng-btn-form" type="submit" value="Envoyer">
          </form>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
