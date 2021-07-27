<!--Εγγραφή χρήστη-->
<?php

/*Σύνδεση με την σελίδα connect.php*/
include_once 'connection.php'; 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign up Page</title>
	<link rel="stylesheet" type="text/css" href="stylesheet-signup.css"></link>
  </head>
  <body>
  
  <!--Menu-->
  <div class="menu">
  <a href='/login.php'>Log in</a>
  <a href='/signup.php'>Sign up</a>
  </div>
  <div class="container">
   <form id="signup" action="?" method="post">
   <div class="header">
    <h3>Please Register To Participate for Voting </h3>
	</div>
	 <div class="sep"></div>
	<div class="inputs">
   <!--Είσοδος στοιχείων-->
	  <label>Όνομα</label>
	  <input type="text" name="user" value="<?php $user ?>"> <br>
	  <label>Επώνυμο</label>
	  <input type="text" name="surname" value="<?php $surname ?>"> <br>
	  <label>Password</label>
	  <input type="password" name="pass" value="<?php $pass ?>"> <br>
	  <label>Confirm Password</label>
	  <input type="password" name="conpass" value="<?php $conpass ?>"> <br>
	  <label>Email</label>
	  <input type="text" name="email" value="<?php $email ?>"> <br>
	  <label>Ημερομηνία Γέννησης</label>
	  <input type="date" name="birthday" value="<?php $birthday ?>"> <br>
	  <input type="submit" name ="signup" value="Sign up">
	  <!--Έλεγχος ορθότητας του password-->
	  <?php include 'signup.errors.php' ?>
	 </div>
	</form>
	</div>
	</body>
</html>	