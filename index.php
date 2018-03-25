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

    // Perform queries
    mysqli_query($con,"SELECT * FROM users");
    
    mysqli_close($con);
    ?>
  </section>
</body>
</html>
