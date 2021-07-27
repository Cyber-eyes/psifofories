<!--Είσοδος χρήστη-->
<?php

/*Σύνδεση με την σελίδα connect.php*/
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Log in Page</title>
	<link rel="stylesheet" type="text/css" href="stylesheet-login.css"></link>
  </head>
  <body>
  
  <!--Menu-->
  <div class="menu">
  <a href='/login.php'>Log in</a>
  <a href='/signup.php'>Sign up</a>
  </div>
  <div class="container">
   <form id="login" action="?" method="post">
   <div class="header">
   <h3>Please Login To Vote</h3>
   </div>
   <div class="sep"></div>
	<div class="inputs">
	 <label>Όνομα</label>
	  <input type="text" name="name" value="<?php $name ?>"> <br>
	  <label>Επίθετο</label>
	  <input type="text" name="surname" value="<?php $surname ?>"> <br>
	  <label>Password</label>
	  <input type="password" name="pass" value="<?php $pass ?>"> <br>
	<input type="submit" name ="login" value="Log in">
	
	
	<!--Έλεγχος ορθότητας των στοιχείων-->
	<?php include 'login.errors.php' ?>
	</div>
	</form>
	</div>
	</body>
</html>	