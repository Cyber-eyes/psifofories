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
	<div id="pshfos">
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
	$array=mysqli_query($connection,"SELECT description, canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20  FROM ballot WHERE name='$name1[0]' ");
	while ($row=mysqli_fetch_array($array)){
		$disc=$row['description'];
		$canditate1=$row['canditate1'];
		$count1=$row['count1'];
		$canditate2=$row['canditate2'];
		$count2=$row['count2'];
		$canditate3=$row['canditate3'];
		$count3=$row['count3'];
		$canditate4=$row['canditate4'];
		$count4=$row['count4'];
		$canditate5=$row['canditate5'];
		$count5=$row['count5'];
		$canditate6=$row['canditate6'];
		$count6=$row['count6'];
		$canditate7=$row['canditate7'];
		$count7=$row['count7'];
		$canditate8=$row['canditate8'];
		$count8=$row['count8'];
		$canditate9=$row['canditate9'];
		$count9=$row['count9'];
		$canditate10=$row['canditate10'];
		$count10=$row['count10'];
		$canditate11=$row['canditate11'];
		$count11=$row['count11'];
		$canditate12=$row['canditate12'];
		$count12=$row['count12'];
		$canditate13=$row['canditate13'];
		$count13=$row['count13'];
		$canditate14=$row['canditate14'];
		$count14=$row['count14'];
		$canditate15=$row['canditate15'];
		$count15=$row['count15'];
		$canditate16=$row['canditate16'];
		$count16=$row['count16'];
		$canditate17=$row['canditate17'];
		$count17=$row['count17'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate19=$row['canditate19'];
		$count19=$row['count19'];
		$canditate20=$row['canditate20'];
		$count20=$row['count20'];
	}
	echo $disc;
	echo "<br>";
	echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	echo "<br>";
	echo $count1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	echo "<br>";
	echo $count2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	echo "<br>";
	echo $count3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	echo "<br>";
	echo $count4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	echo "<br>";
	echo $count5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	echo $count6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	echo $count7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	echo $count8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	echo $count9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	echo $count10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	echo $count11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	echo $count12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	echo $count13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	echo $count14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	echo $count15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	echo $count16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	echo $count17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	echo $count18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	echo "<br>";
	echo $count19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	echo "<br>";
	echo $count20;
	}
	echo "<br>";
	}
	
	if ($count>=2){
	$array=mysqli_query($connection,"SELECT description, canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20  FROM ballot WHERE name='$name1[1]' ");
	while ($row=mysqli_fetch_array($array)){
		$disc=$row['description'];
		$canditate1=$row['canditate1'];
		$count1=$row['count1'];
		$canditate2=$row['canditate2'];
		$count2=$row['count2'];
		$canditate3=$row['canditate3'];
		$count3=$row['count3'];
		$canditate4=$row['canditate4'];
		$count4=$row['count4'];
		$canditate5=$row['canditate5'];
		$count5=$row['count5'];
		$canditate6=$row['canditate6'];
		$count6=$row['count6'];
		$canditate7=$row['canditate7'];
		$count7=$row['count7'];
		$canditate8=$row['canditate8'];
		$count8=$row['count8'];
		$canditate9=$row['canditate9'];
		$count9=$row['count9'];
		$canditate10=$row['canditate10'];
		$count10=$row['count10'];
		$canditate11=$row['canditate11'];
		$count11=$row['count11'];
		$canditate12=$row['canditate12'];
		$count12=$row['count12'];
		$canditate13=$row['canditate13'];
		$count13=$row['count13'];
		$canditate14=$row['canditate14'];
		$count14=$row['count14'];
		$canditate15=$row['canditate15'];
		$count15=$row['count15'];
		$canditate16=$row['canditate16'];
		$count16=$row['count16'];
		$canditate17=$row['canditate17'];
		$count17=$row['count17'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate19=$row['canditate19'];
		$count19=$row['count19'];
		$canditate20=$row['canditate20'];
		$count20=$row['count20'];
	}
	echo $disc;
	echo "<br>";
	echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	echo "<br>";
	echo $count1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	echo "<br>";
	echo $count2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	echo "<br>";
	echo $count3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	echo "<br>";
	echo $count4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	echo "<br>";
	echo $count5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	echo $count6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	echo $count7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	echo $count8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	echo $count9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	echo $count10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	echo $count11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	echo $count12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	echo $count13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	echo $count14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	echo $count15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	echo $count16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	echo $count17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	echo $count18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	echo "<br>";
	echo $count19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	echo "<br>";
	echo $count20;
	}
	echo "<br>";
	}
	
	if ($count>=3){
	$array=mysqli_query($connection,"SELECT description, canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20  FROM ballot WHERE name='$name1[2]' ");
	while ($row=mysqli_fetch_array($array)){
		$disc=$row['description'];
		$canditate1=$row['canditate1'];
		$count1=$row['count1'];
		$canditate2=$row['canditate2'];
		$count2=$row['count2'];
		$canditate3=$row['canditate3'];
		$count3=$row['count3'];
		$canditate4=$row['canditate4'];
		$count4=$row['count4'];
		$canditate5=$row['canditate5'];
		$count5=$row['count5'];
		$canditate6=$row['canditate6'];
		$count6=$row['count6'];
		$canditate7=$row['canditate7'];
		$count7=$row['count7'];
		$canditate8=$row['canditate8'];
		$count8=$row['count8'];
		$canditate9=$row['canditate9'];
		$count9=$row['count9'];
		$canditate10=$row['canditate10'];
		$count10=$row['count10'];
		$canditate11=$row['canditate11'];
		$count11=$row['count11'];
		$canditate12=$row['canditate12'];
		$count12=$row['count12'];
		$canditate13=$row['canditate13'];
		$count13=$row['count13'];
		$canditate14=$row['canditate14'];
		$count14=$row['count14'];
		$canditate15=$row['canditate15'];
		$count15=$row['count15'];
		$canditate16=$row['canditate16'];
		$count16=$row['count16'];
		$canditate17=$row['canditate17'];
		$count17=$row['count17'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate19=$row['canditate19'];
		$count19=$row['count19'];
		$canditate20=$row['canditate20'];
		$count20=$row['count20'];
	}
	echo $disc;
	echo "<br>";
	echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	echo "<br>";
	echo $count1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	echo "<br>";
	echo $count2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	echo "<br>";
	echo $count3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	echo "<br>";
	echo $count4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	echo "<br>";
	echo $count5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	echo $count6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	echo $count7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	echo $count8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	echo $count9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	echo $count10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	echo $count11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	echo $count12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	echo $count13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	echo $count14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	echo $count15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	echo $count16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	echo $count17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	echo $count18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	echo "<br>";
	echo $count19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	echo "<br>";
	echo $count20;
	}
	echo "<br>";
	}
	
	if ($count>=4){
	$array=mysqli_query($connection,"SELECT description, canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20  FROM ballot WHERE name='$name1[3]' ");
	while ($row=mysqli_fetch_array($array)){
		$disc=$row['description'];
		$canditate1=$row['canditate1'];
		$count1=$row['count1'];
		$canditate2=$row['canditate2'];
		$count2=$row['count2'];
		$canditate3=$row['canditate3'];
		$count3=$row['count3'];
		$canditate4=$row['canditate4'];
		$count4=$row['count4'];
		$canditate5=$row['canditate5'];
		$count5=$row['count5'];
		$canditate6=$row['canditate6'];
		$count6=$row['count6'];
		$canditate7=$row['canditate7'];
		$count7=$row['count7'];
		$canditate8=$row['canditate8'];
		$count8=$row['count8'];
		$canditate9=$row['canditate9'];
		$count9=$row['count9'];
		$canditate10=$row['canditate10'];
		$count10=$row['count10'];
		$canditate11=$row['canditate11'];
		$count11=$row['count11'];
		$canditate12=$row['canditate12'];
		$count12=$row['count12'];
		$canditate13=$row['canditate13'];
		$count13=$row['count13'];
		$canditate14=$row['canditate14'];
		$count14=$row['count14'];
		$canditate15=$row['canditate15'];
		$count15=$row['count15'];
		$canditate16=$row['canditate16'];
		$count16=$row['count16'];
		$canditate17=$row['canditate17'];
		$count17=$row['count17'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate19=$row['canditate19'];
		$count19=$row['count19'];
		$canditate20=$row['canditate20'];
		$count20=$row['count20'];
	}
	echo $disc;
	echo "<br>";
	echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	echo "<br>";
	echo $count1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	echo "<br>";
	echo $count2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	echo "<br>";
	echo $count3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	echo "<br>";
	echo $count4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	echo "<br>";
	echo $count5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	echo $count6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	echo $count7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	echo $count8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	echo $count9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	echo $count10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	echo $count11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	echo $count12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	echo $count13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	echo $count14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	echo $count15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	echo $count16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	echo $count17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	echo $count18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	echo "<br>";
	echo $count19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	echo "<br>";
	echo $count20;
	}
	echo "<br>";
	}
	if ($count>=5){
	$array=mysqli_query($connection,"SELECT description, canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20  FROM ballot WHERE name='$name1[4]' ");
	while ($row=mysqli_fetch_array($array)){
		$disc=$row['description'];
		$canditate1=$row['canditate1'];
		$count1=$row['count1'];
		$canditate2=$row['canditate2'];
		$count2=$row['count2'];
		$canditate3=$row['canditate3'];
		$count3=$row['count3'];
		$canditate4=$row['canditate4'];
		$count4=$row['count4'];
		$canditate5=$row['canditate5'];
		$count5=$row['count5'];
		$canditate6=$row['canditate6'];
		$count6=$row['count6'];
		$canditate7=$row['canditate7'];
		$count7=$row['count7'];
		$canditate8=$row['canditate8'];
		$count8=$row['count8'];
		$canditate9=$row['canditate9'];
		$count9=$row['count9'];
		$canditate10=$row['canditate10'];
		$count10=$row['count10'];
		$canditate11=$row['canditate11'];
		$count11=$row['count11'];
		$canditate12=$row['canditate12'];
		$count12=$row['count12'];
		$canditate13=$row['canditate13'];
		$count13=$row['count13'];
		$canditate14=$row['canditate14'];
		$count14=$row['count14'];
		$canditate15=$row['canditate15'];
		$count15=$row['count15'];
		$canditate16=$row['canditate16'];
		$count16=$row['count16'];
		$canditate17=$row['canditate17'];
		$count17=$row['count17'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate18=$row['canditate18'];
		$count18=$row['count18'];
		$canditate19=$row['canditate19'];
		$count19=$row['count19'];
		$canditate20=$row['canditate20'];
		$count20=$row['count20'];
	}
	echo $disc;
	echo "<br>";
	echo "<br>";
	if(is_null($canditate1)) {
	}else{
	echo $canditate1;
	echo "<br>";
	echo $count1;
	}
	echo "<br>";
	if(is_null($canditate2)) {
	}else{
	echo $canditate2;
	echo "<br>";
	echo $count2;
	}
	echo "<br>";
	if(is_null($canditate3)) {
	}else{
	echo $canditate3;
	echo "<br>";
	echo $count3;
	}
	echo "<br>";
	if(is_null($canditate4)) {
	}else{
	echo $canditate4;
	echo "<br>";
	echo $count4;
	}
	echo "<br>";
	if(is_null($canditate5)) {
	}else{
	echo $canditate5;
	echo "<br>";
	echo $count5;
	}
	echo "<br>";
	if(is_null($canditate6)) {
	}else{
	echo $canditate6;
	echo "<br>";
	echo $count6;
	echo "<br>";
	}
	if(is_null($canditate7)) {
	}else{
	echo $canditate7;
	echo "<br>";
	echo $count7;
	echo "<br>";
	}
	if(is_null($canditate8)) {
	}else{
	echo $canditate8;
	echo "<br>";
	echo $count8;
	echo "<br>";
	}
	if(is_null($canditate9)) {
	}else{
	echo $canditate9;
	echo "<br>";
	echo $count9;
	echo "<br>";
	}
	if(is_null($canditate10)) {
	}else{
	echo $canditate10;
	echo "<br>";
	echo $count10;
	echo "<br>";
	}
	if(is_null($canditate11)) {
	}else{
	echo $canditate11;
	echo "<br>";
	echo $count11;
	echo "<br>";
	}
	if(is_null($canditate12)) {
	}else{
	echo $canditate12;
	echo "<br>";
	echo $count12;
	echo "<br>";
	}
	if(is_null($canditate13)) {
	}else{
	echo $canditate13;
	echo "<br>";
	echo $count13;
	echo "<br>";
	}
	if(is_null($canditate14)) {
	}else{
	echo $canditate14;
	echo "<br>";
	echo $count14;
	echo "<br>";
	}
	if(is_null($canditate15)) {
	}else{
	echo $canditate15;
	echo "<br>";
	echo $count15;
	echo "<br>";
	}
	if(is_null($canditate16)) {
	}else{
	echo $canditate16;
	echo "<br>";
	echo $count16;
	echo "<br>";
	}
	if(is_null($canditate17)) {
	}else{
	echo $canditate17;
	echo "<br>";
	echo $count17;
	echo "<br>";
	}
	if(is_null($canditate18)) {
	}else{
	echo $canditate18;
	echo "<br>";
	echo $count18;
	echo "<br>";
	}
	if(is_null($canditate19)) {
	}else{
	echo $canditate19;
	echo "<br>";
	echo $count19;
	}
	echo "<br>";
	if(is_null($canditate20)) {
	}else{
	echo $canditate20;
	echo "<br>";
	echo $count20;
	}
	echo "<br>";
	}
	
	
?>
</div>
</div>
</body>
</html>