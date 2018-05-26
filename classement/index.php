<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Classement</title>
    <link rel="stylesheet" href="/assets/css/master.css">
    </head>
    <body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
   
?>
    <div id="card" class="zng-center zng-margin-top">
    
    <table id="tableuser" class="zng-table zng-solo">
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_init.php';
$sqlsel="select zng_user.id,pseudo,idEni,temps from zng_user,ResEni WHERE ResEni.id = zng_user.id ";

$sel = $pdo->prepare($sqlsel, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sel->execute();
$res = $sel->fetchAll();

echo '<thead><tr><th><a href="index.php?o=Pseudo" >Pseudo</a></th><th><a href="index.php?o=idEni">idEni</a></th><th>temps</th></tr></thead>';

foreach ($res as $row) {
    echo "<tr";
    if ($row[0]==12) {
        echo " class=\"tr-vip\"";
    }
    echo "><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
}



?>
</table>


</div>
    
    
</body>
</html>
