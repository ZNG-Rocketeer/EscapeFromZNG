<?php
  session_start();
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Suppression du compte</title>
   </head>
   <body>

<?php
      include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_compte_supp.php';
if(isset($_POST['zngpseudo']) && isset($_SESSION['zngpseudo']) && isset($_SESSION['zngid']) && isset($_SESSION['zngmail']) && isset($_POST['supp'])){
    $delete_user->execute();
 
   echo " <script type=\"text/javascript\">
       document.location.href=\"disconnect.php\"
     </script>";
 }
else{
    echo "<form action=\"\" method=\"POST\" class=\"\" >
<label>Pseudo : <br> 
<input type=\"text\" required='required' name=\"zngpseudo\">
</label>
<input type=\"submit\" class=\"zng-btn-form\" name=\"supp\" >
</form>
";

}
?>
     
   </body>
 </html>
