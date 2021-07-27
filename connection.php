<!--Σύνδεση της βάσης-->
<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="ballotdb";
  
  $connection=mysqli_connect($servername,$username,$password,$db);
  if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
	}
	
?>