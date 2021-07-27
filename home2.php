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
       <title>Home Page</title>
	   <link rel="stylesheet" type="text/css" href="stylesheet-ballot.css"></link>
    </head>
    <body>
	<div class="menu">
	<a href='/home.php'>Home</a>
	<a href='/logout.php'>Log out</a>
	</div>
	<br>
	<br>
	<div class="container">
<?php
  echo "Η ψηφος σταλθηκε end-to-end encypted συμφωνα με το πρωτοκολλο RSA και καταχωρηθηκε στο server <br>";
?>
</div>
</html>