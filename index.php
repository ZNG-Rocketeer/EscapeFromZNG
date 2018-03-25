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
    echo "Connected successfully";


    /* Retourne le nom de la base de données courante */
    if ($result = $conn->query("SELECT DATABASE()")) {
      $row = $result->fetch_row();
      printf("La base de données courante est %s.\n", $row[0]);
      $result->close();
    }

    /* Change la base de données en "world" */
    $conn->select_db("php");

    /* Retourne le nom de la base de données courante */
    if ($result = $conn->query("SELECT DATABASE()")) {
      $row = $result->fetch_row();
      printf("La base de données courante est %s.\n", $row[0]);
      $result->close();
    }

    $conn->close();
    ?>
  </section>
</body>
</html>
