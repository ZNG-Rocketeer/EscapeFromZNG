<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/master.css">
<script src="../assets/js/chrono.js" charset="utf-8"></script>
<body onload="chronoStart()">

  <?php include '../assets/php/gen_nav.php';
  ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" >
        <h2>Enigme 1</h2>
        <div class="container">
          <form >
            <label>Mot a deviner :
              <input autocomplete="off" type="password" id="mot" maxlength="27" required="required"/>
            </label>
          </form>
        </div>
      </div>
    </div>

  </div>
  <form class="zng-hidden" action="index.php" method="post">
    <input type="number" name="idEni" value="11">
    <input type="number" name="temps">
    <input type="text" name="verif">
  </form>

  <script src="../assets/js/enigme.js" charset="utf-8"></script>
</body>
</html>
