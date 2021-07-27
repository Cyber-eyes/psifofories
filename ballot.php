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
	<a href='/logout.php'>Log out</a>
	</div>
	<br>
	<br>
	<div class="container">
  <div class="header">
	<form id="pshfos" action="?" method="post">
	<p>Διαλέξτε τι θέλετε να ψηφήσετε</p>
	<div class="sep"></div>
	<?php 
	$array=mysqli_query($connection,"SELECT name FROM ballot");
	$i=0;
	while ($row=mysqli_fetch_array($array)){
		$name1[$i]=$row['name'];
		$i++;
	}
	$result=mysqli_query($connection,"SELECT * FROM ballot "); 
	$count=mysqli_num_rows($result);
	if ($count>=1){
		echo "<input type=\"submit\" name=\"1\" value=\" $name1[0] \"> <br> <br>";
	}
	if ($count>=2){
		echo "<input type=\"submit\" name=\"2\" value=\" $name1[1] \"> <br> <br>";
	}
	if ($count>=3){
		echo "<input type=\"submit\" name=\"3\" value=\" $name1[2] \"> <br> <br>";
	}
	if ($count>=4){
		echo "<input type=\"submit\" name=\"4\" value=\" $name1[3] \"> <br> <br>";
	}
	if ($count>=5){
		echo "<input type=\"submit\" name=\"5\" value=\" $name1[4] \"> <br> <br>";
	}
	?>
	</p> <br>
