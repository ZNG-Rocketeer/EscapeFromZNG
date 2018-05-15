<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>Admin Classement supp</title>
    <link rel="stylesheet" href="/assets/css/master.css">
    </head>
    <body>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
?>
<div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
    <div  class="zng-card" style="min-height:500px">
    <h2>Supprimer</h2>
    <p>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/admin.php';
include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_admin_supp.php';
         
echo "<br>";
if(isset($_GET['conf'])){
    if($_GET['conf']=='irmation'){
        $delete->execute();
    }
}
else if(isset($_GET['id']) && isset($_GET['idEni'])){
    $cla=$id;
    $cla->execute(array($_GET['id'],$_GET['idEni']));
    $res=$cla->fetchAll();
}
echo "<table class=\"zng-table\">";
echo "<tr><th>id</th><th>pseudo</th><th>Nom</th><th>Prenom</th><th>email</th><th>Date Insc</th><th>idEni</th><th>temps</th></tr>";
foreach ($res as $row) {
    echo "<tr>";
    for ($i=0; $i < $cla->columnCount(); $i++) {
        echo "<td>$row[$i]</td>";
    }
    echo "</tr>";
}
echo "</table>";
           
?>
<a href="&conf=irmation" ><button type="button" class="zng-btn-form">Confirmer</button></a>
         
          
    </p>
    </div>
    </div>
    </div>
    </body>
    </html>
