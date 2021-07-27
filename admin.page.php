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
$i=1;
?>
</div>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
	 <link rel="stylesheet" type="text/css" href="stylesheet-ballot.css"></link>
  </head>
  <body>
  <div class="menu">
  <a href='/logout.php'>Log out</a>
  </div>
  <br>
  <br>
  	<div class="container">
  <div class="header">
  <form id="start" action="?" method="post">
  <h1>Επέλεξε ψηφοφορία<h1>
  <div class="sep"></div>
   <label>Δημιουργία νέας ψηφοφορίας</label>
	  <input type="text" name="name1" value="<?php $name1 ?>"> <br>
   <label>Περιγραφή ψηφοφορίας</label>
	  <input type="text" name="name2" value="<?php $name2 ?>"> <br>
  <label>Επιλογή υποψηφίων</label><br>
	  <input type="text" name="name3" value="<?php $name3 ?>"> <br> <br>
	  <input type="submit" name="submit"> <br> <br>
	  <input type="submit" name="erase" value="Καθαρισμός ψηφοφορίας">
	  </div>
   </form>
   </div>
<?php

if (isset($_POST["submit"])) {
	$name1=$_POST['name1'];
	$name2=$_POST['name2'];
	$name3=$_POST['name3'];
	$canditates=explode(",", $name3);
	$count1=0;
	$count2=0;
	$count3=0;
	$count4=0;
	$count5=0;
	$count6=0;
	$count7=0;
	$count8=0;
	$count9=0;
	$count10=0;
	$count11=0;
	$count12=0;
	$count13=0;
	$count14=0;
	$count15=0;
	$count16=0;
	$count17=0;
	$count18=0;
	$count19=0;
	$count20=0;
	
	$sql = "INSERT INTO ballot (name, description, canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4 , canditate5 , count5, canditate6 , count6 , canditate7 , count7 , canditate8 , count8 , canditate9 , count9 , canditate10 , count10 , canditate11 , count11 , canditate12 , count12 , canditate13 , count13 , canditate14 , count14 , canditate15 , count15 , canditate16 , count16 , canditate17 , count17 , canditate18 , count18 , canditate19 , count19 , canditate20 , count20) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt= $connection->prepare($sql);
	$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssss", $name1, $name2, $canditates[0], $count1, $canditates[1], $count2, $canditates[2], $count3, $canditates[3], $count4, $canditates[4], $count5, $canditates[5], $count6, $canditates[6], $count7, $canditates[7], $count8, $canditates[8], $count9, $canditates[9], $count10, $canditates[10], $count11, $canditates[11], $count12, $canditates[12], $count13, $canditates[13], $count14, $canditates[14], $count15, $canditates[15], $count16, $canditates[16], $count17, $canditates[17], $count18, $canditates[18], $count19, $canditates[19], $count20);
	$stmt->execute();
	
	header('Location: home.php');
}

if (isset($_POST["erase"])) {
	$query = "DELETE FROM ballot ";
	$sql=mysqli_query($connection, $query);
}
?>
   </body>
   </html>