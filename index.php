<!DOCTYPE html>
<html>
<head>
  <title>EscapeFromZNG</title>
  <meta charset ="utf8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="image">
    <img src="img/hack.gif" alt="GIF Hack">
    <div class="centered">
      EscapeFromZNG
      <a href="enigme1.html" class="bouton">
        Jouer
      </a>
    </div>
  </section>
  <h1 class="content">Règles</h1>
  <section class="content">
    <p>3 sous énigmes sur différentes pages une énigme principale une page de présentation + annexes</p>
    <?php
    $con=mysqli_connect("localhost","php","zngphpescape","php");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // check POST form
    if($_POST["nom"] || $_POST["prenom"]){
        $res = mysqli_query($con,'INSERT INTO users (Nom,prenom) VALUES '."(\"". $_POST["nom"]. "\",\"". $_POST["prenom"]."\")" );
        
    }

    // Perform queries
    $res = mysqli_query($con,"SELECT * FROM users");

    if ($res->num_rows > 0) {
      echo "<table> <tr><th>Nom</th><th>Prenom</th>";
        // output data of each row
        while($row = $res->fetch_assoc()) {
            echo "<tr><td>".$row["Nom"]."</td><td>" . $row["prenom"]. "</td></tr><br>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($con);
    ?>
  </section>
  <section class="content">
    <form class="user" action="index.php" method="post">
      <input type="text" name="nom" placeholder="Nom">
      <input type="text" name="prenom" placeholder="Votre prenom">
      <input type="submit">
    </form>
  </section>
</body>
</html>
