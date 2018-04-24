<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Classement</title>
  </head>
  <body>
    <?php include '../assets/php/gen_nav.php'
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
  </body>
</html>
