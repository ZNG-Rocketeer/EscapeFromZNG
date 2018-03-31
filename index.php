<!DOCTYPE html>
<html>
<head>
  <title>EscapeFromZNG</title>
  <meta charset ="utf8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="backimg">
    <img src="img/hack.gif" alt="GIF Hack">
    <div class="imgcontent">
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
    $res = mysqli_query($con,"SELECT * FROM users");
    var_dump($res);
    mysqli_close($con);
    ?>
  </section>
</body>
</html>
