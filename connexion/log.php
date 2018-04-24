<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Connexion réussie</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php include '../assets/php/gen_nav.php'
  ?>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Connexion en cours</h2>
        <?php
        if ($_SERVER["HTTP_REFERER"]."log.php" == "http://zngairone.tk".$_SERVER["PHP_SELF"]) {
          if (isset($_POST['login']) && isset($_POST['pass'])) {
            // SELECT id FROM zng_users WHERE pseudo AND pass =
            // if non empty znglogged = yes zngid = id zngpseudo location href = index.php else location = connexion/index.php?log=wrong
            echo $_POST["login"];
            echo $_POST["pass"];
          }
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
