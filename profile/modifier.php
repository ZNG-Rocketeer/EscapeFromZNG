<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>Modifier Profil</title>
    <link rel="stylesheet" href="../assets/css/master.css">
    </head>
    <body>
<?php include '../assets/php/gen_nav.php';
?>
    <div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
    <div  class="zng-card" style="min-height:500px">
    <h2>Bienvenue<?php echo " ".$_SESSION["zngname"];?></h2>
<div class="zng-padding-16">
          
<?php
    include '../assets/php/pdo/pdo_users.php';
include '../assets/php/pdo/pdo_log.php';
$sel->execute(array($_SESSION['zngid']));
$res=$sel->fetch();
if(isset($_POST['mod'])){
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['oldpass'])){
        if(isset($_POST['newpass']) && isset($_POST['newpass2'])){
            if($_POST['newpass'] == $_POST['newpass2']){
                
                $mail = $_POST['mail'];
                $log->execute(array($mail,md5($_POST['oldpass'])));
                if($log->rowCount() == 1){
                    $pass = md5($_POST['newpass']);
                    $mdp_nouv->execute();
                    $pdo->query('UPDATE zng_user SET nom = '.$_POST['nom'].' prenom = '.$_POST['prenom'].' pseudo = '.$_POST['login'].' WHERE email = '.$_POST["mail"]);
                    echo "Changement du mot de passe et des informations réussi";
                }
                else{
                    echo "Changement de mot de passe échouée";
                }
            }
        }
        else{
            $mail = $_POST['mail'];
                $log->execute(array($mail,md5($_POST['oldpass'])));
        $pdo->query('UPDATE zng_user SET nom = '.$_POST['nom'].' prenom = '.$_POST['prenom'].' pseudo = '.$_POST['login'].' WHERE email = '.$_POST["mail"]);
         echo "Changement des informations réussi";
        }
    }
}
else{
    echo '<form class="" action="" method="post">';
    echo 'Nom :<br><input class="zng-text-form" type="text" name="nom" value="'.$res['nom']."\"><br>";
    echo 'Prenom :<br><input class="zng-text-form" type="text" name="prenom" value="'.$res['prenom']."\"><br>";
    echo 'Pseudo :<br><input class="zng-text-form" type="text" name="login" value="'.$res['pseudo']."\"><br>";
    echo 'Mail :<br><input class="zng-text-form" type="text" name="mail" value="'.$res['email']."\" disabled><br>";
    echo 'Ancien mot de passe <br><input class="zng-text-form" type="password" name="oldpass" placeholder="Ancien mot de passe"> <br>';
    echo 'Nouveau Mot de passe <br>
            <input class="zng-text-form" type="password" name="newpass" placeholder="Nouveau mot de passe"><br>';
    echo 'Confirmation <br>
            <input class="zng-text-form" type="password" name="newpass2" placeholder="Confirmation nouveau mot de passe">
    <button class="zng-btn" type="submit" name="mod" style="margin:2%;">Confirmer modification</button>
   </form> ';
}
?>
            

            
</form>
</div>
</div>
</div>
</div>
</body>
</html>
