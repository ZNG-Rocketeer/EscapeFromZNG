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
    $servername = "localhost";
    $username = "php";
    $password = "zngphpescape";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
      echo "not $conn->connect_error";
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br/>";

    /* Change la base de données en "php" */
    $conn->select_db("php");
 echo "Test Select";
    $result = mysqli_query($conn,"SELECT * FROM php.users");
    echo mysql_result($result,0);


    $conn->close();
    ?>
  </section>
</body>
</html>
