<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Check Enigme</title>
  </head>
  <body onload="genere_tableau_vide()">
    <table id="main">
    <?php
    for ($i=0; $i < 15; $i++) {
      echo "<tr id=".$i.">
      <td>
      1
      </td>
      </tr>";
    }
     ?>
    </table>
  </body>
</html>
