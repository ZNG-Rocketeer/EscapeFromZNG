<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Annuaire</title>
</head>
<body>
  <?php include '../assets/php/gen_nav.php'
  // Barre de nav ?>

  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Annuaire des utilisateurs</h2>
        <form action="profil.php" method="get">
          <label>
            Nom Prenom <input type="text" name="name">
          </label>
          <label>
            Pseudo: <input type="text" name="pseudo">
          </label>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
