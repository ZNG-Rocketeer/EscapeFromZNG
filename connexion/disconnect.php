<?php
  session_start();
  unset($_SESSION['zngid']);
  unset($_SESSION['znglogged']);
  unset($_SESSION['zngname']);
  unset($_SESSION['zngpseudo']);
  unset($_SESSION['zngmail']);
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Deconnexion</title>
   </head>
   <body>
     <script type="text/javascript">
       document.location.href="/"
     </script>
   </body>
 </html>
