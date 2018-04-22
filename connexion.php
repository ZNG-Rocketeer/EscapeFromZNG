<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <fieldset>
      <legend>
        Connexion
      </legend>
      <label>
        E-MAIL<br/>
        <input type="email" required />
      </label>
      <br>
      <label> 
      Mot de passe<br />
      <input type="password" required >
    </label>
    <br>
    <label>
      <input type="radio" value="stay_connect" />
      Se souvenir de moi
    </label>
    <br>
    <label>
    <input type="submit" value="Connexion"</label>
    </fieldset>
    <br>
    <a href="oublie.html">Mot de passe oublié?</a>
    <br>
    <label>
      <a href="inscription.html" >Pas encore membre?</a>
      <br />
    </label>
  </form>
  </body>
</html>
