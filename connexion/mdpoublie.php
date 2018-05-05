<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta charset="utf-8">
<title>Mot de passe oublié</title>
</head>
<body>
<?php
include '../assets/php/pdo_users.php";

if(isset($_POST['mail'])){
// selection user by mail
$gmail->execute($_POST['mail']);
// gen mdp aleatoire -> 
}
$to = $mail;
$subject = "T con";
$body = "Mot de passe oublié";

include '../assets/php/gmail.php'	
?>
</body>
</html>
