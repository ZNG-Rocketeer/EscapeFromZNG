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
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
  </section>
</body>
</html>
