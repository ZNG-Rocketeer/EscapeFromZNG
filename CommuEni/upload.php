<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>Enigmes de la communauté</title>
    <link rel="stylesheet" href="/assets/css/master.css">
    </head>
    <body>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';



$reptemporaire = "reptmp/"; // a créer avant d'utiliser le script

if( isset($_POST["Envoyer"]) ) 
    {
        $file_1=$_SESSION["zngid"]."_eni.php"; //$_FILES["php"]["name"];
        $file_2=$_SESSION["zngid"]."_eni.html"; //$_FILES["html"]["name"];
        $file_3=$_SESSION["zngid"]."_eni.js"; //$_FILES["js"]["name"];
        $file_4=$_SESSION["zngid"]."_eni.css";//$_FILES["css"]["name"];

//pas besoinde vérifier le type du fichier
        $dest_1= $reptemporaire.$file_1;
        $dest_2= $reptemporaire.$file_2;
        $dest_3= $reptemporaire.$file_3;
        $dest_4= $reptemporaire.$file_4;

        copy($_FILES["php"]["tmp_name"],$dest_1);
        copy($_FILES["html"]["tmp_name"],$dest_2);
        copy($_FILES["js"]["tmp_name"],$dest_3);
        copy($_FILES["css"]["tmp_name"],$dest_4);
    }

?>
<div class="zng-center zng-margin-top">
    <div class="zng-solo">
    <div class="zng-card" >
    <h2>Confirmation d'envoi</h2>
<div class="p">
Vos fichiers nous ont bien été transmis !
</div>

</div>
</div>
</div>
</body>
</html>
