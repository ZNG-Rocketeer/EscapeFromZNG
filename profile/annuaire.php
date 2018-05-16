<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Annuaire</title>
  <link rel="stylesheet" href="../assets/css/master.css">
</head>
<body>
  <?php include '../assets/php/gen_nav.php';
  
  // Barre de nav ?>

  <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Annuaire des utilisateurs</h2>
        <form action="rechprofil.php" method="get">
          <label>
            Nom Prenom <br> <input class="zng-text-form" type="text" name="name">
          </label><br>
          <label>
            Pseudo: <br> <input class="zng-text-form" type="text" name="pseudo">
          </label>
          <button class="zng-btn-form" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
