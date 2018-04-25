<?php
  function connexion_bdd(){
    try{
      $pdo = new PDO('mysql:host=127.0.0.1;dbname=php', 'php', 'zngphpescape');
    }
    catch (Exception $e){
      die('Erreur : ' . $e->getMessage());
    }
    return $pdo;
}

function inscription($pseudo, $mdp, $genre, $nom, $prenom, $email, $date_naiss){
  $pdo=connexion_bdd();

  $resultat = $pdo->query ( "SELECT COUNT(email) FROM php.`zng_user` ");
  $rowcount = $resultat->rowCount();
  echo "1";
  echo $rowcount; //faire test de l'unicité de compte
  $resultat->closeCursor();

  $verif=$pdo->prepare("")
  $stmt=$pdo->prepare("INSERT INTO `zng_user` (`pseudo`, `pass`, `genre`, `nom`, `prenom`, `email`, `date_insc`, `date_naiss`) VALUES (:pseudo, :zngpass, :genre, :nom, :prenom, :mail, CURRENT_TIMESTAMP, :date_naiss)");
}
// if select (pseudo ||) mail non vide location href connexion/index.php?signup=fail
//INSERT INTO `zng_user` (`pseudo`, `pass`, `genre`, `nom`, `prenom`, `email`, `date_insc`, `date_naiss`) VALUES ('$_POST["pseudo"]', '$_POST["zngpass"]', '$_POST["genre"]', '$_POST["nom"]', '$_POST["prenom"]', '$_POST["mail"]', CURRENT_TIMESTAMP, '$_POST["date_naiss"]')


?>
