<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/master.css">
<script src="../assets/js/jeu.js" charset="utf-8"></script>
<body>


  <?php include '../assets/php/gen_nav.php'
  ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-half">
      <div class="zng-card zng-form">
        <h2>Connexion</h2>

        <?php if ($_GET['log']=="wrong") {
          echo "connexion echouée";
        } ?>
        <form class="log" action="log.php" method="post">
          Mail ou pseudo:
          <input class="zng-text-form" type="text" name="login"><br>
          Mot de passe:
          <input class="zng-text-form" type="password" name="pass"> <br>
          <input class="zng-btn-form" type="submit" value="Se connecter">
          <label>
            <input type="checkbox" > Se souvenir de moi <br>
          </label>
          <a href="#">Mot de passe oublié</a>
          <?php
          $_SESSION['znglogged']=yes;
          $_SESSION['zngnom']=airone;
          ?>
          <?php
          include '../assets/php/pdo.php'
          inscription("airone","airpass","0","LC","ER","lce987@live.fr","1998-10-12");
          echo "test";
          ?>
          <a href="signup.php">signup</a>
        </form>
      </div>
    </div>

    <div class="zng-half zng-sec-half">
      <div class="zng-card zng-form" id="sign">
        <h2>Inscription</h2>
        <form class="sign" action="signup.php" method="post">
          <?php if ($_GET['signup']=="fail") {
            echo "<span class=\"important\">Cet email est déjà utilisé pour un compte dans notre base de donnée</span>";
          } ?>
          <fieldset id="fs1">
            <legend>Informations Privée</legend>
            Genre : <br>
            <label>
              M<input type="radio" name="genre" value="M" required="required"/>
            </label>
            <label>
              Mme <input type="radio" name="genre" value="Mme" required="required"/>
            </label><br>
            <label>
              Nom <input class="zng-text-form" type="text" name="nom" placeholder="Entrez votre Nom" required="required">
            </label>
            <label>
              Prénom <input class="zng-text-form" type="text" name="prenom" placeholder="Entrez votre Prénom" required="required"/>
            </label>
            <label>Date de naissance <input class="zng-text-form" type="date" name="date_naiss" value="1970-01-01" required="required"> </label>
          </fieldset>
          <fieldset id="fs2">
            <legend>Informations Public</legend>
            <label>
              Pseudo <input class="zng-text-form" type="text" name="pseudo" required="required">
            </label>
            <label>
              Mail <input class="zng-text-form" type="email" name="mail" required="required"/>
            </label>
          </fieldset>
          <fieldset id="fs3">
            <legend></legend>
            <label>
              Mot de passe <input id="zngpass1" class="zng-text-form" type="password" name="zngpass" required="required">
            </label>
            <label>
              Confirmation <input id="zngpass2" class="zng-text-form" type="password" name="zngpass2" required="required"/>
            </label><br>
            <input type="submit" class="zng-btn-form" name="submit" value="S'inscrire">
          </fieldset>
          <div class="zng-footer">
            <button id="btn1" type="button" class="zng-btn-form-half" onclick="fs(parseInt(document.getElementById('fsn').innerHTML)-1)" disabled > &#9650;</button>
            <button id="btn2" type="button" class="zng-btn-form-half" onclick="fs(parseInt(document.getElementById('fsn').innerHTML)+1)"> &#9660;</button>
          </div>
        </form>
        <span id="fsn">1</span>
      </div>
    </div>
  </div>

</body>
</html>
