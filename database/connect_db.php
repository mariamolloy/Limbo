<!--Connects to limbo.sql db-->
<!DOCTYPE html>
<html>
  <body>
    <!-- none of this works yet, just pretty much the logic behind connecting to db-->
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
  </body>
</html>