<input type="text" name="pshf" value="<?php $pshf ?>"> <br> <br>

 
<?php	
if (isset($_POST['1'])){
	$array=mysqli_query($connection,"SELECT description, canditate1, canditate2, canditate3, canditate4, canditate5, canditate6, canditate7, canditate8, canditate9, canditate10, canditate11, canditate12, canditate13, canditate14, canditate15, canditate16, canditate17, canditate18, canditate19, canditate20 FROM ballot WHERE name='$name1[0]' ");
	while ($row=mysqli_fetch_array($array)){
		$canditate1=$row['canditate1'];
		$canditate2=$row['canditate2'];
		$canditate3=$row['canditate3'];
		$canditate4=$row['canditate4'];
		$canditate5=$row['canditate5'];
		$canditate6=$row['canditate6'];
		$canditate7=$row['canditate7'];
		$canditate8=$row['canditate8'];
		$canditate9=$row['canditate9'];
		$canditate10=$row['canditate10'];
		$canditate11=$row['canditate11'];
		$canditate12=$row['canditate12'];
		$canditate13=$row['canditate13'];
		$canditate14=$row['canditate14'];
		$canditate15=$row['canditate15'];
		$canditate16=$row['canditate16'];
		$canditate17=$row['canditate17'];
		$canditate18=$row['canditate18'];
		$canditate19=$row['canditate19'];
		$canditate20=$row['canditate20'];
		$description=$row['description'];
		echo $description;
		echo "<br>";
		echo "<br>";
		echo "<br>";
		if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	}
	echo "<br>";
		echo " Βάλτε τα με την σειρά προτίμησης σας. Η μεθοδος υπολογισμου του νικητη γίνεται συμφωνα με την μεθοδο του Borda."; 
		echo "<br>";
		echo " Ο τρόπος ψηφοφορίας είναι ο εξής: γράφετε τις προτιμήσεις σας χωρισμένες με κόμμα μεταξύ τους.Για παράδειγμα <h4>ψήφος1,ψήφος2,ψήφος3,ψήφος4,ψήφος5</h4>";
		echo "<br>";
	}
}
if (isset($_POST['2'])){
	$array=mysqli_query($connection,"SELECT description, canditate1, canditate2, canditate3, canditate4, canditate5, canditate6, canditate7, canditate8, canditate9, canditate10, canditate11, canditate12, canditate13, canditate14, canditate15, canditate16, canditate17, canditate18, canditate19, canditate20 FROM ballot WHERE name='$name1[1]' ");
	while ($row=mysqli_fetch_array($array)){
		$canditate1=$row['canditate1'];
		$canditate2=$row['canditate2'];
		$canditate3=$row['canditate3'];
		$canditate4=$row['canditate4'];
		$canditate5=$row['canditate5'];
		$canditate6=$row['canditate6'];
		$canditate7=$row['canditate7'];
		$canditate8=$row['canditate8'];
		$canditate9=$row['canditate9'];
		$canditate10=$row['canditate10'];
		$canditate11=$row['canditate11'];
		$canditate12=$row['canditate12'];
		$canditate13=$row['canditate13'];
		$canditate14=$row['canditate14'];
		$canditate15=$row['canditate15'];
		$canditate16=$row['canditate16'];
		$canditate17=$row['canditate17'];
		$canditate18=$row['canditate18'];
		$canditate19=$row['canditate19'];
		$canditate20=$row['canditate20'];
		$description=$row['description'];
		echo $description;
		echo "<br>";
		echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	}
	echo "<br>";
		echo " Βάλτε τα με την σειρά προτίμησης σας. Η μεθοδος υπολογισμου του νικητη γίνεται συμφωνα με την μεθοδο του Borda."; 
		echo "<br>";
		echo " Ο τρόπος ψηφοφορίας είναι ο εξής: γράφετε τις προτιμήσεις σας χωρισμένες με κόμμα μεταξύ τους.Για παράδειγμα <h4>ψήφος1,ψήφος2,ψήφος3,ψήφος4,ψήφος5</h4>";
		echo "<br>";
	}
}
if (isset($_POST['3'])){
	$array=mysqli_query($connection,"SELECT description, canditate1, canditate2, canditate3, canditate4, canditate5, canditate6, canditate7, canditate8, canditate9, canditate10, canditate11, canditate12, canditate13, canditate14, canditate15, canditate16, canditate17, canditate18, canditate19, canditate20 FROM ballot WHERE name='$name1[2]' ");
	while ($row=mysqli_fetch_array($array)){
		$canditate1=$row['canditate1'];
		$canditate2=$row['canditate2'];
		$canditate3=$row['canditate3'];
		$canditate4=$row['canditate4'];
		$canditate5=$row['canditate5'];
		$canditate6=$row['canditate6'];
		$canditate7=$row['canditate7'];
		$canditate8=$row['canditate8'];
		$canditate9=$row['canditate9'];
		$canditate10=$row['canditate10'];
		$canditate11=$row['canditate11'];
		$canditate12=$row['canditate12'];
		$canditate13=$row['canditate13'];
		$canditate14=$row['canditate14'];
		$canditate15=$row['canditate15'];
		$canditate16=$row['canditate16'];
		$canditate17=$row['canditate17'];
		$canditate18=$row['canditate18'];
		$canditate19=$row['canditate19'];
		$canditate20=$row['canditate20'];
		$description=$row['description'];
		echo $description;
		echo "<br>";
		echo "<br>";
		echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	}
	echo "<br>";
		echo " Βάλτε τα με την σειρά προτίμησης σας. Η μεθοδος υπολογισμου του νικητη γίνεται συμφωνα με την μεθοδο του Borda."; 
		echo "<br>";
		echo " Ο τρόπος ψηφοφορίας είναι ο εξής: γράφετε τις προτιμήσεις σας χωρισμένες με κόμμα μεταξύ τους.Για παράδειγμα <h4>ψήφος1,ψήφος2,ψήφος3,ψήφος4,ψήφος5</h4>";
		echo "<br>";
	}
}
if (isset($_POST['4'])){
	$array=mysqli_query($connection,"SELECT description, canditate1, canditate2, canditate3, canditate4, canditate5, canditate6, canditate7, canditate8, canditate9, canditate10, canditate11, canditate12, canditate13, canditate14, canditate15, canditate16, canditate17, canditate18, canditate19, canditate20 FROM ballot WHERE name='$name1[3]' ");
	while ($row=mysqli_fetch_array($array)){
		$canditate1=$row['canditate1'];
		$canditate2=$row['canditate2'];
		$canditate3=$row['canditate3'];
		$canditate4=$row['canditate4'];
		$canditate5=$row['canditate5'];
		$canditate6=$row['canditate6'];
		$canditate7=$row['canditate7'];
		$canditate8=$row['canditate8'];
		$canditate9=$row['canditate9'];
		$canditate10=$row['canditate10'];
		$canditate11=$row['canditate11'];
		$canditate12=$row['canditate12'];
		$canditate13=$row['canditate13'];
		$canditate14=$row['canditate14'];
		$canditate15=$row['canditate15'];
		$canditate16=$row['canditate16'];
		$canditate17=$row['canditate17'];
		$canditate18=$row['canditate18'];
		$canditate19=$row['canditate19'];
		$canditate20=$row['canditate20'];
		$description=$row['description'];
		echo $description;
		echo "<br>";
		echo "<br>";
		echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	}
	echo "<br>";
		echo " Βάλτε τα με την σειρά προτίμησης σας. Η μεθοδος υπολογισμου του νικητη γίνεται συμφωνα με την μεθοδο του Borda."; 
		echo "<br>";
		echo " Ο τρόπος ψηφοφορίας είναι ο εξής: γράφετε τις προτιμήσεις σας χωρισμένες με κόμμα μεταξύ τους.Για παράδειγμα <h4>ψήφος1,ψήφος2,ψήφος3,ψήφος4,ψήφος5</h4>";
		echo "<br>";
	}
}
if (isset($_POST['5'])){
	$array=mysqli_query($connection,"SELECT description, canditate1, canditate2, canditate3, canditate4, canditate5, canditate6, canditate7, canditate8, canditate9, canditate10, canditate11, canditate12, canditate13, canditate14, canditate15, canditate16, canditate17, canditate18, canditate19, canditate20 FROM ballot WHERE name='$name1[4]' ");
	while ($row=mysqli_fetch_array($array)){
		$canditate1=$row['canditate1'];
		$canditate2=$row['canditate2'];
		$canditate3=$row['canditate3'];
		$canditate4=$row['canditate4'];
		$canditate5=$row['canditate5'];
		$canditate6=$row['canditate6'];
		$canditate7=$row['canditate7'];
		$canditate8=$row['canditate8'];
		$canditate9=$row['canditate9'];
		$canditate10=$row['canditate10'];
		$canditate11=$row['canditate11'];
		$canditate12=$row['canditate12'];
		$canditate13=$row['canditate13'];
		$canditate14=$row['canditate14'];
		$canditate15=$row['canditate15'];
		$canditate16=$row['canditate16'];
		$canditate17=$row['canditate17'];
		$canditate18=$row['canditate18'];
		$canditate19=$row['canditate19'];
		$canditate20=$row['canditate20'];
		$description=$row['description'];
		echo $description;
		echo "<br>";
		echo "<br>";
		echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	}
	echo "<br>";
		echo " Βάλτε τα με την σειρά προτίμησης σας. Η μεθοδος υπολογισμου του νικητη γίνεται συμφωνα με την μεθοδο του Borda."; 
		echo "<br>";
		echo " Ο τρόπος ψηφοφορίας είναι ο εξής: γράφετε τις προτιμήσεις σας χωρισμένες με κόμμα μεταξύ τους.Για παράδειγμα <h4>ψήφος1,ψήφος2,ψήφος3,ψήφος4,ψήφος5</h4>";
		echo "<br>";
	}
}
if (isset($_POST['send'])){
	include 'encrypt.php';
		
	header('Location: home2.php');
}
?>
    <br> <br>
	<input type="submit" name="send" value="Αποστολή">
</form>
</div>
</div>
</body>
</html>