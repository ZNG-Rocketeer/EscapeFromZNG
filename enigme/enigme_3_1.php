<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Check Enigme</title>
  <link rel="stylesheet" href="../assets/css/tab.css">
  <link rel="stylesheet" href="../assets/css/master.css">
  <script src="../assets/js/tab.js" charset="utf-8"></script>
  <script src="../assets/js/chrono.js" charset="utf-8"></script>
</head>
<body onload="resize_tab(); chronoStart();">
  <?php include '../assets/php/gen_nav.php';
  ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card">
        <h2>Enigme 3 : "Picross" <span id="Enisuiv" class="zng-hidden">2</span></h2>

        <div class="1">
          <table id="main">
            <?php
            for ($i=0; $i < 19; $i++) {
              echo "<tr>";
              for ($j=0; $j < 19; $j++) {
                if($i < 4 || $j<4){
                  echo "<th></th>";
                }
                else{
                  echo "<td class=\"coul0\" id=\"".$i."a".$j."\" onclick=\"pic($i,$j);\"> </td>";
                }
              }
              echo "</tr>
              ";
            }
            ?>
          </table>
        </div>

        <div class="2">
          <form action="#">
            <input type="radio" id="coul0" name="radio-group" checked value="#ffffff">
            <label for="coul0"></label>
            <input type="radio" id="coul1" name="radio-group" value="#000000">
            <label for="coul1"></label>
            <input type="radio" id="coul2" name="radio-group" value="#ff0000">
            <label for="coul2"></label>
            <input type="radio" id="coul3" name="radio-group" value="#2C902C">
            <label for="coul3"></label>
            <input type="radio" id="coul4" name="radio-group" value="#ffff00">
            <label for="coul4"></label>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
