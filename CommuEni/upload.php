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
        $file_1=$_SESSION["zngid"]."_eni.php"; 
        $file_2=$_SESSION["zngid"]."_eni.html"; 
        $file_3=$_SESSION["zngid"]."_eni.js"; 
        $file_4=$_SESSION["zngid"]."_eni.css";
        $file_5=$_SESSION["zngid"]."_eni.txt";

//pas besoinde vérifier le type du fichier
        $dest_1= $reptemporaire.$file_1;
        $dest_2= $reptemporaire.$file_2;
        $dest_3= $reptemporaire.$file_3;
        $dest_4= $reptemporaire.$file_4;
        $dest_5= $reptemporaire.$file_5;
        if( !file_exists( $dest_1) && !file_exists($dest_2) && !file_exists($dest_3) && !file_exists($dest_4) && !file_exists($dest_5)){
            copy($_FILES["php"]["tmp_name"],$dest_1);
            copy($_FILES["html"]["tmp_name"],$dest_2);
            copy($_FILES["js"]["tmp_name"],$dest_3);
            copy($_FILES["css"]["tmp_name"],$dest_4);
            copy($_FILES["txt"]["tmp_name"], $dest_5);
            $ok="Validation d'envoi";
            $msg="Vos fichiers nous ont bien été transmis !";}
            
        else{
            $ok="Echec d'envoi";
            $msg="Vos nouveaux fichiers ne peuvent pas être transmis car nous n'avons pas encore traité vos fichiers précédents.";
    }
    }

?>
<div class="zng-center zng-margin-top">
    <div class="zng-solo">
    <div class="zng-card" >
        <h2><?php echo $ok; ?></h2>
<div class="p">
<?php echo $msg; ?>
</body>
</html>