<!--Checks whether or not user has already registered-->
<!--Login form redirects to this page-->
<?php
  session_start();
  require 'connect_db.php';

      if(!isset($_SESSION['LoggedIn']) || ($_SESSION['LoggedIn'] == false){
      header("Location: login.php");
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

      if(isset($email, $password) == true){
          $_SESSION['LoggedIn'] == true;
          header("Location: account.php");
        }

    $firstName = getLogin($_POST['f_name']);
    $lastName = getLogin($_POST['l_name']);
    $email = getLogin($_POST['email']);
    $password = getLogin($_POST['password']);
    $password = $_POST['password']);
    $hash = password_hash( $password , PASSWORD_DEFAULT );

    $checkAcc = "SELECT email, password FROM users";
    if (!$checkAcc == is_null){
      $CreateAccount = "INSERT INTO 'users_t'(f_name, l_name, email, password, adminPriv)
                        VALUES('$firstName','$lastName', '$email','$hash', 0)";
    }


    $email = $_POST["email"];
      echo "Hello " . $email;

    /*
    // getUserInfo would be changed to whatever the script maria makes to get the users info from the page
    $firstName = getLogin($_POST['f_name']);
    $lastName = getLogin($_POST['l_name']);




    //Insert function that inserts email, f_name, l_name,
//assumes the user is not an admin
    $makeAccount = "INSERT INTO 'users_t'(f_name, l_name, email, password, adminPriv)
                      VALUES('$firstName','$lastName', '$email','$hash', 0)";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have registered successfully!';
      }
      else
          echo 'Oops somethings went wrong';
*/
//General ideas for hashing/verifying the password with the database
/*

    When a user registers on your site and first presents a password, you hash it, something like this.


  // you then store the username and the hash in your dbms.
  // the column holding the hash should be VARCHAR(255) for future-proofing
  // NEVER! store the plain text (unhashed) password in your database

    When a user tries to log in, you do a query like this:

    SELECT log_password FROM log_user WHERE log_username = TheUsernameGiven

    You then put the retrieved password into a column named $hash.

    You then use php's password_verify() function to check whether the password your would-be user just gave you matches the password in your database.

    Finally, you check whether the user's password needs to be rehashed, because the method you used previously to hash it has become obsolete.

 $password = $_POST['password']);
 $valid = password_verify ( $password, $hash );
 if ( $valid ) {
   if ( password_needs_rehash ( $hash, PASSWORD_DEFAULT ) ) {
     $newHash = password_hash( $password, PASSWORD_DEFAULT );
     /* UPDATE the user's row in `log_user` to store $newHash */
   /*}
   /* log the user in, have fun! */
/* }/*
 else {
  /* tell the would-be user the username/password combo is invalid */
/*}



*/
//Needs a query that checks whether account exists or not, also to display first + last name from database


?>
