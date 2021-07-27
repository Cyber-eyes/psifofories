<?php

/*Σύνδεση με την σελίδα connect.php*/
include_once 'connection.php';
?>
<div class="menu">
<?php
if(isset($_COOKIE['surname'])){
	echo "Welcome " . $_COOKIE['surname'];	
	echo "<br>";
}
?>
</div>

<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
	<link rel="stylesheet" type="text/css" href="stylesheet-home.css"></link>
  </head>
  <body>
  <div class="menu">
  <a href='/logout.php'>Log out</a>
   <a href='/login.php'>Log in</a>
  <a href='/signup.php'>Sign up</a>
  </div>
  <div class="container">
  <div class="header">
  <form id="home" action="?" method="post">
   <h1>Welcome</h1>
    <div class="sep"></div>
  <p>Για να ψηφίσεις πάτα εδώ: </p>
   <input type="submit" name ="vote" value="Vote">
   <p>Για να ξεκινήσεις καινουρια ψηφοφορία πάτα εδώ: </p>
   <input type="submit" name ="admin" value="Create poll">
   <p>Για να δεις τα αποτελέσματα πάτα εδώ: </p>
   <input type="submit" name ="results" value="Results">
   </form>
   </div>
   </div>
   <?php

if (isset($_POST["vote"])){
	header('Location: ballot.php');
}
if (isset($_POST["admin"])){
	header('Location: admin.page.php');
}
if (isset($_POST["results"])){
	header('Location: results.php');
}

?>
	 
  </body>
</html>