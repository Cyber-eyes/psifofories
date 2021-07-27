<?php

/*Σύνδεση με την σελίδα connect.php*/
include_once 'connection.php';
echo "Connected Successfully";
echo "<br>";

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Log in Page</title>
  </head>
  <body> 
   <h1>Please Login</h1>
   <form action="?" method="post">
	 <label>Όνομα</label>
	  <input type="text" name="name" value="<?php $name ?>"> <br>
	  <label>Επίθετο</label>
	  <input type="text" name="surname" value="<?php $surname ?>"> <br>
	  <label>Password</label>
	  <input type="password" name="pass" value="<?php $pass ?>"> <br>
	<input type="submit" name ="loginad" value="Log in">
	<br>
	  <?php include 'admin.login.errors.php' ?> 
    </form>
 </body>
</html>