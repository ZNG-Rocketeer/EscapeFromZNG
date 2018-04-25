<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Check Enigme</title>
  <link rel="stylesheet" href="../assets/css/tab.css">
  <link rel="stylesheet" href="../assets/css/master.css">
  <script src="../assets/js/tab.js" charset="utf-8"></script>
</head>
<body onload="resize_tab()">
  <?php include '../assets/php/gen_nav.php'
   ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card">
        <h2>Enigme 3 : "Picross"</h2>
        <div class="1">
          <table id="main">
            <?php
            for ($i=0; $i < 15; $i++) {
              echo "<tr>";
              for ($j=0; $j < 15; $j++) {
                $a=($i+$j)%4;
                echo "<td class=\"coul0\" id=\"".$i."a".$j."\" onclick=\"pic($i,$j)\"> </td>";
              }
              echo "</tr>
              ";
            }
            ?>
          </table>
        </div>

        <div class="2">
          <form action="#">
            <input type="radio" id="coul0" name="radio-group" checked value="coul0">
            <label for="coul0"></label>
            <input type="radio" id="coul1" name="radio-group" value="coul1">
            <label for="coul1"></label>
            <input type="radio" id="coul2" name="radio-group" value="coul2">
            <label for="coul2"></label>
            <input type="radio" id="coul3" name="radio-group" value="coul3">
            <label for="coul3"></label>
            <input type="radio" id="coul4" name="radio-group" value="coul4">
            <label for="coul4"></label>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
