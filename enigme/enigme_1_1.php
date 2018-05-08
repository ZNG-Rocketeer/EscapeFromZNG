<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/master.css">
<script src="../assets/js/chrono.js" charset="utf-8"></script>
<body>

  <?php include '../assets/php/gen_nav.php';
  ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" >
        <h2>Enigme 1</h2>
        <div class="container">
          <form autocomplete="off">
            <label>Mot a deviner :
              <input type="password" id="mot" maxlength="27" required="required"/>
            </label>
          </form>
        </div>
      </div>
    </div>
    <form name="f_chrono">
      <label for="saisie">Entrez le temps voulu en minutes : </label>
      <input type="text" name="saisie" style="text-align: right;" /><br />
      <input type="button" name="btn_dem" id="btn_dem" value="Démarrer" onclick="IndiquerMinutes(f_chrono.saisie.value); DemarrerChrono();" />
      <input type="button" name="btn_stop" id="btn_stop" value="Arreter !" onclick="ArreterChrono();" style="display: none;" />
      <input type="button" name="btn_pause" id="btn_pause" value="Pause" onclick="PauseChrono();" style="display: none;" />
    </form>
    <p id="chrono"></p>
  </div>
  <form class="zng-hidden" action="index.php" method="post">
    <input type="number" name="idEni" value="11">
    <input type="number" name="temps">
    <input type="text" name="verif">
  </form>

  <script src="../assets/js/enigme.js" charset="utf-8"></script>
</body>
</html>
