<?php
include("pdo_init.php");
session_start();

$reptemporaire = "reptmp"; // a créer avant d'utiliser le script ^^
if(isset($_POST['envoyer'])) 
    {
        $file_1=$_FILES['php']['name'];
        $file_2=$_FILES['html']['name'];
        $file_3=$_FILES['js']['name'];
        $file_4=$_FILES['css']['name'];
        //pas besoinde vérifier le type du fichier
        $dest_1= $reptemporaire."/".$file_1;
        $dest_2= $reptemporaire."/".$file_2;
        $dest_3= $reptemporaire."/".$file_3;
        $dest_4= $reptemporaire."/".$file_4;
        
        $copy_1 = copy($_FILES['php']['tmp_name'], $dest_1);
        $copy_2 = copy($_FILES['php']['tmp_name'], $dest_2);
        $copy_3 = copy($_FILES['php']['tmp_name'], $dest_3);
        $copy_4 = copy($_FILES['php']['tmp_name'], $dest_4);
        if (!$copy_1 || !$copy_2 || !$copy_3 || !$copy_4) 
            {
                echo '<h1>Upload Failled!</h1>';
                $errors=1;
            }
        else
            {
                if( !isset($_POST['commentaire'] ){
                    $_POST['commentaire']=NULL;
                }
                
                $stmt=$pdo -> prepare("INSERT INTO PostEni VALUES(".$_SESSION['zngid'].", ".$_FILES["php"].", ".$_FILES["html"].", ".$_FILES["js"].", ".$_FILES["css"].", ".$_POST['commentaire'].")");
                $stmt->execute();
                $stmt->CloseCursor();
                $pdo=null;
                }
            }
    }
?>