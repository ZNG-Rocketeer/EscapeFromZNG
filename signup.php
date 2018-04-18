<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<body>

  <!-- Header -->
  <nav class="zng-padding">
    <a href="/" class="zng-bar-item zng-button">Accueil</a>
    <a href="/page.php" class="zng-bar-item zng-button">Solo</a>
    <a href="/pagehalf.php" class="zng-bar-item zng-button">Duo</a>
    <a href="/signup.php" class="zng-bar-item zng-button">Inscription</a>
  </nav>

  <div class="zng-row-padding zng-center zng-margin-top">
    <div class="zng-half">
      <div class="zng-card zng-container zng-form">
        <h2>Connexion</h2><br>
        <form class="log" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          Mail ou pseudo:
          <input class="zng-text-form" type="text" name="login"><br>
          Mot de passe:
          <input class="zng-text-form" type="password" name="pass"> <br>
          <input class="zng-btn-form" type="submit" value="Se connecter">
          <label>
            <input type="checkbox" > Se souvenir de moi <br>
          </label>
          <a href="#">Mot de passe oublié</a>

        </form>
      </div>
    </div>

    <div class="zng-half zng-sec-half">
      <div class="zng-card zng-container zng-form" id="sign">
        <h2>Inscription</h2><br>
        <form class="sign" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <fieldset>
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

          </fieldset>

          <fieldset>
            <legend>Profil Public</legend>
            <label>
              Pseudo <input class="zng-text-form" type="text" name="pseudo" placeholder="Entrez votre Pseudo" required="required"/>
            </label>
            <label>
              Mot de passe <input class="zng-text-form" type="password" name="pass">
            </label>
            <label>
              Confirmation <input class="zng-text-form" type="password" name="pass2">
            </label><br><br>
            Réseaux sociaux <br>
            <label>
               Facebook <input class="zng-text-form" type="text" name="fb">
            </label><br>
            <label>
               twitter <input class="zng-text-form" type="text" name="tt">
            </label><br><br>
            <label>
              Description <input class="zng-text-form" type="textarea" name="Description">
            </label>
          </fieldset>
          <input class="zng-btn-form" type="submit" value="S'inscrire">
        </form>
      </div>
    </div>
  </div>

</body>
</html>
