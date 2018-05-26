<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/master.css">
    <script src="/assets/js/jeu.js" charset="utf-8"></script>
    <body onload="fs(1);">


<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';

?>


    <div class="zng-center zng-margin-top">
    <div class="zng-half">
    <div class="zng-card zng-form">
    <h2>Connexion</h2><br>
<?php
    if(isset($_POST['log'])){
        if (isset($_POST['login']) && isset($_POST['pass'])) {
            include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_log.php';

            $log->execute(array($_POST['login'],md5($_POST['pass'])));
            $res = $log->fetchAll();
            if ($log->rowCount()!=0) {

                $res = $res[0];
                $_SESSION['zngid'] = $res["id"];
                $_SESSION['zngpseudo'] = $res["pseudo"];
                $_SESSION['znglogged'] = yes;
                $_SESSION['zngmail'] = $res["email"];
                $_SESSION['zngname'] = $res["prenom"];
                echo "<script type=\"text/javascript\">
            document.location.href=\"../\"
            </script>";
            }
            else{
                echo "<span class=\"important\">Connexion échouée</span>";
            }

        }
    }
?>
<form name ="log" class="log" action="" method="post">
    <fieldset>
    Mail ou pseudo:
    <input class="zng-text-form" type="text" name="login"><br>
    Mot de passe:
    <input class="zng-text-form" type="password" name="pass"> <br>
    <input class="zng-btn-form" type="submit" name="log" value="Se connecter">

    <a href="mdpoublie.php">Mot de passe oublié</a>

    </fieldset>
    </form>

    </div>
    </div>

    <div class="zng-half zng-sec-half" >
    <div class="zng-card zng-form" id="sign">
    <h2>Inscription</h2><br>
    <form name="sign" class="sign" action="" method="post">
<?php
    if (isset($_POST['sign'])) {

        if (isset($_POST['genre']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naiss']) && isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['zngpass'])) {
            include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pb_co.php';
            include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_sign.php';


            $mail->execute();
            if($mail->rowCount()!=0){
                echo "<span class=\"important\">Cet email est déjà utilisé pour un compte dans notre base de donnée</span>";
            }
            else{
                echo "Pseudo: ".$_POST['login'];
                echo "<br> Password ".$_POST['zngpass'];
                echo "<br>".$_POST['genre'];
                echo ". ".$_POST['nom'];
                echo " ".$_POST['prenom'];
                echo "<br>Mail: ".$_POST['mail'];
                echo "<br>Naissance: ".$_POST['date_naiss'];
                $to=$_POST['pseudo']." <".$_POST['mail'].">";

                $id->execute();
                $res=$id->fetch();
                $_SESSION['zngid'] = $res['id'];
                $_SESSION['zngpseudo'] = $_POST['login'];
                $_SESSION['znglogged'] = "yes";
                $_SESSION['zngmail'] = $_POST['mail'];
                $_SESSION['zngname'] = $_POST['prenom'];
                //SESSION pblogged
                //SESSION pbtok
                //SESSION avatar_link

                $userinfo="Pseudo: ".$_POST['login']."\n".$_POST['genre'].". ".$_POST['nom']." ".$_POST['prenom']."\nMail: ".$_POST['mail']."\nIP: ".$_SERVER['REMOTE_ADDR'];
                $sign->execute();
                echo 'gmav';
                include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gmail_sign.php';
                $p->pushAdmin('Nouvel Utilisateur sur EscapeFromZNG',$userinfo );
                //admin
                try{

            }catch(Exception $e){
              die("erreur ".$e->getMessage());
            }
            }
        }

    }

?>
<fieldset id="fs1">
    <legend>Informations Privée</legend>
Genre : <br>
    <label>
    M<input type="radio" name="genre" value="M" required="required"/>
    </label>
    <label>
    Mme <input type="radio" name="genre" value="Mme" required="required"/>
    </label><br>
    <label>
    Nom <input class="zng-text-form" type="text" name="nom" placeholder="Entrez votre Nom" required="required">
    </label>
    <label>
    Prénom <input class="zng-text-form" type="text" name="prenom"  placeholder="Entrez votre Prénom" required="required"/>
    </label>
    <label>Date de naissance <input class="zng-text-form" type="date" name="date_naiss" required="required"> </label>
    </fieldset>
    <fieldset id="fs2">
    <legend>Informations Public</legend>
    <label>
    Pseudo <input class="zng-text-form" type="text" name="login" required="required">
    </label>
    <label>
    Mail <input class="zng-text-form" type="email" name="mail" required="required"/>
    </label>
    <label>
    Avatar <input class="" type="file" name="avatar">
    </label>
    </fieldset>
    <fieldset id="fs3">
    <legend>Sécurité</legend>
    <label>
    Mot de passe <input id="zngpass1" class="zng-text-form" type="password" name="zngpass" required="required">
    </label>
    <label>
    Confirmation <input id="zngpass2" class="zng-text-form" type="password" name="zngpass2" required="required"/>
    </label><br>
    <input type="submit" class="zng-btn-form" name="sign" value="S'inscrire" onclick="fs(3)">
    </fieldset>
    </form>
    <span class="zng-data" id="fsn">1</span>
    </div>
    <div class="zng-footer">
    <button id="btn1" type="button" class="zng-btn-form-half" onclick="fs(parseInt(document.getElementById('fsn').innerHTML)-1);verif_inscription()" disabled >&#9664;</button>
    <button id="btn2" type="button" class="zng-btn-form-half" onclick="fs(parseInt(document.getElementById('fsn').innerHTML)+1);verif_inscription()">&#9658;</button>
    </div>
    <div class="rect-fsn" id="rec1"></div>
    <div class="rect-fsn" id="rec2"></div>
    <div class="rect-fsn" id="rec3"></div>
    </div>
    </div>
    <script src="/assets/js/inscription.js" charset="utf-8"></script>
    </body>
    </html>
