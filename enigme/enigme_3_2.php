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
        <h2>Enigme 3 partie 2 <span id="Enisuiv" class="zng-hidden">0</span></h2>

        <div id="color">
          <input type="text" id="eni3_2" name="eni3_2" autofocus placeholder="Réponse ici :"/>
          <!-- Insertion de l'ascii art -->
          <pre>
            ______________________________________
           /\                                     \
           \_|                 _                  |
             |  _ __ ___   ___| |_ __ _ _ __ ___  |
             | | '_ ` _ \ / _ \ __/ _` | '__/ _ \ |
             | | | | | | |  __/ || (_| | | |  __/ |
             | |_| |_| |_|\___|\__\__,_|_|  \___| |
             |   _________________________________|_
              \_/___________________________________/
          </pre>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/enigme.js" charset="utf-8"></script>
</body>
</html>
