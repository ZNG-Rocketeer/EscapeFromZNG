<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php include '../assets/php/gen_nav.php'; ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" >
        <h2>Inscription en cours</h2>
        Veuillez patienter pendant que nous traitons votre inscription
        <?php
        if ($_SERVER["HTTP_REFERER"]."signup.php" == "http://zngairone.tk".$_SERVER["PHP_SELF"]) {
          if (isset($_POST['genre']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naiss']) && isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['zngpass'])) {
            // if select (pseudo ||) mail non vide location href connexion/index.php?signup=fail
            //INSERT INTO `zng_user` (`pseudo`, `pass`, `genre`, `nom`, `prenom`, `email`, `date_insc`, `date_naiss`) VALUES ('$_POST["pseudo"]', '$_POST["zngpass"]', '$_POST["genre"]', '$_POST["nom"]', '$_POST["prenom"]', '$_POST["mail"]', CURRENT_TIMESTAMP, '$_POST["date_naiss"]')
            echo '$_POST["pseudo"]', '$_POST["zngpass"]', '$_POST["genre"]', '$_POST["nom"]', '$_POST["prenom"]', '$_POST["mail"]', '$_POST["date_naiss"]';
        }

        }
         ?>
      </div>
    </div>
  </div>

</body>
</html>
