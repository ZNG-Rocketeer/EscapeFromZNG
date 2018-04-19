<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/style.css">

<body>

  <!-- Header -->
  <nav class="zng-padding">
    <a href="/" class="zng-bar-item zng-button">Accueil</a>
    <a href="/page.php" class="zng-bar-item zng-button">Solo</a>
    <a href="/pagehalf.php" class="zng-bar-item zng-button">Duo</a>
    <a href="/signup.php" class="zng-bar-item zng-button">Inscription</a>
  </nav>

  <div class="zng-row-padding zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" style="min-height:460px">
        <h2>Enigme 1</h2><br>
        <div class="container">
          <form>
            <label>Mot a deviner :
              <input type="password" id="mot" maxlength="27" required="required"/>
            </label>
          </form>
        </div>
      </div>
    </div>
  </div>
<script src="assets/enigme.js" charset="utf-8"></script>
</body>
</html>
