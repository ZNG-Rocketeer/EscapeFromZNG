<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Check Enigme</title>
  <link rel="stylesheet" href="assets/tab.css">
  <link rel="stylesheet" href="assets/style.css">
  <script src="assets/tab.js" charset="utf-8"></script>
</head>
<body onload="resize_tab()">
  <nav class="zng-padding">
    <a href="/" class="zng-bar-item zng-button">Accueil</a>
    <a href="/page.php" class="zng-bar-item zng-button">Solo</a>
    <a href="/pagehalf.php" class="zng-bar-item zng-button">Duo</a>
    <a href="/signup.php" class="zng-bar-item zng-button">Inscription</a>
  </nav>

  <div class="zng-row-padding zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card">
        <h2>Enigme 3 : "Picross"</h2><br>
        <table id="main">
          <?php
          for ($i=0; $i < 15; $i++) {
            echo "<tr>";
            for ($j=0; $j < 15; $j++) {
              $a=($i+$j)%4;
              echo "<td class=\"coul0\" > </td>";
            }
            echo "</tr>
            ";
          }
          ?>
        </table>

      </div>
    </div>
  </div>
</body>
</html>
