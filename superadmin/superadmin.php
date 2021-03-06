<!--SuperAdmin homepage-->
<!DOCTYPE html>
<html>

<head>
<title>Superadmin Homepage</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
  <li><a href="../users/quicklinks.html">Quick Links</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a class="active" href="../login/logout.php">Logout</a></li>
        </ul>

        <?php
        session_start();
          //creates active connection to db
          require '../database/connect_db.php';

          if(isset($_SESSION['logged_in'])){
            echo 'Welcome to Limbo!';
          }

          else{
            echo 'You do not have permission to login. Please contact an administrator.';
            header("Location: ../login/login.php");
          }

        ?>

        <h2>Add an Admin</h2>
        <p>Please fill out the fields below to add an admin account.</p>
        <form method="POST" action="accountregister.php">
        Email: <input type="text" name="email" required>

        Username: <input type="text" name="userName" required>
        <br>
      </br>
        First name: <input type="text" name="f_name" required>

        Last name: <input type="text" name="l_name" required>
        <br>
      </br>
        Password: <input type="password" name="password" required>

        Confirm password: <input type="password" name="c_password" required>
        <input type="submit" value="Register"></form>

        <!--Link for reporting a found item-->
        <p>Report a found item <a href="<?php echo '../users/found.php'; ?>">here.</a></p>
        <!--Link for reporting a lost item-->
        <p>Report a lost item <a href="<?php echo '../users/lost.php'; ?>">here.</a></p>
        <!--Link for deleting an entry from foundItems_t-->
        <p>Delete a found item entry <a href = "<?php echo 'founditem.php'; ?>">here.</a></p>
        <!--Link for deleting an entry from lostItems_t-->
        <p>Delete a lost item entry <a href = "<?php echo 'lostitem.php'; ?>">here.</a></p>


</body>
</html>
