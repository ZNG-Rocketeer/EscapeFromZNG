<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Connexion...</title>
  <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Connexion en cours</h2>
        <p>
          <?php
          //if()
            if (isset($_POST['znglogged'])) {
              if ($_POST['znglogged']==yes) {
                echo "<script type=\"text/javascript\">
                document.location.href=\"/\"
                </script>";
              }
            }
            if (isset($_POST['login']) && isset($_POST['pass'])) {
              include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_log.php';

              $log->execute(array($_POST['login'],md5($_POST['pass'])));
              $res = $log->fetchAll();
              if ($log->rowCount()!=0) {

                $res = $res[0];
                $_SESSION['zngid'] = $res["id"];
                $_SESSION['zngpseudo'] = $res["pseudo"];
                $_SESSION['znglogged'] = yes;
                $_SESSION['zngmail'] = $res["email"];
                $_SESSION['zngname'] = $res["prenom"];
                echo "<script type=\"text/javascript\">
                document.location.href=\"../\"
                </script>";
              }
              else{
                echo "Login Failed";
                echo "<script type=\"text/javascript\">
                document.location.href=\"index.php?log=wrong\"
                </script>";
              }

            }
          //}
          //else {
          //  echo "fail";
          //}
          ?>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
