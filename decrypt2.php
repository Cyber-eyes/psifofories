<?php

/*Σύνδεση με την σελίδα connect.php*/
include_once 'connection.php';

error_reporting(0);

	session_start();
	$enc=$_SESSION['enc'];
	$pshf=$_SESSION['pshf'];
	$b=$_SESSION['b'];
	
	$dec="";

	//decrypt
		for ($i=0;$i<strlen($pshf);$i++){
			$m=ord($enc[$i]);
			if($m<=119){
				$dec=$dec.chr(decRSA($m));
			}else{
				$dec=$dec.$enc[$i];
			}
		}
	
	$c=decRSA($b);

    
	$epilogh = explode(",", $dec);
	$arrlen=count($epilogh);
	//echo $arrlen;
	
	$array=mysqli_query($connection,"SELECT name FROM ballot");
	$i=0;
	while ($row=mysqli_fetch_array($array)){
		$name1[$i]=$row['name'];
		$i++;
	}

	$result=mysqli_query($connection,"SELECT * FROM ballot "); 
	$count=mysqli_num_rows($result);
	
	
	if ($count>=1){
		$array=mysqli_query($connection,"SELECT canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20 FROM ballot WHERE name='$name1[0]'");
			while ($row=mysqli_fetch_array($array)){
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
				$canditate18=$row['canditate19'];
				$count18=$row['count18'];
				$canditate19=$row['canditate19'];
				$count19=$row['count19'];
				$canditate20=$row['canditate20'];
				$count20=$row['count20'];
			}
			
			$i=0;
		if(is_null($canditate1)) {
			$i+=1;
		}
		if(is_null($canditate2)) {
			$i+=1;
		}
		if(is_null($canditate3)) {
			$i+=1;
		}
		if(is_null($canditate4)) {
			$i+=1;;
		}
		if(is_null($canditate5)) {
			$i+=1;
		}
		if(is_null($canditate6)) {
			$i+=1;
		}
		if(is_null($canditate7)) {
			$i+=1;
		}
		if(is_null($canditate8)) {
			$i+=1;
		}
		if(is_null($canditate9)) {
			$i+=1;
		}
		if(is_null($canditate10)) {
			$i+=1;
		}
		if(is_null($canditate11)) {
			$i+=1;
		}
		if(is_null($canditate12)) {
			$i+=1;
		}
		if(is_null($canditate13)) {
			$i+=1;
		}
		if(is_null($canditate14)) {
			$i+=1;
		}
		if(is_null($canditate15)) {
			$i+=1;
		}
		if(is_null($canditate16)) {
			$i+=1;
		}
		if(is_null($canditate17)) {
			$i+=1;
		}
		if(is_null($canditate18)) {
			$i+=1;
		}
		if(is_null($canditate19)) {
			$i+=1;
		}
		if(is_null($canditate20)) {
			$i+=1;
		}
		$i2=20-$i;
				
	if ($i2==2){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=1;
			}else if($epilogh[0]==$canditate2){
				$count2+=1;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=0;
			}else if($epilogh[1]==$canditate2){
				$count2+=0;
			}
		}
	}
	if ($i2==3){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=2;
			}else if($epilogh[0]==$canditate2){
				$count2+=2;
			}else if($epilogh[0]==$canditate3){
				$count3+=2;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=1;
			}else if($epilogh[1]==$canditate2){
				$count2+=1;
			}else if($epilogh[1]==$canditate3){
				$count3+=1;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=0;
			}else if($epilogh[2]==$canditate2){
				$count2+=0;
			}else if($epilogh[2]==$canditate3){
				$count3+=0;
			}
		}
	}
	if ($i2==4){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=3;
			}else if($epilogh[0]==$canditate2){
				$count2+=3;
			}else if($epilogh[0]==$canditate3){
				$count3+=3;
			}else if($epilogh[0]==$canditate4){
				$count4+=3;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=2;
			}else if($epilogh[1]==$canditate2){
				$count2+=2;
			}else if($epilogh[1]==$canditate3){
				$count3+=2;
			}else if($epilogh[1]==$canditate4){
				$count4+=2;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=1;
			}else if($epilogh[2]==$canditate2){
				$count2+=1;
			}else if($epilogh[2]==$canditate3){
				$count3+=1;
			}else if($epilogh[2]==$canditate4){
				$count4+=1;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=0;
			}else if($epilogh[3]==$canditate2){
				$count2+=0;
			}else if($epilogh[3]==$canditate3){
				$count3+=0;
			}else if($epilogh[3]==$canditate4){
				$count4+=0;
			}
		}
	}
	if ($i2==5){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=4;
			}else if($epilogh[0]==$canditate2){
				$count2+=4;
			}else if($epilogh[0]==$canditate3){
				$count3+=4;
			}else if($epilogh[0]==$canditate4){
				$count4+=4;
			}else if($epilogh[0]==$canditate5){
				$count5+=4;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=3;
			}else if($epilogh[1]==$canditate2){
				$count2+=3;
			}else if($epilogh[1]==$canditate3){
				$count3+=3;
			}else if($epilogh[1]==$canditate4){
				$count4+=3;
			}else if($epilogh[1]==$canditate5){
				$count5+=3;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=2;
			}else if($epilogh[2]==$canditate2){
				$count2+=2;
			}else if($epilogh[2]==$canditate3){
				$count3+=2;
			}else if($epilogh[2]==$canditate4){
				$count4+=2;
			}else if($epilogh[2]==$canditate5){
				$count5+=2;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=1;
			}else if($epilogh[3]==$canditate2){
				$count2+=1;
			}else if($epilogh[3]==$canditate3){
				$count3+=1;
			}else if($epilogh[3]==$canditate4){
				$count4+=1;
			}else if($epilogh[3]==$canditate5){
				$count5+=1;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=0;
			}else if($epilogh[4]==$canditate2){
				$count2+=0;
			}else if($epilogh[4]==$canditate3){
				$count3+=0;
			}else if($epilogh[4]==$canditate4){
				$count4+=0;
			}else if($epilogh[4]==$canditate5){
				$count5+=0;	
			}
		}
	}
	if ($i2==6){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=5;
			}else if($epilogh[0]==$canditate2){
				$count2+=5;
			}else if($epilogh[0]==$canditate3){
				$count3+=5;
			}else if($epilogh[0]==$canditate4){
				$count4+=5;
			}else if($epilogh[0]==$canditate5){
				$count5+=5;
			}else if($epilogh[0]==$canditate6){
				$count6+=5;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=4;
			}else if($epilogh[1]==$canditate2){
				$count2+=4;
			}else if($epilogh[1]==$canditate3){
				$count3+=4;
			}else if($epilogh[1]==$canditate4){
				$count4+=4;
			}else if($epilogh[1]==$canditate5){
				$count5+=4;
			}else if($epilogh[1]==$canditate6){
				$count6+=4;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=3;
			}else if($epilogh[2]==$canditate2){
				$count2+=3;
			}else if($epilogh[2]==$canditate3){
				$count3+=3;
			}else if($epilogh[2]==$canditate4){
				$count4+=3;
			}else if($epilogh[2]==$canditate5){
				$count5+=3;
			}else if($epilogh[2]==$canditate6){
				$count6+=3;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=2;
			}else if($epilogh[3]==$canditate2){
				$count2+=2;
			}else if($epilogh[3]==$canditate3){
				$count3+=2;
			}else if($epilogh[3]==$canditate4){
				$count4+=2;
			}else if($epilogh[3]==$canditate5){
				$count5+=2;
			}else if($epilogh[3]==$canditate6){
				$count6+=2;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=1;
			}else if($epilogh[4]==$canditate2){
				$count2+=1;
			}else if($epilogh[4]==$canditate3){
				$count3+=1;
			}else if($epilogh[4]==$canditate4){
				$count4+=1;
			}else if($epilogh[4]==$canditate5){
				$count5+=1;	
			}else if($epilogh[4]==$canditate6){
				$count6+=1;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=0;
			}else if($epilogh[5]==$canditate2){
				$count2+=0;
			}else if($epilogh[5]==$canditate3){
				$count3+=0;
			}else if($epilogh[5]==$canditate4){
				$count4+=0;
			}else if($epilogh[5]==$canditate5){
				$count5+=0;	
			}else if($epilogh[5]==$canditate6){
				$count6+=0;	
			}
		}
	}
	if ($i2==7){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=6;
			}else if($epilogh[0]==$canditate2){
				$count2+=6;
			}else if($epilogh[0]==$canditate3){
				$count3+=6;
			}else if($epilogh[0]==$canditate4){
				$count4+=6;
			}else if($epilogh[0]==$canditate5){
				$count5+=6;
			}else if($epilogh[0]==$canditate6){
				$count6+=6;
			}else if($epilogh[0]==$canditate7){
				$count7+=6;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=5;
			}else if($epilogh[1]==$canditate2){
				$count2+=5;
			}else if($epilogh[1]==$canditate3){
				$count3+=5;
			}else if($epilogh[1]==$canditate4){
				$count4+=5;
			}else if($epilogh[1]==$canditate5){
				$count5+=5;
			}else if($epilogh[1]==$canditate6){
				$count6+=5;
			}else if($epilogh[1]==$canditate7){
				$count7+=5;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=4;
			}else if($epilogh[2]==$canditate2){
				$count2+=4;
			}else if($epilogh[2]==$canditate3){
				$count3+=4;
			}else if($epilogh[2]==$canditate4){
				$count4+=4;
			}else if($epilogh[2]==$canditate5){
				$count5+=4;
			}else if($epilogh[2]==$canditate6){
				$count6+=4;
			}else if($epilogh[2]==$canditate7){
				$count7+=4;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=3;
			}else if($epilogh[3]==$canditate2){
				$count2+=3;
			}else if($epilogh[3]==$canditate3){
				$count3+=3;
			}else if($epilogh[3]==$canditate4){
				$count4+=3;
			}else if($epilogh[3]==$canditate5){
				$count5+=3;
			}else if($epilogh[3]==$canditate6){
				$count6+=3;
			}else if($epilogh[3]==$canditate7){
				$count7+=3;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=2;
			}else if($epilogh[4]==$canditate2){
				$count2+=2;
			}else if($epilogh[4]==$canditate3){
				$count3+=2;
			}else if($epilogh[4]==$canditate4){
				$count4+=2;
			}else if($epilogh[4]==$canditate5){
				$count5+=2;	
			}else if($epilogh[4]==$canditate6){
				$count6+=2;
			}else if($epilogh[4]==$canditate7){
				$count7+=2;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=1;
			}else if($epilogh[5]==$canditate2){
				$count2+=1;
			}else if($epilogh[5]==$canditate3){
				$count3+=1;
			}else if($epilogh[5]==$canditate4){
				$count4+=1;
			}else if($epilogh[5]==$canditate5){
				$count5+=1;	
			}else if($epilogh[5]==$canditate6){
				$count6+=1;	
			}else if($epilogh[5]==$canditate7){
				$count7+=1;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=0;
			}else if($epilogh[6]==$canditate2){
				$count2+=0;
			}else if($epilogh[6]==$canditate3){
				$count3+=0;
			}else if($epilogh[6]==$canditate4){
				$count4+=0;
			}else if($epilogh[6]==$canditate5){
				$count5+=0;	
			}else if($epilogh[6]==$canditate6){
				$count6+=0;	
			}else if($epilogh[6]==$canditate7){
				$count7+=0;	
			}
		}
	}
	if ($i2==8){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=7;
			}else if($epilogh[0]==$canditate2){
				$count2+=7;
			}else if($epilogh[0]==$canditate3){
				$count3+=7;
			}else if($epilogh[0]==$canditate4){
				$count4+=7;
			}else if($epilogh[0]==$canditate5){
				$count5+=7;
			}else if($epilogh[0]==$canditate6){
				$count6+=7;
			}else if($epilogh[0]==$canditate7){
				$count7+=7;
			}else if($epilogh[0]==$canditate8){
				$count8+=7;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=6;
			}else if($epilogh[1]==$canditate2){
				$count2+=6;
			}else if($epilogh[1]==$canditate3){
				$count3+=6;
			}else if($epilogh[1]==$canditate4){
				$count4+=6;
			}else if($epilogh[1]==$canditate5){
				$count5+=6;
			}else if($epilogh[1]==$canditate6){
				$count6+=6;
			}else if($epilogh[1]==$canditate7){
				$count7+=6;
			}else if($epilogh[1]==$canditate8){
				$count8+=6;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=5;
			}else if($epilogh[2]==$canditate2){
				$count2+=5;
			}else if($epilogh[2]==$canditate3){
				$count3+=5;
			}else if($epilogh[2]==$canditate4){
				$count4+=5;
			}else if($epilogh[2]==$canditate5){
				$count5+=5;
			}else if($epilogh[2]==$canditate6){
				$count6+=5;
			}else if($epilogh[2]==$canditate7){
				$count7+=5;
			}else if($epilogh[2]==$canditate8){
				$count8+=5;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=4;
			}else if($epilogh[3]==$canditate2){
				$count2+=4;
			}else if($epilogh[3]==$canditate3){
				$count3+=4;
			}else if($epilogh[3]==$canditate4){
				$count4+=4;
			}else if($epilogh[3]==$canditate5){
				$count5+=4;
			}else if($epilogh[3]==$canditate6){
				$count6+=4;
			}else if($epilogh[3]==$canditate7){
				$count7+=4;
			}else if($epilogh[3]==$canditate8){
				$count8+=4;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=3;
			}else if($epilogh[4]==$canditate2){
				$count2+=3;
			}else if($epilogh[4]==$canditate3){
				$count3+=3;
			}else if($epilogh[4]==$canditate4){
				$count4+=3;
			}else if($epilogh[4]==$canditate5){
				$count5+=3;	
			}else if($epilogh[4]==$canditate6){
				$count6+=3;
			}else if($epilogh[4]==$canditate7){
				$count7+=3;
			}else if($epilogh[4]==$canditate8){
				$count8+=3;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=2;
			}else if($epilogh[5]==$canditate2){
				$count2+=2;
			}else if($epilogh[5]==$canditate3){
				$count3+=2;
			}else if($epilogh[5]==$canditate4){
				$count4+=2;
			}else if($epilogh[5]==$canditate5){
				$count5+=2;	
			}else if($epilogh[5]==$canditate6){
				$count6+=2;	
			}else if($epilogh[5]==$canditate7){
				$count7+=2;
			}else if($epilogh[5]==$canditate8){
				$count8+=2;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=1;
			}else if($epilogh[6]==$canditate2){
				$count2+=1;
			}else if($epilogh[6]==$canditate3){
				$count3+=1;
			}else if($epilogh[6]==$canditate4){
				$count4+=1;
			}else if($epilogh[6]==$canditate5){
				$count5+=1;	
			}else if($epilogh[6]==$canditate6){
				$count6+=1;	
			}else if($epilogh[6]==$canditate7){
				$count7+=1;	
			}else if($epilogh[6]==$canditate8){
				$count8+=1;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=0;
			}else if($epilogh[7]==$canditate2){
				$count2+=0;
			}else if($epilogh[7]==$canditate3){
				$count3+=0;
			}else if($epilogh[7]==$canditate4){
				$count4+=0;
			}else if($epilogh[7]==$canditate5){
				$count5+=0;	
			}else if($epilogh[7]==$canditate6){
				$count6+=0;	
			}else if($epilogh[7]==$canditate7){
				$count7+=0;	
			}else if($epilogh[7]==$canditate8){
				$count8+=0;	
			}
		}
	}
	if ($i2==9){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=8;
			}else if($epilogh[0]==$canditate2){
				$count2+=8;
			}else if($epilogh[0]==$canditate3){
				$count3+=8;
			}else if($epilogh[0]==$canditate4){
				$count4+=8;
			}else if($epilogh[0]==$canditate5){
				$count5+=8;
			}else if($epilogh[0]==$canditate6){
				$count6+=8;
			}else if($epilogh[0]==$canditate7){
				$count7+=8;
			}else if($epilogh[0]==$canditate8){
				$count8+=8;
			}else if($epilogh[0]==$canditate9){
				$count9+=8;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=7;
			}else if($epilogh[1]==$canditate2){
				$count2+=7;
			}else if($epilogh[1]==$canditate3){
				$count3+=7;
			}else if($epilogh[1]==$canditate4){
				$count4+=7;
			}else if($epilogh[1]==$canditate5){
				$count5+=7;
			}else if($epilogh[1]==$canditate6){
				$count6+=7;
			}else if($epilogh[1]==$canditate7){
				$count7+=7;
			}else if($epilogh[1]==$canditate8){
				$count8+=7;
			}else if($epilogh[1]==$canditate9){
				$count9+=7;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=6;
			}else if($epilogh[2]==$canditate2){
				$count2+=6;
			}else if($epilogh[2]==$canditate3){
				$count3+=6;
			}else if($epilogh[2]==$canditate4){
				$count4+=6;
			}else if($epilogh[2]==$canditate5){
				$count5+=6;
			}else if($epilogh[2]==$canditate6){
				$count6+=6;
			}else if($epilogh[2]==$canditate7){
				$count7+=6;
			}else if($epilogh[2]==$canditate8){
				$count8+=6;
			}else if($epilogh[2]==$canditate9){
				$count9+=6;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=5;
			}else if($epilogh[3]==$canditate2){
				$count2+=5;
			}else if($epilogh[3]==$canditate3){
				$count3+=5;
			}else if($epilogh[3]==$canditate4){
				$count4+=5;
			}else if($epilogh[3]==$canditate5){
				$count5+=5;
			}else if($epilogh[3]==$canditate6){
				$count6+=5;
			}else if($epilogh[3]==$canditate7){
				$count7+=5;
			}else if($epilogh[3]==$canditate8){
				$count8+=5;
			}else if($epilogh[3]==$canditate9){
				$count9+=5;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=4;
			}else if($epilogh[4]==$canditate2){
				$count2+=4;
			}else if($epilogh[4]==$canditate3){
				$count3+=4;
			}else if($epilogh[4]==$canditate4){
				$count4+=4;
			}else if($epilogh[4]==$canditate5){
				$count5+=4;	
			}else if($epilogh[4]==$canditate6){
				$count6+=4;
			}else if($epilogh[4]==$canditate7){
				$count7+=4;
			}else if($epilogh[4]==$canditate8){
				$count8+=4;
			}else if($epilogh[4]==$canditate9){
				$count9+=4;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=3;
			}else if($epilogh[5]==$canditate2){
				$count2+=3;
			}else if($epilogh[5]==$canditate3){
				$count3+=3;
			}else if($epilogh[5]==$canditate4){
				$count4+=3;
			}else if($epilogh[5]==$canditate5){
				$count5+=3;	
			}else if($epilogh[5]==$canditate6){
				$count6+=3;	
			}else if($epilogh[5]==$canditate7){
				$count7+=3;
			}else if($epilogh[5]==$canditate8){
				$count8+=3;
			}else if($epilogh[5]==$canditate9){
				$count9+=3;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=2;
			}else if($epilogh[6]==$canditate2){
				$count2+=2;
			}else if($epilogh[6]==$canditate3){
				$count3+=2;
			}else if($epilogh[6]==$canditate4){
				$count4+=2;
			}else if($epilogh[6]==$canditate5){
				$count5+=2;	
			}else if($epilogh[6]==$canditate6){
				$count6+=2;	
			}else if($epilogh[6]==$canditate7){
				$count7+=2;	
			}else if($epilogh[6]==$canditate8){
				$count8+=2;
			}else if($epilogh[6]==$canditate9){
				$count9+=2;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=1;
			}else if($epilogh[7]==$canditate2){
				$count2+=1;
			}else if($epilogh[7]==$canditate3){
				$count3+=1;
			}else if($epilogh[7]==$canditate4){
				$count4+=1;
			}else if($epilogh[7]==$canditate5){
				$count5+=1;	
			}else if($epilogh[7]==$canditate6){
				$count6+=1;	
			}else if($epilogh[7]==$canditate7){
				$count7+=1;	
			}else if($epilogh[7]==$canditate8){
				$count8+=1;	
			}else if($epilogh[7]==$canditate9){
				$count9+=1;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=0;
			}else if($epilogh[8]==$canditate2){
				$count2+=0;
			}else if($epilogh[8]==$canditate3){
				$count3+=0;
			}else if($epilogh[8]==$canditate4){
				$count4+=0;
			}else if($epilogh[8]==$canditate5){
				$count5+=0;	
			}else if($epilogh[8]==$canditate6){
				$count6+=0;	
			}else if($epilogh[8]==$canditate7){
				$count7+=0;	
			}else if($epilogh[8]==$canditate8){
				$count8+=0;	
			}else if($epilogh[8]==$canditate9){
				$count9+=0;	
			}
		}
	}
	if ($i2==10){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=9;
			}else if($epilogh[0]==$canditate2){
				$count2+=9;
			}else if($epilogh[0]==$canditate3){
				$count3+=9;
			}else if($epilogh[0]==$canditate4){
				$count4+=9;
			}else if($epilogh[0]==$canditate5){
				$count5+=9;
			}else if($epilogh[0]==$canditate6){
				$count6+=9;
			}else if($epilogh[0]==$canditate7){
				$count7+=9;
			}else if($epilogh[0]==$canditate8){
				$count8+=9;
			}else if($epilogh[0]==$canditate9){
				$count9+=9;
			}else if($epilogh[0]==$canditate10){
				$count10+=9;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=8;
			}else if($epilogh[1]==$canditate2){
				$count2+=8;
			}else if($epilogh[1]==$canditate3){
				$count3+=8;
			}else if($epilogh[1]==$canditate4){
				$count4+=8;
			}else if($epilogh[1]==$canditate5){
				$count5+=8;
			}else if($epilogh[1]==$canditate6){
				$count6+=8;
			}else if($epilogh[1]==$canditate7){
				$count7+=8;
			}else if($epilogh[1]==$canditate8){
				$count8+=8;
			}else if($epilogh[1]==$canditate9){
				$count9+=8;
			}else if($epilogh[1]==$canditate10){
				$count10+=8;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=7;
			}else if($epilogh[2]==$canditate2){
				$count2+=7;
			}else if($epilogh[2]==$canditate3){
				$count3+=7;
			}else if($epilogh[2]==$canditate4){
				$count4+=7;
			}else if($epilogh[2]==$canditate5){
				$count5+=7;
			}else if($epilogh[2]==$canditate6){
				$count6+=7;
			}else if($epilogh[2]==$canditate7){
				$count7+=7;
			}else if($epilogh[2]==$canditate8){
				$count8+=7;
			}else if($epilogh[2]==$canditate9){
				$count9+=7;
			}else if($epilogh[2]==$canditate10){
				$count10+=7;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=6;
			}else if($epilogh[3]==$canditate2){
				$count2+=6;
			}else if($epilogh[3]==$canditate3){
				$count3+=6;
			}else if($epilogh[3]==$canditate4){
				$count4+=6;
			}else if($epilogh[3]==$canditate5){
				$count5+=6;
			}else if($epilogh[3]==$canditate6){
				$count6+=6;
			}else if($epilogh[3]==$canditate7){
				$count7+=6;
			}else if($epilogh[3]==$canditate8){
				$count8+=6;
			}else if($epilogh[3]==$canditate9){
				$count9+=6;
			}else if($epilogh[3]==$canditate10){
				$count10+=6;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=5;
			}else if($epilogh[4]==$canditate2){
				$count2+=5;
			}else if($epilogh[4]==$canditate3){
				$count3+=5;
			}else if($epilogh[4]==$canditate4){
				$count4+=5;
			}else if($epilogh[4]==$canditate5){
				$count5+=5;	
			}else if($epilogh[4]==$canditate6){
				$count6+=5;
			}else if($epilogh[4]==$canditate7){
				$count7+=5;
			}else if($epilogh[4]==$canditate8){
				$count8+=5;
			}else if($epilogh[4]==$canditate9){
				$count9+=5;
			}else if($epilogh[4]==$canditate10){
				$count10+=5;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=4;
			}else if($epilogh[5]==$canditate2){
				$count2+=4;
			}else if($epilogh[5]==$canditate3){
				$count3+=4;
			}else if($epilogh[5]==$canditate4){
				$count4+=4;
			}else if($epilogh[5]==$canditate5){
				$count5+=4;	
			}else if($epilogh[5]==$canditate6){
				$count6+=4;	
			}else if($epilogh[5]==$canditate7){
				$count7+=4;
			}else if($epilogh[5]==$canditate8){
				$count8+=4;
			}else if($epilogh[5]==$canditate9){
				$count9+=4;
			}else if($epilogh[5]==$canditate10){
				$count10+=4;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=3;
			}else if($epilogh[6]==$canditate2){
				$count2+=3;
			}else if($epilogh[6]==$canditate3){
				$count3+=3;
			}else if($epilogh[6]==$canditate4){
				$count4+=3;
			}else if($epilogh[6]==$canditate5){
				$count5+=3;	
			}else if($epilogh[6]==$canditate6){
				$count6+=3;	
			}else if($epilogh[6]==$canditate7){
				$count7+=3;	
			}else if($epilogh[6]==$canditate8){
				$count8+=3;
			}else if($epilogh[6]==$canditate9){
				$count9+=3;
			}else if($epilogh[6]==$canditate10){
				$count10+=3;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=2;
			}else if($epilogh[7]==$canditate2){
				$count2+=2;
			}else if($epilogh[7]==$canditate3){
				$count3+=2;
			}else if($epilogh[7]==$canditate4){
				$count4+=2;
			}else if($epilogh[7]==$canditate5){
				$count5+=2;	
			}else if($epilogh[7]==$canditate6){
				$count6+=2;	
			}else if($epilogh[7]==$canditate7){
				$count7+=2;	
			}else if($epilogh[7]==$canditate8){
				$count8+=2;	
			}else if($epilogh[7]==$canditate9){
				$count9+=2;
			}else if($epilogh[7]==$canditate10){
				$count10+=2;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=1;
			}else if($epilogh[8]==$canditate2){
				$count2+=1;
			}else if($epilogh[8]==$canditate3){
				$count3+=1;
			}else if($epilogh[8]==$canditate4){
				$count4+=1;
			}else if($epilogh[8]==$canditate5){
				$count5+=1;	
			}else if($epilogh[8]==$canditate6){
				$count6+=1;	
			}else if($epilogh[8]==$canditate7){
				$count7+=1;	
			}else if($epilogh[8]==$canditate8){
				$count8+=1;	
			}else if($epilogh[8]==$canditate9){
				$count9+=1;	
			}else if($epilogh[8]==$canditate10){
				$count10+=1;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=0;
			}else if($epilogh[9]==$canditate2){
				$count2+=0;
			}else if($epilogh[9]==$canditate3){
				$count3+=0;
			}else if($epilogh[9]==$canditate4){
				$count4+=0;
			}else if($epilogh[9]==$canditate5){
				$count5+=0;	
			}else if($epilogh[9]==$canditate6){
				$count6+=0;	
			}else if($epilogh[9]==$canditate7){
				$count7+=0;	
			}else if($epilogh[9]==$canditate8){
				$count8+=0;	
			}else if($epilogh[9]==$canditate9){
				$count9+=0;	
			}else if($epilogh[9]==$canditate10){
				$count10+=0;	
			}
		}
	}
	if ($i2==11){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=10;
			}else if($epilogh[0]==$canditate2){
				$count2+=10;
			}else if($epilogh[0]==$canditate3){
				$count3+=10;
			}else if($epilogh[0]==$canditate4){
				$count4+=10;
			}else if($epilogh[0]==$canditate5){
				$count5+=10;
			}else if($epilogh[0]==$canditate6){
				$count6+=10;
			}else if($epilogh[0]==$canditate7){
				$count7+=10;
			}else if($epilogh[0]==$canditate8){
				$count8+=10;
			}else if($epilogh[0]==$canditate9){
				$count9+=10;
			}else if($epilogh[0]==$canditate10){
				$count10+=10;
			}else if($epilogh[0]==$canditate11){
				$count11+=10;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=9;
			}else if($epilogh[1]==$canditate2){
				$count2+=9;
			}else if($epilogh[1]==$canditate3){
				$count3+=9;
			}else if($epilogh[1]==$canditate4){
				$count4+=9;
			}else if($epilogh[1]==$canditate5){
				$count5+=9;
			}else if($epilogh[1]==$canditate6){
				$count6+=9;
			}else if($epilogh[1]==$canditate7){
				$count7+=9;
			}else if($epilogh[1]==$canditate8){
				$count8+=9;
			}else if($epilogh[1]==$canditate9){
				$count9+=9;
			}else if($epilogh[1]==$canditate10){
				$count10+=9;
			}else if($epilogh[1]==$canditate11){
				$count11+=9;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=8;
			}else if($epilogh[2]==$canditate2){
				$count2+=8;
			}else if($epilogh[2]==$canditate3){
				$count3+=8;
			}else if($epilogh[2]==$canditate4){
				$count4+=8;
			}else if($epilogh[2]==$canditate5){
				$count5+=8;
			}else if($epilogh[2]==$canditate6){
				$count6+=8;
			}else if($epilogh[2]==$canditate7){
				$count7+=8;
			}else if($epilogh[2]==$canditate8){
				$count8+=8;
			}else if($epilogh[2]==$canditate9){
				$count9+=8;
			}else if($epilogh[2]==$canditate10){
				$count10+=8;
			}else if($epilogh[2]==$canditate11){
				$count11+=8;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=7;
			}else if($epilogh[3]==$canditate2){
				$count2+=7;
			}else if($epilogh[3]==$canditate3){
				$count3+=7;
			}else if($epilogh[3]==$canditate4){
				$count4+=7;
			}else if($epilogh[3]==$canditate5){
				$count5+=7;
			}else if($epilogh[3]==$canditate6){
				$count6+=7;
			}else if($epilogh[3]==$canditate7){
				$count7+=7;
			}else if($epilogh[3]==$canditate8){
				$count8+=7;
			}else if($epilogh[3]==$canditate9){
				$count9+=7;
			}else if($epilogh[3]==$canditate10){
				$count10+=7;
			}else if($epilogh[3]==$canditate11){
				$count11+=7;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=6;
			}else if($epilogh[4]==$canditate2){
				$count2+=6;
			}else if($epilogh[4]==$canditate3){
				$count3+=6;
			}else if($epilogh[4]==$canditate4){
				$count4+=6;
			}else if($epilogh[4]==$canditate5){
				$count5+=6;	
			}else if($epilogh[4]==$canditate6){
				$count6+=6;
			}else if($epilogh[4]==$canditate7){
				$count7+=6;
			}else if($epilogh[4]==$canditate8){
				$count8+=6;
			}else if($epilogh[4]==$canditate9){
				$count9+=6;
			}else if($epilogh[4]==$canditate10){
				$count10+=6;
			}else if($epilogh[4]==$canditate11){
				$count11+=6;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=5;
			}else if($epilogh[5]==$canditate2){
				$count2+=5;
			}else if($epilogh[5]==$canditate3){
				$count3+=5;
			}else if($epilogh[5]==$canditate4){
				$count4+=5;
			}else if($epilogh[5]==$canditate5){
				$count5+=5;	
			}else if($epilogh[5]==$canditate6){
				$count6+=5;	
			}else if($epilogh[5]==$canditate7){
				$count7+=5;
			}else if($epilogh[5]==$canditate8){
				$count8+=5;
			}else if($epilogh[5]==$canditate9){
				$count9+=5;
			}else if($epilogh[5]==$canditate10){
				$count10+=5;
			}else if($epilogh[5]==$canditate11){
				$count11+=5;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=4;
			}else if($epilogh[6]==$canditate2){
				$count2+=4;
			}else if($epilogh[6]==$canditate3){
				$count3+=4;
			}else if($epilogh[6]==$canditate4){
				$count4+=4;
			}else if($epilogh[6]==$canditate5){
				$count5+=4;	
			}else if($epilogh[6]==$canditate6){
				$count6+=4;	
			}else if($epilogh[6]==$canditate7){
				$count7+=4;	
			}else if($epilogh[6]==$canditate8){
				$count8+=4;
			}else if($epilogh[6]==$canditate9){
				$count9+=4;
			}else if($epilogh[6]==$canditate10){
				$count10+=4;
			}else if($epilogh[6]==$canditate11){
				$count11+=4;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=3;
			}else if($epilogh[7]==$canditate2){
				$count2+=3;
			}else if($epilogh[7]==$canditate3){
				$count3+=3;
			}else if($epilogh[7]==$canditate4){
				$count4+=3;
			}else if($epilogh[7]==$canditate5){
				$count5+=3;	
			}else if($epilogh[7]==$canditate6){
				$count6+=3;	
			}else if($epilogh[7]==$canditate7){
				$count7+=3;	
			}else if($epilogh[7]==$canditate8){
				$count8+=3;	
			}else if($epilogh[7]==$canditate9){
				$count9+=3;
			}else if($epilogh[7]==$canditate10){
				$count10+=3;
			}else if($epilogh[7]==$canditate11){
				$count11+=3;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=2;
			}else if($epilogh[8]==$canditate2){
				$count2+=2;
			}else if($epilogh[8]==$canditate3){
				$count3+=2;
			}else if($epilogh[8]==$canditate4){
				$count4+=2;
			}else if($epilogh[8]==$canditate5){
				$count5+=2;	
			}else if($epilogh[8]==$canditate6){
				$count6+=2;	
			}else if($epilogh[8]==$canditate7){
				$count7+=2;	
			}else if($epilogh[8]==$canditate8){
				$count8+=2;	
			}else if($epilogh[8]==$canditate9){
				$count9+=2;	
			}else if($epilogh[8]==$canditate10){
				$count10+=2;
			}else if($epilogh[8]==$canditate11){
				$count11+=2;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=1;
			}else if($epilogh[9]==$canditate2){
				$count2+=1;
			}else if($epilogh[9]==$canditate3){
				$count3+=1;
			}else if($epilogh[9]==$canditate4){
				$count4+=1;
			}else if($epilogh[9]==$canditate5){
				$count5+=1;	
			}else if($epilogh[9]==$canditate6){
				$count6+=1;	
			}else if($epilogh[9]==$canditate7){
				$count7+=1;	
			}else if($epilogh[9]==$canditate8){
				$count8+=1;	
			}else if($epilogh[9]==$canditate9){
				$count9+=1;	
			}else if($epilogh[9]==$canditate10){
				$count10+=1;	
			}else if($epilogh[9]==$canditate11){
				$count11+=1;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=0;
			}else if($epilogh[10]==$canditate2){
				$count2+=0;
			}else if($epilogh[10]==$canditate3){
				$count3+=0;
			}else if($epilogh[10]==$canditate4){
				$count4+=0;
			}else if($epilogh[10]==$canditate5){
				$count5+=0;	
			}else if($epilogh[10]==$canditate6){
				$count6+=0;	
			}else if($epilogh[10]==$canditate7){
				$count7+=0;	
			}else if($epilogh[10]==$canditate8){
				$count8+=0;	
			}else if($epilogh[10]==$canditate9){
				$count9+=0;	
			}else if($epilogh[10]==$canditate10){
				$count10+=0;	
			}else if($epilogh[10]==$canditate11){
				$count11+=0;	
			}
		}
	}
	if ($i2==12){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=11;
			}else if($epilogh[0]==$canditate2){
				$count2+=11;
			}else if($epilogh[0]==$canditate3){
				$count3+=11;
			}else if($epilogh[0]==$canditate4){
				$count4+=11;
			}else if($epilogh[0]==$canditate5){
				$count5+=11;
			}else if($epilogh[0]==$canditate6){
				$count6+=11;
			}else if($epilogh[0]==$canditate7){
				$count7+=11;
			}else if($epilogh[0]==$canditate8){
				$count8+=11;
			}else if($epilogh[0]==$canditate9){
				$count9+=11;
			}else if($epilogh[0]==$canditate10){
				$count10+=11;
			}else if($epilogh[0]==$canditate11){
				$count11+=11;
			}else if($epilogh[0]==$canditate12){
				$count12+=11;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=10;
			}else if($epilogh[1]==$canditate2){
				$count2+=10;
			}else if($epilogh[1]==$canditate3){
				$count3+=10;
			}else if($epilogh[1]==$canditate4){
				$count4+=10;
			}else if($epilogh[1]==$canditate5){
				$count5+=10;
			}else if($epilogh[1]==$canditate6){
				$count6+=10;
			}else if($epilogh[1]==$canditate7){
				$count7+=10;
			}else if($epilogh[1]==$canditate8){
				$count8+=10;
			}else if($epilogh[1]==$canditate9){
				$count9+=10;
			}else if($epilogh[1]==$canditate10){
				$count10+=10;
			}else if($epilogh[1]==$canditate11){
				$count11+=10;
			}else if($epilogh[1]==$canditate12){
				$count12+=10;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=9;
			}else if($epilogh[2]==$canditate2){
				$count2+=9;
			}else if($epilogh[2]==$canditate3){
				$count3+=9;
			}else if($epilogh[2]==$canditate4){
				$count4+=9;
			}else if($epilogh[2]==$canditate5){
				$count5+=9;
			}else if($epilogh[2]==$canditate6){
				$count6+=9;
			}else if($epilogh[2]==$canditate7){
				$count7+=9;
			}else if($epilogh[2]==$canditate8){
				$count8+=9;
			}else if($epilogh[2]==$canditate9){
				$count9+=9;
			}else if($epilogh[2]==$canditate10){
				$count10+=9;
			}else if($epilogh[2]==$canditate11){
				$count11+=9;
			}else if($epilogh[2]==$canditate12){
				$count12+=9;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=8;
			}else if($epilogh[3]==$canditate2){
				$count2+=8;
			}else if($epilogh[3]==$canditate3){
				$count3+=8;
			}else if($epilogh[3]==$canditate4){
				$count4+=8;
			}else if($epilogh[3]==$canditate5){
				$count5+=8;
			}else if($epilogh[3]==$canditate6){
				$count6+=8;
			}else if($epilogh[3]==$canditate7){
				$count7+=8;
			}else if($epilogh[3]==$canditate8){
				$count8+=8;
			}else if($epilogh[3]==$canditate9){
				$count9+=8;
			}else if($epilogh[3]==$canditate10){
				$count10+=8;
			}else if($epilogh[3]==$canditate11){
				$count11+=8;
			}else if($epilogh[3]==$canditate12){
				$count12+=8;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=7;
			}else if($epilogh[4]==$canditate2){
				$count2+=7;
			}else if($epilogh[4]==$canditate3){
				$count3+=7;
			}else if($epilogh[4]==$canditate4){
				$count4+=7;
			}else if($epilogh[4]==$canditate5){
				$count5+=7;	
			}else if($epilogh[4]==$canditate6){
				$count6+=7;
			}else if($epilogh[4]==$canditate7){
				$count7+=7;
			}else if($epilogh[4]==$canditate8){
				$count8+=7;
			}else if($epilogh[4]==$canditate9){
				$count9+=7;
			}else if($epilogh[4]==$canditate10){
				$count10+=7;
			}else if($epilogh[4]==$canditate11){
				$count11+=7;
			}else if($epilogh[4]==$canditate12){
				$count12+=7;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=6;
			}else if($epilogh[5]==$canditate2){
				$count2+=6;
			}else if($epilogh[5]==$canditate3){
				$count3+=6;
			}else if($epilogh[5]==$canditate4){
				$count4+=6;
			}else if($epilogh[5]==$canditate5){
				$count5+=6;	
			}else if($epilogh[5]==$canditate6){
				$count6+=6;	
			}else if($epilogh[5]==$canditate7){
				$count7+=6;
			}else if($epilogh[5]==$canditate8){
				$count8+=6;
			}else if($epilogh[5]==$canditate9){
				$count9+=6;
			}else if($epilogh[5]==$canditate10){
				$count10+=6;
			}else if($epilogh[5]==$canditate11){
				$count11+=6;
			}else if($epilogh[5]==$canditate12){
				$count12+=6;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=5;
			}else if($epilogh[6]==$canditate2){
				$count2+=5;
			}else if($epilogh[6]==$canditate3){
				$count3+=5;
			}else if($epilogh[6]==$canditate4){
				$count4+=5;
			}else if($epilogh[6]==$canditate5){
				$count5+=5;	
			}else if($epilogh[6]==$canditate6){
				$count6+=5;	
			}else if($epilogh[6]==$canditate7){
				$count7+=5;	
			}else if($epilogh[6]==$canditate8){
				$count8+=5;
			}else if($epilogh[6]==$canditate9){
				$count9+=5;
			}else if($epilogh[6]==$canditate10){
				$count10+=5;
			}else if($epilogh[6]==$canditate11){
				$count11+=5;
			}else if($epilogh[6]==$canditate12){
				$count12+=5;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=4;
			}else if($epilogh[7]==$canditate2){
				$count2+=4;
			}else if($epilogh[7]==$canditate3){
				$count3+=4;
			}else if($epilogh[7]==$canditate4){
				$count4+=4;
			}else if($epilogh[7]==$canditate5){
				$count5+=4;	
			}else if($epilogh[7]==$canditate6){
				$count6+=4;	
			}else if($epilogh[7]==$canditate7){
				$count7+=4;	
			}else if($epilogh[7]==$canditate8){
				$count8+=4;	
			}else if($epilogh[7]==$canditate9){
				$count9+=4;
			}else if($epilogh[7]==$canditate10){
				$count10+=4;
			}else if($epilogh[7]==$canditate11){
				$count11+=4;
			}else if($epilogh[7]==$canditate12){
				$count12+=4;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=3;
			}else if($epilogh[8]==$canditate2){
				$count2+=3;
			}else if($epilogh[8]==$canditate3){
				$count3+=3;
			}else if($epilogh[8]==$canditate4){
				$count4+=3;
			}else if($epilogh[8]==$canditate5){
				$count5+=3;	
			}else if($epilogh[8]==$canditate6){
				$count6+=3;	
			}else if($epilogh[8]==$canditate7){
				$count7+=3;	
			}else if($epilogh[8]==$canditate8){
				$count8+=3;	
			}else if($epilogh[8]==$canditate9){
				$count9+=3;	
			}else if($epilogh[8]==$canditate10){
				$count10+=3;
			}else if($epilogh[8]==$canditate11){
				$count11+=3;
			}else if($epilogh[8]==$canditate12){
				$count12+=3;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=2;
			}else if($epilogh[9]==$canditate2){
				$count2+=2;
			}else if($epilogh[9]==$canditate3){
				$count3+=2;
			}else if($epilogh[9]==$canditate4){
				$count4+=2;
			}else if($epilogh[9]==$canditate5){
				$count5+=2;	
			}else if($epilogh[9]==$canditate6){
				$count6+=2;	
			}else if($epilogh[9]==$canditate7){
				$count7+=2;	
			}else if($epilogh[9]==$canditate8){
				$count8+=2;	
			}else if($epilogh[9]==$canditate9){
				$count9+=2;	
			}else if($epilogh[9]==$canditate10){
				$count10+=2;	
			}else if($epilogh[9]==$canditate11){
				$count11+=2;
			}else if($epilogh[9]==$canditate12){
				$count12+=2;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=1;
			}else if($epilogh[10]==$canditate2){
				$count2+=1;
			}else if($epilogh[10]==$canditate3){
				$count3+=1;
			}else if($epilogh[10]==$canditate4){
				$count4+=1;
			}else if($epilogh[10]==$canditate5){
				$count5+=1;	
			}else if($epilogh[10]==$canditate6){
				$count6+=1;	
			}else if($epilogh[10]==$canditate7){
				$count7+=1;	
			}else if($epilogh[10]==$canditate8){
				$count8+=1;	
			}else if($epilogh[10]==$canditate9){
				$count9+=1;	
			}else if($epilogh[10]==$canditate10){
				$count10+=1;	
			}else if($epilogh[10]==$canditate11){
				$count11+=1;	
			}else if($epilogh[10]==$canditate12){
				$count12+=1;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=0;
			}else if($epilogh[11]==$canditate2){
				$count2+=0;
			}else if($epilogh[11]==$canditate3){
				$count3+=0;
			}else if($epilogh[11]==$canditate4){
				$count4+=0;
			}else if($epilogh[11]==$canditate5){
				$count5+=0;	
			}else if($epilogh[11]==$canditate6){
				$count6+=0;	
			}else if($epilogh[11]==$canditate7){
				$count7+=0;	
			}else if($epilogh[11]==$canditate8){
				$count8+=0;	
			}else if($epilogh[11]==$canditate9){
				$count9+=0;	
			}else if($epilogh[11]==$canditate10){
				$count10+=0;	
			}else if($epilogh[11]==$canditate11){
				$count11+=0;	
			}else if($epilogh[11]==$canditate12){
				$count12+=0;	
			}
		}
	}
	if ($i2==13){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=12;
			}else if($epilogh[0]==$canditate2){
				$count2+=12;
			}else if($epilogh[0]==$canditate3){
				$count3+=12;
			}else if($epilogh[0]==$canditate4){
				$count4+=12;
			}else if($epilogh[0]==$canditate5){
				$count5+=12;
			}else if($epilogh[0]==$canditate6){
				$count6+=12;
			}else if($epilogh[0]==$canditate7){
				$count7+=12;
			}else if($epilogh[0]==$canditate8){
				$count8+=12;
			}else if($epilogh[0]==$canditate9){
				$count9+=12;
			}else if($epilogh[0]==$canditate10){
				$count10+=12;
			}else if($epilogh[0]==$canditate11){
				$count11+=12;
			}else if($epilogh[0]==$canditate12){
				$count12+=12;
			}else if($epilogh[0]==$canditate13){
				$count13+=12;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=11;
			}else if($epilogh[1]==$canditate2){
				$count2+=11;
			}else if($epilogh[1]==$canditate3){
				$count3+=11;
			}else if($epilogh[1]==$canditate4){
				$count4+=11;
			}else if($epilogh[1]==$canditate5){
				$count5+=11;
			}else if($epilogh[1]==$canditate6){
				$count6+=11;
			}else if($epilogh[1]==$canditate7){
				$count7+=11;
			}else if($epilogh[1]==$canditate8){
				$count8+=11;
			}else if($epilogh[1]==$canditate9){
				$count9+=11;
			}else if($epilogh[1]==$canditate10){
				$count10+=11;
			}else if($epilogh[1]==$canditate11){
				$count11+=11;
			}else if($epilogh[1]==$canditate12){
				$count12+=11;
			}else if($epilogh[1]==$canditate13){
				$count13+=11;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=10;
			}else if($epilogh[2]==$canditate2){
				$count2+=10;
			}else if($epilogh[2]==$canditate3){
				$count3+=10;
			}else if($epilogh[2]==$canditate4){
				$count4+=10;
			}else if($epilogh[2]==$canditate5){
				$count5+=10;
			}else if($epilogh[2]==$canditate6){
				$count6+=10;
			}else if($epilogh[2]==$canditate7){
				$count7+=10;
			}else if($epilogh[2]==$canditate8){
				$count8+=10;
			}else if($epilogh[2]==$canditate9){
				$count9+=10;
			}else if($epilogh[2]==$canditate10){
				$count10+=10;
			}else if($epilogh[2]==$canditate11){
				$count11+=10;
			}else if($epilogh[2]==$canditate12){
				$count12+=10;
			}else if($epilogh[2]==$canditate13){
				$count13+=10;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=9;
			}else if($epilogh[3]==$canditate2){
				$count2+=9;
			}else if($epilogh[3]==$canditate3){
				$count3+=9;
			}else if($epilogh[3]==$canditate4){
				$count4+=9;
			}else if($epilogh[3]==$canditate5){
				$count5+=9;
			}else if($epilogh[3]==$canditate6){
				$count6+=9;
			}else if($epilogh[3]==$canditate7){
				$count7+=9;
			}else if($epilogh[3]==$canditate8){
				$count8+=9;
			}else if($epilogh[3]==$canditate9){
				$count9+=9;
			}else if($epilogh[3]==$canditate10){
				$count10+=9;
			}else if($epilogh[3]==$canditate11){
				$count11+=9;
			}else if($epilogh[3]==$canditate12){
				$count12+=9;
			}else if($epilogh[3]==$canditate13){
				$count13+=9;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=8;
			}else if($epilogh[4]==$canditate2){
				$count2+=8;
			}else if($epilogh[4]==$canditate3){
				$count3+=8;
			}else if($epilogh[4]==$canditate4){
				$count4+=8;
			}else if($epilogh[4]==$canditate5){
				$count5+=8;	
			}else if($epilogh[4]==$canditate6){
				$count6+=8;
			}else if($epilogh[4]==$canditate7){
				$count7+=8;
			}else if($epilogh[4]==$canditate8){
				$count8+=8;
			}else if($epilogh[4]==$canditate9){
				$count9+=8;
			}else if($epilogh[4]==$canditate10){
				$count10+=8;
			}else if($epilogh[4]==$canditate11){
				$count11+=8;
			}else if($epilogh[4]==$canditate12){
				$count12+=8;
			}else if($epilogh[4]==$canditate13){
				$count13+=8;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=7;
			}else if($epilogh[5]==$canditate2){
				$count2+=7;
			}else if($epilogh[5]==$canditate3){
				$count3+=7;
			}else if($epilogh[5]==$canditate4){
				$count4+=7;
			}else if($epilogh[5]==$canditate5){
				$count5+=7;	
			}else if($epilogh[5]==$canditate6){
				$count6+=7;	
			}else if($epilogh[5]==$canditate7){
				$count7+=7;
			}else if($epilogh[5]==$canditate8){
				$count8+=7;
			}else if($epilogh[5]==$canditate9){
				$count9+=7;
			}else if($epilogh[5]==$canditate10){
				$count10+=7;
			}else if($epilogh[5]==$canditate11){
				$count11+=7;
			}else if($epilogh[5]==$canditate12){
				$count12+=7;
			}else if($epilogh[5]==$canditate13){
				$count13+=7;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=6;
			}else if($epilogh[6]==$canditate2){
				$count2+=6;
			}else if($epilogh[6]==$canditate3){
				$count3+=6;
			}else if($epilogh[6]==$canditate4){
				$count4+=6;
			}else if($epilogh[6]==$canditate5){
				$count5+=6;	
			}else if($epilogh[6]==$canditate6){
				$count6+=6;	
			}else if($epilogh[6]==$canditate7){
				$count7+=6;	
			}else if($epilogh[6]==$canditate8){
				$count8+=6;
			}else if($epilogh[6]==$canditate9){
				$count9+=6;
			}else if($epilogh[6]==$canditate10){
				$count10+=6;
			}else if($epilogh[6]==$canditate11){
				$count11+=6;
			}else if($epilogh[6]==$canditate12){
				$count12+=6;
			}else if($epilogh[6]==$canditate13){
				$count13+=6;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=5;
			}else if($epilogh[7]==$canditate2){
				$count2+=5;
			}else if($epilogh[7]==$canditate3){
				$count3+=5;
			}else if($epilogh[7]==$canditate4){
				$count4+=5;
			}else if($epilogh[7]==$canditate5){
				$count5+=5;	
			}else if($epilogh[7]==$canditate6){
				$count6+=5;	
			}else if($epilogh[7]==$canditate7){
				$count7+=5;	
			}else if($epilogh[7]==$canditate8){
				$count8+=5;	
			}else if($epilogh[7]==$canditate9){
				$count9+=5;
			}else if($epilogh[7]==$canditate10){
				$count10+=5;
			}else if($epilogh[7]==$canditate11){
				$count11+=5;
			}else if($epilogh[7]==$canditate12){
				$count12+=5;
			}else if($epilogh[7]==$canditate13){
				$count13+=5;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=4;
			}else if($epilogh[8]==$canditate2){
				$count2+=4;
			}else if($epilogh[8]==$canditate3){
				$count3+=4;
			}else if($epilogh[8]==$canditate4){
				$count4+=4;
			}else if($epilogh[8]==$canditate5){
				$count5+=4;	
			}else if($epilogh[8]==$canditate6){
				$count6+=4;	
			}else if($epilogh[8]==$canditate7){
				$count7+=4;	
			}else if($epilogh[8]==$canditate8){
				$count8+=4;	
			}else if($epilogh[8]==$canditate9){
				$count9+=4;	
			}else if($epilogh[8]==$canditate10){
				$count10+=4;
			}else if($epilogh[8]==$canditate11){
				$count11+=4;
			}else if($epilogh[8]==$canditate12){
				$count12+=4;
			}else if($epilogh[8]==$canditate13){
				$count13+=4;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=3;
			}else if($epilogh[9]==$canditate2){
				$count2+=3;
			}else if($epilogh[9]==$canditate3){
				$count3+=3;
			}else if($epilogh[9]==$canditate4){
				$count4+=3;
			}else if($epilogh[9]==$canditate5){
				$count5+=3;	
			}else if($epilogh[9]==$canditate6){
				$count6+=3;	
			}else if($epilogh[9]==$canditate7){
				$count7+=3;	
			}else if($epilogh[9]==$canditate8){
				$count8+=3;	
			}else if($epilogh[9]==$canditate9){
				$count9+=3;	
			}else if($epilogh[9]==$canditate10){
				$count10+=3;	
			}else if($epilogh[9]==$canditate11){
				$count11+=3;
			}else if($epilogh[9]==$canditate12){
				$count12+=3;
			}else if($epilogh[9]==$canditate13){
				$count13+=3;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=2;
			}else if($epilogh[10]==$canditate2){
				$count2+=2;
			}else if($epilogh[10]==$canditate3){
				$count3+=2;
			}else if($epilogh[10]==$canditate4){
				$count4+=2;
			}else if($epilogh[10]==$canditate5){
				$count5+=2;	
			}else if($epilogh[10]==$canditate6){
				$count6+=2;	
			}else if($epilogh[10]==$canditate7){
				$count7+=2;	
			}else if($epilogh[10]==$canditate8){
				$count8+=2;	
			}else if($epilogh[10]==$canditate9){
				$count9+=2;	
			}else if($epilogh[10]==$canditate10){
				$count10+=2;	
			}else if($epilogh[10]==$canditate11){
				$count11+=2;	
			}else if($epilogh[10]==$canditate12){
				$count12+=2;
			}else if($epilogh[10]==$canditate13){
				$count13+=2;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=1;
			}else if($epilogh[11]==$canditate2){
				$count2+=1;
			}else if($epilogh[11]==$canditate3){
				$count3+=1;
			}else if($epilogh[11]==$canditate4){
				$count4+=1;
			}else if($epilogh[11]==$canditate5){
				$count5+=1;	
			}else if($epilogh[11]==$canditate6){
				$count6+=1;	
			}else if($epilogh[11]==$canditate7){
				$count7+=1;	
			}else if($epilogh[11]==$canditate8){
				$count8+=1;	
			}else if($epilogh[11]==$canditate9){
				$count9+=1;	
			}else if($epilogh[11]==$canditate10){
				$count10+=1;	
			}else if($epilogh[11]==$canditate11){
				$count11+=1;	
			}else if($epilogh[11]==$canditate12){
				$count12+=1;	
			}else if($epilogh[11]==$canditate13){
				$count13+=1;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=0;
			}else if($epilogh[12]==$canditate2){
				$count2+=0;
			}else if($epilogh[12]==$canditate3){
				$count3+=0;
			}else if($epilogh[12]==$canditate4){
				$count4+=0;
			}else if($epilogh[12]==$canditate5){
				$count5+=0;	
			}else if($epilogh[12]==$canditate6){
				$count6+=0;	
			}else if($epilogh[12]==$canditate7){
				$count7+=0;	
			}else if($epilogh[12]==$canditate8){
				$count8+=0;	
			}else if($epilogh[12]==$canditate9){
				$count9+=0;	
			}else if($epilogh[12]==$canditate10){
				$count10+=0;	
			}else if($epilogh[12]==$canditate11){
				$count11+=0;	
			}else if($epilogh[12]==$canditate12){
				$count12+=0;	
			}else if($epilogh[12]==$canditate13){
				$count13+=0;	
			}
		}
	}
	if ($i2==14){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=13;
			}else if($epilogh[0]==$canditate2){
				$count2+=13;
			}else if($epilogh[0]==$canditate3){
				$count3+=13;
			}else if($epilogh[0]==$canditate4){
				$count4+=13;
			}else if($epilogh[0]==$canditate5){
				$count5+=13;
			}else if($epilogh[0]==$canditate6){
				$count6+=13;
			}else if($epilogh[0]==$canditate7){
				$count7+=13;
			}else if($epilogh[0]==$canditate8){
				$count8+=13;
			}else if($epilogh[0]==$canditate9){
				$count9+=13;
			}else if($epilogh[0]==$canditate10){
				$count10+=13;
			}else if($epilogh[0]==$canditate11){
				$count11+=13;
			}else if($epilogh[0]==$canditate12){
				$count12+=13;
			}else if($epilogh[0]==$canditate13){
				$count13+=13;
			}else if($epilogh[0]==$canditate14){
				$count14+=13;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=12;
			}else if($epilogh[1]==$canditate2){
				$count2+=12;
			}else if($epilogh[1]==$canditate3){
				$count3+=12;
			}else if($epilogh[1]==$canditate4){
				$count4+=12;
			}else if($epilogh[1]==$canditate5){
				$count5+=12;
			}else if($epilogh[1]==$canditate6){
				$count6+=12;
			}else if($epilogh[1]==$canditate7){
				$count7+=12;
			}else if($epilogh[1]==$canditate8){
				$count8+=12;
			}else if($epilogh[1]==$canditate9){
				$count9+=12;
			}else if($epilogh[1]==$canditate10){
				$count10+=12;
			}else if($epilogh[1]==$canditate11){
				$count11+=12;
			}else if($epilogh[1]==$canditate12){
				$count12+=12;
			}else if($epilogh[1]==$canditate13){
				$count13+=12;
			}else if($epilogh[1]==$canditate14){
				$count14+=12;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=11;
			}else if($epilogh[2]==$canditate2){
				$count2+=11;
			}else if($epilogh[2]==$canditate3){
				$count3+=11;
			}else if($epilogh[2]==$canditate4){
				$count4+=11;
			}else if($epilogh[2]==$canditate5){
				$count5+=11;
			}else if($epilogh[2]==$canditate6){
				$count6+=11;
			}else if($epilogh[2]==$canditate7){
				$count7+=11;
			}else if($epilogh[2]==$canditate8){
				$count8+=11;
			}else if($epilogh[2]==$canditate9){
				$count9+=11;
			}else if($epilogh[2]==$canditate10){
				$count10+=11;
			}else if($epilogh[2]==$canditate11){
				$count11+=11;
			}else if($epilogh[2]==$canditate12){
				$count12+=11;
			}else if($epilogh[2]==$canditate13){
				$count13+=11;
			}else if($epilogh[2]==$canditate14){
				$count14+=11;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=10;
			}else if($epilogh[3]==$canditate2){
				$count2+=10;
			}else if($epilogh[3]==$canditate3){
				$count3+=10;
			}else if($epilogh[3]==$canditate4){
				$count4+=10;
			}else if($epilogh[3]==$canditate5){
				$count5+=10;
			}else if($epilogh[3]==$canditate6){
				$count6+=10;
			}else if($epilogh[3]==$canditate7){
				$count7+=10;
			}else if($epilogh[3]==$canditate8){
				$count8+=10;
			}else if($epilogh[3]==$canditate9){
				$count9+=10;
			}else if($epilogh[3]==$canditate10){
				$count10+=10;
			}else if($epilogh[3]==$canditate11){
				$count11+=10;
			}else if($epilogh[3]==$canditate12){
				$count12+=10;
			}else if($epilogh[3]==$canditate13){
				$count13+=10;
			}else if($epilogh[3]==$canditate14){
				$count14+=10;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=9;
			}else if($epilogh[4]==$canditate2){
				$count2+=9;
			}else if($epilogh[4]==$canditate3){
				$count3+=9;
			}else if($epilogh[4]==$canditate4){
				$count4+=9;
			}else if($epilogh[4]==$canditate5){
				$count5+=9;	
			}else if($epilogh[4]==$canditate6){
				$count6+=9;
			}else if($epilogh[4]==$canditate7){
				$count7+=9;
			}else if($epilogh[4]==$canditate8){
				$count8+=9;
			}else if($epilogh[4]==$canditate9){
				$count9+=9;
			}else if($epilogh[4]==$canditate10){
				$count10+=9;
			}else if($epilogh[4]==$canditate11){
				$count11+=9;
			}else if($epilogh[4]==$canditate12){
				$count12+=9;
			}else if($epilogh[4]==$canditate13){
				$count13+=9;
			}else if($epilogh[4]==$canditate14){
				$count14+=9;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=8;
			}else if($epilogh[5]==$canditate2){
				$count2+=8;
			}else if($epilogh[5]==$canditate3){
				$count3+=8;
			}else if($epilogh[5]==$canditate4){
				$count4+=8;
			}else if($epilogh[5]==$canditate5){
				$count5+=8;	
			}else if($epilogh[5]==$canditate6){
				$count6+=8;	
			}else if($epilogh[5]==$canditate7){
				$count7+=8;
			}else if($epilogh[5]==$canditate8){
				$count8+=8;
			}else if($epilogh[5]==$canditate9){
				$count9+=8;
			}else if($epilogh[5]==$canditate10){
				$count10+=8;
			}else if($epilogh[5]==$canditate11){
				$count11+=8;
			}else if($epilogh[5]==$canditate12){
				$count12+=8;
			}else if($epilogh[5]==$canditate13){
				$count13+=8;
			}else if($epilogh[5]==$canditate14){
				$count14+=8;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=7;
			}else if($epilogh[6]==$canditate2){
				$count2+=7;
			}else if($epilogh[6]==$canditate3){
				$count3+=7;
			}else if($epilogh[6]==$canditate4){
				$count4+=7;
			}else if($epilogh[6]==$canditate5){
				$count5+=7;	
			}else if($epilogh[6]==$canditate6){
				$count6+=7;	
			}else if($epilogh[6]==$canditate7){
				$count7+=7;	
			}else if($epilogh[6]==$canditate8){
				$count8+=7;
			}else if($epilogh[6]==$canditate9){
				$count9+=7;
			}else if($epilogh[6]==$canditate10){
				$count10+=7;
			}else if($epilogh[6]==$canditate11){
				$count11+=7;
			}else if($epilogh[6]==$canditate12){
				$count12+=7;
			}else if($epilogh[6]==$canditate13){
				$count13+=7;
			}else if($epilogh[6]==$canditate14){
				$count14+=7;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=6;
			}else if($epilogh[7]==$canditate2){
				$count2+=6;
			}else if($epilogh[7]==$canditate3){
				$count3+=6;
			}else if($epilogh[7]==$canditate4){
				$count4+=6;
			}else if($epilogh[7]==$canditate5){
				$count5+=6;	
			}else if($epilogh[7]==$canditate6){
				$count6+=6;	
			}else if($epilogh[7]==$canditate7){
				$count7+=6;	
			}else if($epilogh[7]==$canditate8){
				$count8+=6;	
			}else if($epilogh[7]==$canditate9){
				$count9+=6;
			}else if($epilogh[7]==$canditate10){
				$count10+=6;
			}else if($epilogh[7]==$canditate11){
				$count11+=6;
			}else if($epilogh[7]==$canditate12){
				$count12+=6;
			}else if($epilogh[7]==$canditate13){
				$count13+=6;
			}else if($epilogh[7]==$canditate14){
				$count14+=6;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=5;
			}else if($epilogh[8]==$canditate2){
				$count2+=5;
			}else if($epilogh[8]==$canditate3){
				$count3+=5;
			}else if($epilogh[8]==$canditate4){
				$count4+=5;
			}else if($epilogh[8]==$canditate5){
				$count5+=5;	
			}else if($epilogh[8]==$canditate6){
				$count6+=5;	
			}else if($epilogh[8]==$canditate7){
				$count7+=5;	
			}else if($epilogh[8]==$canditate8){
				$count8+=5;	
			}else if($epilogh[8]==$canditate9){
				$count9+=5;	
			}else if($epilogh[8]==$canditate10){
				$count10+=5;
			}else if($epilogh[8]==$canditate11){
				$count11+=5;
			}else if($epilogh[8]==$canditate12){
				$count12+=5;
			}else if($epilogh[8]==$canditate13){
				$count13+=5;
			}else if($epilogh[8]==$canditate14){
				$count14+=5;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=4;
			}else if($epilogh[9]==$canditate2){
				$count2+=4;
			}else if($epilogh[9]==$canditate3){
				$count3+=4;
			}else if($epilogh[9]==$canditate4){
				$count4+=4;
			}else if($epilogh[9]==$canditate5){
				$count5+=4;	
			}else if($epilogh[9]==$canditate6){
				$count6+=4;	
			}else if($epilogh[9]==$canditate7){
				$count7+=4;	
			}else if($epilogh[9]==$canditate8){
				$count8+=4;	
			}else if($epilogh[9]==$canditate9){
				$count9+=4;	
			}else if($epilogh[9]==$canditate10){
				$count10+=4;	
			}else if($epilogh[9]==$canditate11){
				$count11+=4;
			}else if($epilogh[9]==$canditate12){
				$count12+=4;
			}else if($epilogh[9]==$canditate13){
				$count13+=4;
			}else if($epilogh[9]==$canditate14){
				$count14+=4;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=3;
			}else if($epilogh[10]==$canditate2){
				$count2+=3;
			}else if($epilogh[10]==$canditate3){
				$count3+=3;
			}else if($epilogh[10]==$canditate4){
				$count4+=3;
			}else if($epilogh[10]==$canditate5){
				$count5+=3;	
			}else if($epilogh[10]==$canditate6){
				$count6+=3;	
			}else if($epilogh[10]==$canditate7){
				$count7+=3;	
			}else if($epilogh[10]==$canditate8){
				$count8+=3;	
			}else if($epilogh[10]==$canditate9){
				$count9+=3;	
			}else if($epilogh[10]==$canditate10){
				$count10+=3;	
			}else if($epilogh[10]==$canditate11){
				$count11+=3;	
			}else if($epilogh[10]==$canditate12){
				$count12+=3;
			}else if($epilogh[10]==$canditate13){
				$count13+=3;
			}else if($epilogh[10]==$canditate14){
				$count14+=3;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=2;
			}else if($epilogh[11]==$canditate2){
				$count2+=2;
			}else if($epilogh[11]==$canditate3){
				$count3+=2;
			}else if($epilogh[11]==$canditate4){
				$count4+=2;
			}else if($epilogh[11]==$canditate5){
				$count5+=2;	
			}else if($epilogh[11]==$canditate6){
				$count6+=2;	
			}else if($epilogh[11]==$canditate7){
				$count7+=2;	
			}else if($epilogh[11]==$canditate8){
				$count8+=2;	
			}else if($epilogh[11]==$canditate9){
				$count9+=2;	
			}else if($epilogh[11]==$canditate10){
				$count10+=2;	
			}else if($epilogh[11]==$canditate11){
				$count11+=2;	
			}else if($epilogh[11]==$canditate12){
				$count12+=2;	
			}else if($epilogh[11]==$canditate13){
				$count13+=2;
			}else if($epilogh[11]==$canditate14){
				$count14+=2;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=1;
			}else if($epilogh[12]==$canditate2){
				$count2+=1;
			}else if($epilogh[12]==$canditate3){
				$count3+=1;
			}else if($epilogh[12]==$canditate4){
				$count4+=1;
			}else if($epilogh[12]==$canditate5){
				$count5+=1;	
			}else if($epilogh[12]==$canditate6){
				$count6+=1;	
			}else if($epilogh[12]==$canditate7){
				$count7+=1;	
			}else if($epilogh[12]==$canditate8){
				$count8+=1;	
			}else if($epilogh[12]==$canditate9){
				$count9+=1;	
			}else if($epilogh[12]==$canditate10){
				$count10+=1;	
			}else if($epilogh[12]==$canditate11){
				$count11+=1;	
			}else if($epilogh[12]==$canditate12){
				$count12+=1;	
			}else if($epilogh[12]==$canditate13){
				$count13+=1;	
			}else if($epilogh[12]==$canditate14){
				$count14+=1;
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate1){
				$count1+=0;
			}else if($epilogh[13]==$canditate2){
				$count2+=0;
			}else if($epilogh[13]==$canditate3){
				$count3+=0;
			}else if($epilogh[13]==$canditate4){
				$count4+=0;
			}else if($epilogh[13]==$canditate5){
				$count5+=0;	
			}else if($epilogh[13]==$canditate6){
				$count6+=0;	
			}else if($epilogh[13]==$canditate7){
				$count7+=0;	
			}else if($epilogh[13]==$canditate8){
				$count8+=0;	
			}else if($epilogh[13]==$canditate9){
				$count9+=0;	
			}else if($epilogh[13]==$canditate10){
				$count10+=0;	
			}else if($epilogh[13]==$canditate11){
				$count11+=0;	
			}else if($epilogh[13]==$canditate12){
				$count12+=0;	
			}else if($epilogh[13]==$canditate13){
				$count13+=0;	
			}else if($epilogh[13]==$canditate14){
				$count14+=0;	
			}
		}
	}
	if ($i2==15){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=14;
			}else if($epilogh[0]==$canditate2){
				$count2+=14;
			}else if($epilogh[0]==$canditate3){
				$count3+=14;
			}else if($epilogh[0]==$canditate4){
				$count4+=14;
			}else if($epilogh[0]==$canditate5){
				$count5+=14;
			}else if($epilogh[0]==$canditate6){
				$count6+=14;
			}else if($epilogh[0]==$canditate7){
				$count7+=14;
			}else if($epilogh[0]==$canditate8){
				$count8+=14;
			}else if($epilogh[0]==$canditate9){
				$count9+=14;
			}else if($epilogh[0]==$canditate10){
				$count10+=14;
			}else if($epilogh[0]==$canditate11){
				$count11+=14;
			}else if($epilogh[0]==$canditate12){
				$count12+=14;
			}else if($epilogh[0]==$canditate13){
				$count13+=14;
			}else if($epilogh[0]==$canditate14){
				$count14+=14;
			}else if($epilogh[0]==$canditate15){
				$count15+=14;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=13;
			}else if($epilogh[1]==$canditate2){
				$count2+=13;
			}else if($epilogh[1]==$canditate3){
				$count3+=13;
			}else if($epilogh[1]==$canditate4){
				$count4+=13;
			}else if($epilogh[1]==$canditate5){
				$count5+=13;
			}else if($epilogh[1]==$canditate6){
				$count6+=13;
			}else if($epilogh[1]==$canditate7){
				$count7+=13;
			}else if($epilogh[1]==$canditate8){
				$count8+=13;
			}else if($epilogh[1]==$canditate9){
				$count9+=13;
			}else if($epilogh[1]==$canditate10){
				$count10+=13;
			}else if($epilogh[1]==$canditate11){
				$count11+=13;
			}else if($epilogh[1]==$canditate12){
				$count12+=13;
			}else if($epilogh[1]==$canditate13){
				$count13+=13;
			}else if($epilogh[1]==$canditate14){
				$count14+=13;
			}else if($epilogh[1]==$canditate15){
				$count15+=13;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=12;
			}else if($epilogh[2]==$canditate2){
				$count2+=12;
			}else if($epilogh[2]==$canditate3){
				$count3+=12;
			}else if($epilogh[2]==$canditate4){
				$count4+=12;
			}else if($epilogh[2]==$canditate5){
				$count5+=12;
			}else if($epilogh[2]==$canditate6){
				$count6+=12;
			}else if($epilogh[2]==$canditate7){
				$count7+=12;
			}else if($epilogh[2]==$canditate8){
				$count8+=12;
			}else if($epilogh[2]==$canditate9){
				$count9+=12;
			}else if($epilogh[2]==$canditate10){
				$count10+=12;
			}else if($epilogh[2]==$canditate11){
				$count11+=12;
			}else if($epilogh[2]==$canditate12){
				$count12+=12;
			}else if($epilogh[2]==$canditate13){
				$count13+=12;
			}else if($epilogh[2]==$canditate14){
				$count14+=12;
			}else if($epilogh[2]==$canditate15){
				$count15+=12;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=11;
			}else if($epilogh[3]==$canditate2){
				$count2+=11;
			}else if($epilogh[3]==$canditate3){
				$count3+=11;
			}else if($epilogh[3]==$canditate4){
				$count4+=11;
			}else if($epilogh[3]==$canditate5){
				$count5+=11;
			}else if($epilogh[3]==$canditate6){
				$count6+=11;
			}else if($epilogh[3]==$canditate7){
				$count7+=11;
			}else if($epilogh[3]==$canditate8){
				$count8+=11;
			}else if($epilogh[3]==$canditate9){
				$count9+=11;
			}else if($epilogh[3]==$canditate10){
				$count10+=11;
			}else if($epilogh[3]==$canditate11){
				$count11+=11;
			}else if($epilogh[3]==$canditate12){
				$count12+=11;
			}else if($epilogh[3]==$canditate13){
				$count13+=11;
			}else if($epilogh[3]==$canditate14){
				$count14+=11;
			}else if($epilogh[3]==$canditate15){
				$count15+=11;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=10;
			}else if($epilogh[4]==$canditate2){
				$count2+=10;
			}else if($epilogh[4]==$canditate3){
				$count3+=10;
			}else if($epilogh[4]==$canditate4){
				$count4+=10;
			}else if($epilogh[4]==$canditate5){
				$count5+=10;	
			}else if($epilogh[4]==$canditate6){
				$count6+=10;
			}else if($epilogh[4]==$canditate7){
				$count7+=10;
			}else if($epilogh[4]==$canditate8){
				$count8+=10;
			}else if($epilogh[4]==$canditate9){
				$count9+=10;
			}else if($epilogh[4]==$canditate10){
				$count10+=10;
			}else if($epilogh[4]==$canditate11){
				$count11+=10;
			}else if($epilogh[4]==$canditate12){
				$count12+=10;
			}else if($epilogh[4]==$canditate13){
				$count13+=10;
			}else if($epilogh[4]==$canditate14){
				$count14+=10;
			}else if($epilogh[4]==$canditate15){
				$count15+=10;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=9;
			}else if($epilogh[5]==$canditate2){
				$count2+=9;
			}else if($epilogh[5]==$canditate3){
				$count3+=9;
			}else if($epilogh[5]==$canditate4){
				$count4+=9;
			}else if($epilogh[5]==$canditate5){
				$count5+=9;	
			}else if($epilogh[5]==$canditate6){
				$count6+=9;	
			}else if($epilogh[5]==$canditate7){
				$count7+=9;
			}else if($epilogh[5]==$canditate8){
				$count8+=9;
			}else if($epilogh[5]==$canditate9){
				$count9+=9;
			}else if($epilogh[5]==$canditate10){
				$count10+=9;
			}else if($epilogh[5]==$canditate11){
				$count11+=9;
			}else if($epilogh[5]==$canditate12){
				$count12+=9;
			}else if($epilogh[5]==$canditate13){
				$count13+=9;
			}else if($epilogh[5]==$canditate14){
				$count14+=9;
			}else if($epilogh[5]==$canditate15){
				$count15+=9;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=8;
			}else if($epilogh[6]==$canditate2){
				$count2+=8;
			}else if($epilogh[6]==$canditate3){
				$count3+=8;
			}else if($epilogh[6]==$canditate4){
				$count4+=8;
			}else if($epilogh[6]==$canditate5){
				$count5+=8;	
			}else if($epilogh[6]==$canditate6){
				$count6+=8;	
			}else if($epilogh[6]==$canditate7){
				$count7+=8;	
			}else if($epilogh[6]==$canditate8){
				$count8+=8;
			}else if($epilogh[6]==$canditate9){
				$count9+=8;
			}else if($epilogh[6]==$canditate10){
				$count10+=8;
			}else if($epilogh[6]==$canditate11){
				$count11+=8;
			}else if($epilogh[6]==$canditate12){
				$count12+=8;
			}else if($epilogh[6]==$canditate13){
				$count13+=8;
			}else if($epilogh[6]==$canditate14){
				$count14+=8;
			}else if($epilogh[6]==$canditate15){
				$count15+=8;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=7;
			}else if($epilogh[7]==$canditate2){
				$count2+=7;
			}else if($epilogh[7]==$canditate3){
				$count3+=7;
			}else if($epilogh[7]==$canditate4){
				$count4+=7;
			}else if($epilogh[7]==$canditate5){
				$count5+=7;	
			}else if($epilogh[7]==$canditate6){
				$count6+=7;	
			}else if($epilogh[7]==$canditate7){
				$count7+=7;	
			}else if($epilogh[7]==$canditate8){
				$count8+=7;	
			}else if($epilogh[7]==$canditate9){
				$count9+=7;
			}else if($epilogh[7]==$canditate10){
				$count10+=7;
			}else if($epilogh[7]==$canditate11){
				$count11+=7;
			}else if($epilogh[7]==$canditate12){
				$count12+=7;
			}else if($epilogh[7]==$canditate13){
				$count13+=7;
			}else if($epilogh[7]==$canditate14){
				$count14+=7;
			}else if($epilogh[7]==$canditate15){
				$count15+=7;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=6;
			}else if($epilogh[8]==$canditate2){
				$count2+=6;
			}else if($epilogh[8]==$canditate3){
				$count3+=6;
			}else if($epilogh[8]==$canditate4){
				$count4+=6;
			}else if($epilogh[8]==$canditate5){
				$count5+=6;	
			}else if($epilogh[8]==$canditate6){
				$count6+=6;	
			}else if($epilogh[8]==$canditate7){
				$count7+=6;	
			}else if($epilogh[8]==$canditate8){
				$count8+=6;	
			}else if($epilogh[8]==$canditate9){
				$count9+=6;	
			}else if($epilogh[8]==$canditate10){
				$count10+=6;
			}else if($epilogh[8]==$canditate11){
				$count11+=6;
			}else if($epilogh[8]==$canditate12){
				$count12+=6;
			}else if($epilogh[8]==$canditate13){
				$count13+=6;
			}else if($epilogh[8]==$canditate14){
				$count14+=6;
			}else if($epilogh[8]==$canditate15){
				$count15+=6;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=5;
			}else if($epilogh[9]==$canditate2){
				$count2+=5;
			}else if($epilogh[9]==$canditate3){
				$count3+=5;
			}else if($epilogh[9]==$canditate4){
				$count4+=5;
			}else if($epilogh[9]==$canditate5){
				$count5+=5;	
			}else if($epilogh[9]==$canditate6){
				$count6+=5;	
			}else if($epilogh[9]==$canditate7){
				$count7+=5;	
			}else if($epilogh[9]==$canditate8){
				$count8+=5;	
			}else if($epilogh[9]==$canditate9){
				$count9+=5;	
			}else if($epilogh[9]==$canditate10){
				$count10+=5;	
			}else if($epilogh[9]==$canditate11){
				$count11+=5;
			}else if($epilogh[9]==$canditate12){
				$count12+=5;
			}else if($epilogh[9]==$canditate13){
				$count13+=5;
			}else if($epilogh[9]==$canditate14){
				$count14+=5;
			}else if($epilogh[9]==$canditate15){
				$count15+=5;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=4;
			}else if($epilogh[10]==$canditate2){
				$count2+=4;
			}else if($epilogh[10]==$canditate3){
				$count3+=4;
			}else if($epilogh[10]==$canditate4){
				$count4+=4;
			}else if($epilogh[10]==$canditate5){
				$count5+=4;	
			}else if($epilogh[10]==$canditate6){
				$count6+=4;	
			}else if($epilogh[10]==$canditate7){
				$count7+=4;	
			}else if($epilogh[10]==$canditate8){
				$count8+=4;	
			}else if($epilogh[10]==$canditate9){
				$count9+=4;	
			}else if($epilogh[10]==$canditate10){
				$count10+=4;	
			}else if($epilogh[10]==$canditate11){
				$count11+=4;	
			}else if($epilogh[10]==$canditate12){
				$count12+=4;
			}else if($epilogh[10]==$canditate13){
				$count13+=4;
			}else if($epilogh[10]==$canditate14){
				$count14+=4;
			}else if($epilogh[10]==$canditate15){
				$count15+=4;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=3;
			}else if($epilogh[11]==$canditate2){
				$count2+=3;
			}else if($epilogh[11]==$canditate3){
				$count3+=3;
			}else if($epilogh[11]==$canditate4){
				$count4+=3;
			}else if($epilogh[11]==$canditate5){
				$count5+=3;	
			}else if($epilogh[11]==$canditate6){
				$count6+=3;	
			}else if($epilogh[11]==$canditate7){
				$count7+=3;	
			}else if($epilogh[11]==$canditate8){
				$count8+=3;	
			}else if($epilogh[11]==$canditate9){
				$count9+=3;	
			}else if($epilogh[11]==$canditate10){
				$count10+=3;	
			}else if($epilogh[11]==$canditate11){
				$count11+=3;	
			}else if($epilogh[11]==$canditate12){
				$count12+=3;	
			}else if($epilogh[11]==$canditate13){
				$count13+=3;
			}else if($epilogh[11]==$canditate14){
				$count14+=3;
			}else if($epilogh[11]==$canditate15){
				$count15+=3;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=2;
			}else if($epilogh[12]==$canditate2){
				$count2+=2;
			}else if($epilogh[12]==$canditate3){
				$count3+=2;
			}else if($epilogh[12]==$canditate4){
				$count4+=2;
			}else if($epilogh[12]==$canditate5){
				$count5+=2;	
			}else if($epilogh[12]==$canditate6){
				$count6+=2;	
			}else if($epilogh[12]==$canditate7){
				$count7+=2;	
			}else if($epilogh[12]==$canditate8){
				$count8+=2;	
			}else if($epilogh[12]==$canditate9){
				$count9+=2;	
			}else if($epilogh[12]==$canditate10){
				$count10+=2;	
			}else if($epilogh[12]==$canditate11){
				$count11+=2;	
			}else if($epilogh[12]==$canditate12){
				$count12+=2;	
			}else if($epilogh[12]==$canditate13){
				$count13+=2;	
			}else if($epilogh[12]==$canditate14){
				$count14+=2;
			}else if($epilogh[12]==$canditate15){
				$count15+=2;
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate1){
				$count1+=1;
			}else if($epilogh[13]==$canditate2){
				$count2+=1;
			}else if($epilogh[13]==$canditate3){
				$count3+=1;
			}else if($epilogh[13]==$canditate4){
				$count4+=1;
			}else if($epilogh[13]==$canditate5){
				$count5+=1;	
			}else if($epilogh[13]==$canditate6){
				$count6+=1;	
			}else if($epilogh[13]==$canditate7){
				$count7+=1;	
			}else if($epilogh[13]==$canditate8){
				$count8+=1;	
			}else if($epilogh[13]==$canditate9){
				$count9+=1;	
			}else if($epilogh[13]==$canditate10){
				$count10+=1;	
			}else if($epilogh[13]==$canditate11){
				$count11+=1;	
			}else if($epilogh[13]==$canditate12){
				$count12+=1;	
			}else if($epilogh[13]==$canditate13){
				$count13+=1;	
			}else if($epilogh[13]==$canditate14){
				$count14+=1;	
			}else if($epilogh[13]==$canditate15){
				$count15+=1;
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate1){
				$count1+=0;
			}else if($epilogh[14]==$canditate2){
				$count2+=0;
			}else if($epilogh[14]==$canditate3){
				$count3+=0;
			}else if($epilogh[14]==$canditate4){
				$count4+=0;
			}else if($epilogh[14]==$canditate5){
				$count5+=0;	
			}else if($epilogh[14]==$canditate6){
				$count6+=0;	
			}else if($epilogh[14]==$canditate7){
				$count7+=0;	
			}else if($epilogh[14]==$canditate8){
				$count8+=0;	
			}else if($epilogh[14]==$canditate9){
				$count9+=0;	
			}else if($epilogh[14]==$canditate10){
				$count10+=0;	
			}else if($epilogh[14]==$canditate11){
				$count11+=0;	
			}else if($epilogh[14]==$canditate12){
				$count12+=0;	
			}else if($epilogh[14]==$canditate13){
				$count13+=0;	
			}else if($epilogh[14]==$canditate14){
				$count14+=0;	
			}else if($epilogh[14]==$canditate15){
				$count15+=0;	
			}
		}
	}
	if ($i2==16){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=15;
			}else if($epilogh[0]==$canditate2){
				$count2+=15;
			}else if($epilogh[0]==$canditate3){
				$count3+=15;
			}else if($epilogh[0]==$canditate4){
				$count4+=15;
			}else if($epilogh[0]==$canditate5){
				$count5+=15;
			}else if($epilogh[0]==$canditate6){
				$count6+=15;
			}else if($epilogh[0]==$canditate7){
				$count7+=15;
			}else if($epilogh[0]==$canditate8){
				$count8+=15;
			}else if($epilogh[0]==$canditate9){
				$count9+=15;
			}else if($epilogh[0]==$canditate10){
				$count10+=15;
			}else if($epilogh[0]==$canditate11){
				$count11+=15;
			}else if($epilogh[0]==$canditate12){
				$count12+=15;
			}else if($epilogh[0]==$canditate13){
				$count13+=15;
			}else if($epilogh[0]==$canditate14){
				$count14+=15;
			}else if($epilogh[0]==$canditate15){
				$count15+=15;
			}else if($epilogh[0]==$canditate16){
				$count16+=15;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=14;
			}else if($epilogh[1]==$canditate2){
				$count2+=14;
			}else if($epilogh[1]==$canditate3){
				$count3+=14;
			}else if($epilogh[1]==$canditate4){
				$count4+=14;
			}else if($epilogh[1]==$canditate5){
				$count5+=14;
			}else if($epilogh[1]==$canditate6){
				$count6+=14;
			}else if($epilogh[1]==$canditate7){
				$count7+=14;
			}else if($epilogh[1]==$canditate8){
				$count8+=14;
			}else if($epilogh[1]==$canditate9){
				$count9+=14;
			}else if($epilogh[1]==$canditate10){
				$count10+=14;
			}else if($epilogh[1]==$canditate11){
				$count11+=14;
			}else if($epilogh[1]==$canditate12){
				$count12+=14;
			}else if($epilogh[1]==$canditate13){
				$count13+=14;
			}else if($epilogh[1]==$canditate14){
				$count14+=14;
			}else if($epilogh[1]==$canditate15){
				$count15+=14;
			}else if($epilogh[1]==$canditate16){
				$count16+=14;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=13;
			}else if($epilogh[2]==$canditate2){
				$count2+=13;
			}else if($epilogh[2]==$canditate3){
				$count3+=13;
			}else if($epilogh[2]==$canditate4){
				$count4+=13;
			}else if($epilogh[2]==$canditate5){
				$count5+=13;
			}else if($epilogh[2]==$canditate6){
				$count6+=13;
			}else if($epilogh[2]==$canditate7){
				$count7+=13;
			}else if($epilogh[2]==$canditate8){
				$count8+=13;
			}else if($epilogh[2]==$canditate9){
				$count9+=13;
			}else if($epilogh[2]==$canditate10){
				$count10+=13;
			}else if($epilogh[2]==$canditate11){
				$count11+=13;
			}else if($epilogh[2]==$canditate12){
				$count12+=13;
			}else if($epilogh[2]==$canditate13){
				$count13+=13;
			}else if($epilogh[2]==$canditate14){
				$count14+=13;
			}else if($epilogh[2]==$canditate15){
				$count15+=13;
			}else if($epilogh[2]==$canditate16){
				$count16+=13;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=12;
			}else if($epilogh[3]==$canditate2){
				$count2+=12;
			}else if($epilogh[3]==$canditate3){
				$count3+=12;
			}else if($epilogh[3]==$canditate4){
				$count4+=12;
			}else if($epilogh[3]==$canditate5){
				$count5+=12;
			}else if($epilogh[3]==$canditate6){
				$count6+=12;
			}else if($epilogh[3]==$canditate7){
				$count7+=12;
			}else if($epilogh[3]==$canditate8){
				$count8+=12;
			}else if($epilogh[3]==$canditate9){
				$count9+=12;
			}else if($epilogh[3]==$canditate10){
				$count10+=12;
			}else if($epilogh[3]==$canditate11){
				$count11+=12;
			}else if($epilogh[3]==$canditate12){
				$count12+=12;
			}else if($epilogh[3]==$canditate13){
				$count13+=12;
			}else if($epilogh[3]==$canditate14){
				$count14+=12;
			}else if($epilogh[3]==$canditate15){
				$count15+=12;
			}else if($epilogh[3]==$canditate16){
				$count16+=12;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=11;
			}else if($epilogh[4]==$canditate2){
				$count2+=11;
			}else if($epilogh[4]==$canditate3){
				$count3+=11;
			}else if($epilogh[4]==$canditate4){
				$count4+=11;
			}else if($epilogh[4]==$canditate5){
				$count5+=11;	
			}else if($epilogh[4]==$canditate6){
				$count6+=11;
			}else if($epilogh[4]==$canditate7){
				$count7+=11;
			}else if($epilogh[4]==$canditate8){
				$count8+=11;
			}else if($epilogh[4]==$canditate9){
				$count9+=11;
			}else if($epilogh[4]==$canditate10){
				$count10+=11;
			}else if($epilogh[4]==$canditate11){
				$count11+=11;
			}else if($epilogh[4]==$canditate12){
				$count12+=11;
			}else if($epilogh[4]==$canditate13){
				$count13+=11;
			}else if($epilogh[4]==$canditate14){
				$count14+=11;
			}else if($epilogh[4]==$canditate15){
				$count15+=11;
			}else if($epilogh[4]==$canditate16){
				$count16+=11;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=10;
			}else if($epilogh[5]==$canditate2){
				$count2+=10;
			}else if($epilogh[5]==$canditate3){
				$count3+=10;
			}else if($epilogh[5]==$canditate4){
				$count4+=10;
			}else if($epilogh[5]==$canditate5){
				$count5+=10;	
			}else if($epilogh[5]==$canditate6){
				$count6+=10;	
			}else if($epilogh[5]==$canditate7){
				$count7+=10;
			}else if($epilogh[5]==$canditate8){
				$count8+=10;
			}else if($epilogh[5]==$canditate9){
				$count9+=10;
			}else if($epilogh[5]==$canditate10){
				$count10+=10;
			}else if($epilogh[5]==$canditate11){
				$count11+=10;
			}else if($epilogh[5]==$canditate12){
				$count12+=10;
			}else if($epilogh[5]==$canditate13){
				$count13+=10;
			}else if($epilogh[5]==$canditate14){
				$count14+=10;
			}else if($epilogh[5]==$canditate15){
				$count15+=10;
			}else if($epilogh[5]==$canditate16){
				$count16+=10;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=9;
			}else if($epilogh[6]==$canditate2){
				$count2+=9;
			}else if($epilogh[6]==$canditate3){
				$count3+=9;
			}else if($epilogh[6]==$canditate4){
				$count4+=9;
			}else if($epilogh[6]==$canditate5){
				$count5+=9;	
			}else if($epilogh[6]==$canditate6){
				$count6+=9;	
			}else if($epilogh[6]==$canditate7){
				$count7+=9;	
			}else if($epilogh[6]==$canditate8){
				$count8+=9;
			}else if($epilogh[6]==$canditate9){
				$count9+=9;
			}else if($epilogh[6]==$canditate10){
				$count10+=9;
			}else if($epilogh[6]==$canditate11){
				$count11+=9;
			}else if($epilogh[6]==$canditate12){
				$count12+=9;
			}else if($epilogh[6]==$canditate13){
				$count13+=9;
			}else if($epilogh[6]==$canditate14){
				$count14+=9;
			}else if($epilogh[6]==$canditate15){
				$count15+=9;
			}else if($epilogh[6]==$canditate16){
				$count16+=9;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=8;
			}else if($epilogh[7]==$canditate2){
				$count2+=8;
			}else if($epilogh[7]==$canditate3){
				$count3+=8;
			}else if($epilogh[7]==$canditate4){
				$count4+=8;
			}else if($epilogh[7]==$canditate5){
				$count5+=8;	
			}else if($epilogh[7]==$canditate6){
				$count6+=8;	
			}else if($epilogh[7]==$canditate7){
				$count7+=8;	
			}else if($epilogh[7]==$canditate8){
				$count8+=8;	
			}else if($epilogh[7]==$canditate9){
				$count9+=8;
			}else if($epilogh[7]==$canditate10){
				$count10+=8;
			}else if($epilogh[7]==$canditate11){
				$count11+=8;
			}else if($epilogh[7]==$canditate12){
				$count12+=8;
			}else if($epilogh[7]==$canditate13){
				$count13+=8;
			}else if($epilogh[7]==$canditate14){
				$count14+=8;
			}else if($epilogh[7]==$canditate15){
				$count15+=8;
			}else if($epilogh[7]==$canditate16){
				$count16+=8;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=7;
			}else if($epilogh[8]==$canditate2){
				$count2+=7;
			}else if($epilogh[8]==$canditate3){
				$count3+=7;
			}else if($epilogh[8]==$canditate4){
				$count4+=7;
			}else if($epilogh[8]==$canditate5){
				$count5+=7;	
			}else if($epilogh[8]==$canditate6){
				$count6+=7;	
			}else if($epilogh[8]==$canditate7){
				$count7+=7;	
			}else if($epilogh[8]==$canditate8){
				$count8+=7;	
			}else if($epilogh[8]==$canditate9){
				$count9+=7;	
			}else if($epilogh[8]==$canditate10){
				$count10+=7;
			}else if($epilogh[8]==$canditate11){
				$count11+=7;
			}else if($epilogh[8]==$canditate12){
				$count12+=7;
			}else if($epilogh[8]==$canditate13){
				$count13+=7;
			}else if($epilogh[8]==$canditate14){
				$count14+=7;
			}else if($epilogh[8]==$canditate15){
				$count15+=7;
			}else if($epilogh[8]==$canditate16){
				$count16+=7;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=6;
			}else if($epilogh[9]==$canditate2){
				$count2+=6;
			}else if($epilogh[9]==$canditate3){
				$count3+=6;
			}else if($epilogh[9]==$canditate4){
				$count4+=6;
			}else if($epilogh[9]==$canditate5){
				$count5+=6;	
			}else if($epilogh[9]==$canditate6){
				$count6+=6;	
			}else if($epilogh[9]==$canditate7){
				$count7+=6;	
			}else if($epilogh[9]==$canditate8){
				$count8+=6;	
			}else if($epilogh[9]==$canditate9){
				$count9+=6;	
			}else if($epilogh[9]==$canditate10){
				$count10+=6;	
			}else if($epilogh[9]==$canditate11){
				$count11+=6;
			}else if($epilogh[9]==$canditate12){
				$count12+=6;
			}else if($epilogh[9]==$canditate13){
				$count13+=6;
			}else if($epilogh[9]==$canditate14){
				$count14+=6;
			}else if($epilogh[9]==$canditate15){
				$count15+=6;
			}else if($epilogh[9]==$canditate16){
				$count16+=6;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=5;
			}else if($epilogh[10]==$canditate2){
				$count2+=5;
			}else if($epilogh[10]==$canditate3){
				$count3+=5;
			}else if($epilogh[10]==$canditate4){
				$count4+=5;
			}else if($epilogh[10]==$canditate5){
				$count5+=5;	
			}else if($epilogh[10]==$canditate6){
				$count6+=5;	
			}else if($epilogh[10]==$canditate7){
				$count7+=5;	
			}else if($epilogh[10]==$canditate8){
				$count8+=5;	
			}else if($epilogh[10]==$canditate9){
				$count9+=5;	
			}else if($epilogh[10]==$canditate10){
				$count10+=5;	
			}else if($epilogh[10]==$canditate11){
				$count11+=5;	
			}else if($epilogh[10]==$canditate12){
				$count12+=5;
			}else if($epilogh[10]==$canditate13){
				$count13+=5;
			}else if($epilogh[10]==$canditate14){
				$count14+=5;
			}else if($epilogh[10]==$canditate15){
				$count15+=5;
			}else if($epilogh[10]==$canditate16){
				$count16+=5;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=4;
			}else if($epilogh[11]==$canditate2){
				$count2+=4;
			}else if($epilogh[11]==$canditate3){
				$count3+=4;
			}else if($epilogh[11]==$canditate4){
				$count4+=4;
			}else if($epilogh[11]==$canditate5){
				$count5+=4;	
			}else if($epilogh[11]==$canditate6){
				$count6+=4;	
			}else if($epilogh[11]==$canditate7){
				$count7+=4;	
			}else if($epilogh[11]==$canditate8){
				$count8+=4;	
			}else if($epilogh[11]==$canditate9){
				$count9+=4;	
			}else if($epilogh[11]==$canditate10){
				$count10+=4;	
			}else if($epilogh[11]==$canditate11){
				$count11+=4;	
			}else if($epilogh[11]==$canditate12){
				$count12+=4;	
			}else if($epilogh[11]==$canditate13){
				$count13+=4;
			}else if($epilogh[11]==$canditate14){
				$count14+=4;
			}else if($epilogh[11]==$canditate15){
				$count15+=4;
			}else if($epilogh[11]==$canditate16){
				$count16+=4;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=3;
			}else if($epilogh[12]==$canditate2){
				$count2+=3;
			}else if($epilogh[12]==$canditate3){
				$count3+=3;
			}else if($epilogh[12]==$canditate4){
				$count4+=3;
			}else if($epilogh[12]==$canditate5){
				$count5+=3;	
			}else if($epilogh[12]==$canditate6){
				$count6+=3;	
			}else if($epilogh[12]==$canditate7){
				$count7+=3;	
			}else if($epilogh[12]==$canditate8){
				$count8+=3;	
			}else if($epilogh[12]==$canditate9){
				$count9+=3;	
			}else if($epilogh[12]==$canditate10){
				$count10+=3;	
			}else if($epilogh[12]==$canditate11){
				$count11+=3;	
			}else if($epilogh[12]==$canditate12){
				$count12+=3;	
			}else if($epilogh[12]==$canditate13){
				$count13+=3;	
			}else if($epilogh[12]==$canditate14){
				$count14+=3;
			}else if($epilogh[12]==$canditate15){
				$count15+=3;
			}else if($epilogh[12]==$canditate16){
				$count16+=3;
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate1){
				$count1+=2;
			}else if($epilogh[13]==$canditate2){
				$count2+=2;
			}else if($epilogh[13]==$canditate3){
				$count3+=2;
			}else if($epilogh[13]==$canditate4){
				$count4+=2;
			}else if($epilogh[13]==$canditate5){
				$count5+=2;	
			}else if($epilogh[13]==$canditate6){
				$count6+=2;	
			}else if($epilogh[13]==$canditate7){
				$count7+=2;	
			}else if($epilogh[13]==$canditate8){
				$count8+=2;	
			}else if($epilogh[13]==$canditate9){
				$count9+=2;	
			}else if($epilogh[13]==$canditate10){
				$count10+=2;	
			}else if($epilogh[13]==$canditate11){
				$count11+=2;	
			}else if($epilogh[13]==$canditate12){
				$count12+=2;	
			}else if($epilogh[13]==$canditate13){
				$count13+=2;	
			}else if($epilogh[13]==$canditate14){
				$count14+=2;	
			}else if($epilogh[13]==$canditate15){
				$count15+=2;
			}else if($epilogh[13]==$canditate16){
				$count16+=2;
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate1){
				$count1+=1;
			}else if($epilogh[14]==$canditate2){
				$count2+=1;
			}else if($epilogh[14]==$canditate3){
				$count3+=1;
			}else if($epilogh[14]==$canditate4){
				$count4+=1;
			}else if($epilogh[14]==$canditate5){
				$count5+=1;	
			}else if($epilogh[14]==$canditate6){
				$count6+=1;	
			}else if($epilogh[14]==$canditate7){
				$count7+=1;	
			}else if($epilogh[14]==$canditate8){
				$count8+=1;	
			}else if($epilogh[14]==$canditate9){
				$count9+=1;	
			}else if($epilogh[14]==$canditate10){
				$count10+=1;	
			}else if($epilogh[14]==$canditate11){
				$count11+=1;	
			}else if($epilogh[14]==$canditate12){
				$count12+=1;	
			}else if($epilogh[14]==$canditate13){
				$count13+=1;	
			}else if($epilogh[14]==$canditate14){
				$count14+=1;	
			}else if($epilogh[14]==$canditate15){
				$count15+=1;	
			}else if($epilogh[14]==$canditate16){
				$count16+=1;
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate1){
				$count1+=0;
			}else if($epilogh[15]==$canditate2){
				$count2+=0;
			}else if($epilogh[15]==$canditate3){
				$count3+=0;
			}else if($epilogh[15]==$canditate4){
				$count4+=0;
			}else if($epilogh[15]==$canditate5){
				$count5+=0;	
			}else if($epilogh[15]==$canditate6){
				$count6+=0;	
			}else if($epilogh[15]==$canditate7){
				$count7+=0;	
			}else if($epilogh[15]==$canditate8){
				$count8+=0;	
			}else if($epilogh[15]==$canditate9){
				$count9+=0;	
			}else if($epilogh[15]==$canditate10){
				$count10+=0;	
			}else if($epilogh[15]==$canditate11){
				$count11+=0;	
			}else if($epilogh[15]==$canditate12){
				$count12+=0;	
			}else if($epilogh[15]==$canditate13){
				$count13+=0;	
			}else if($epilogh[15]==$canditate14){
				$count14+=0;	
			}else if($epilogh[15]==$canditate15){
				$count15+=0;	
			}else if($epilogh[15]==$canditate16){
				$count16+=0;	
			}
		}
	}
	if ($i2==17{
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=16;
			}else if($epilogh[0]==$canditate2){
				$count2+=16;
			}else if($epilogh[0]==$canditate3){
				$count3+=16;
			}else if($epilogh[0]==$canditate4){
				$count4+=16;
			}else if($epilogh[0]==$canditate5){
				$count5+=16;
			}else if($epilogh[0]==$canditate6){
				$count6+=16;
			}else if($epilogh[0]==$canditate7){
				$count7+=16;
			}else if($epilogh[0]==$canditate8){
				$count8+=16;
			}else if($epilogh[0]==$canditate9){
				$count9+=16;
			}else if($epilogh[0]==$canditate10){
				$count10+=16;
			}else if($epilogh[0]==$canditate11){
				$count11+=16;
			}else if($epilogh[0]==$canditate12){
				$count12+=16;
			}else if($epilogh[0]==$canditate13){
				$count13+=16;
			}else if($epilogh[0]==$canditate14){
				$count14+=16;
			}else if($epilogh[0]==$canditate15){
				$count15+=16;
			}else if($epilogh[0]==$canditate16){
				$count16+=16;
			}else if($epilogh[0]==$canditate17){
				$count17+=16;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=15;
			}else if($epilogh[1]==$canditate2){
				$count2+=15;
			}else if($epilogh[1]==$canditate3){
				$count3+=15;
			}else if($epilogh[1]==$canditate4){
				$count4+=15;
			}else if($epilogh[1]==$canditate5){
				$count5+=15;
			}else if($epilogh[1]==$canditate6){
				$count6+=15;
			}else if($epilogh[1]==$canditate7){
				$count7+=15;
			}else if($epilogh[1]==$canditate8){
				$count8+=15;
			}else if($epilogh[1]==$canditate9){
				$count9+=15;
			}else if($epilogh[1]==$canditate10){
				$count10+=15;
			}else if($epilogh[1]==$canditate11){
				$count11+=15;
			}else if($epilogh[1]==$canditate12){
				$count12+=15;
			}else if($epilogh[1]==$canditate13){
				$count13+=15;
			}else if($epilogh[1]==$canditate14){
				$count14+=15;
			}else if($epilogh[1]==$canditate15){
				$count15+=15;
			}else if($epilogh[1]==$canditate16){
				$count16+=15;
			}else if($epilogh[1]==$canditate17){
				$count17+=15;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=14;
			}else if($epilogh[2]==$canditate2){
				$count2+=14;
			}else if($epilogh[2]==$canditate3){
				$count3+=14;
			}else if($epilogh[2]==$canditate4){
				$count4+=14;
			}else if($epilogh[2]==$canditate5){
				$count5+=14;
			}else if($epilogh[2]==$canditate6){
				$count6+=14;
			}else if($epilogh[2]==$canditate7){
				$count7+=14;
			}else if($epilogh[2]==$canditate8){
				$count8+=14;
			}else if($epilogh[2]==$canditate9){
				$count9+=14;
			}else if($epilogh[2]==$canditate10){
				$count10+=14;
			}else if($epilogh[2]==$canditate11){
				$count11+=14;
			}else if($epilogh[2]==$canditate12){
				$count12+=14;
			}else if($epilogh[2]==$canditate13){
				$count13+=14;
			}else if($epilogh[2]==$canditate14){
				$count14+=14;
			}else if($epilogh[2]==$canditate15){
				$count15+=14;
			}else if($epilogh[2]==$canditate16){
				$count16+=14;
			}else if($epilogh[2]==$canditate17){
				$count17+=14;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=13;
			}else if($epilogh[3]==$canditate2){
				$count2+=13;
			}else if($epilogh[3]==$canditate3){
				$count3+=13;
			}else if($epilogh[3]==$canditate4){
				$count4+=13;
			}else if($epilogh[3]==$canditate5){
				$count5+=13;
			}else if($epilogh[3]==$canditate6){
				$count6+=13;
			}else if($epilogh[3]==$canditate7){
				$count7+=13;
			}else if($epilogh[3]==$canditate8){
				$count8+=13;
			}else if($epilogh[3]==$canditate9){
				$count9+=13;
			}else if($epilogh[3]==$canditate10){
				$count10+=13;
			}else if($epilogh[3]==$canditate11){
				$count11+=13;
			}else if($epilogh[3]==$canditate12){
				$count12+=13;
			}else if($epilogh[3]==$canditate13){
				$count13+=13;
			}else if($epilogh[3]==$canditate14){
				$count14+=13;
			}else if($epilogh[3]==$canditate15){
				$count15+=13;
			}else if($epilogh[3]==$canditate16){
				$count16+=13;
			}else if($epilogh[3]==$canditate17){
				$count17+=13;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=12;
			}else if($epilogh[4]==$canditate2){
				$count2+=12;
			}else if($epilogh[4]==$canditate3){
				$count3+=12;
			}else if($epilogh[4]==$canditate4){
				$count4+=12;
			}else if($epilogh[4]==$canditate5){
				$count5+=12;	
			}else if($epilogh[4]==$canditate6){
				$count6+=12;
			}else if($epilogh[4]==$canditate7){
				$count7+=12;
			}else if($epilogh[4]==$canditate8){
				$count8+=12;
			}else if($epilogh[4]==$canditate9){
				$count9+=12;
			}else if($epilogh[4]==$canditate10){
				$count10+=12;
			}else if($epilogh[4]==$canditate11){
				$count11+=12;
			}else if($epilogh[4]==$canditate12){
				$count12+=12;
			}else if($epilogh[4]==$canditate13){
				$count13+=12;
			}else if($epilogh[4]==$canditate14){
				$count14+=12;
			}else if($epilogh[4]==$canditate15){
				$count15+=12;
			}else if($epilogh[4]==$canditate16){
				$count16+=12;
			}else if($epilogh[4]==$canditate17){
				$count17+=12;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=11;
			}else if($epilogh[5]==$canditate2){
				$count2+=11;
			}else if($epilogh[5]==$canditate3){
				$count3+=11;
			}else if($epilogh[5]==$canditate4){
				$count4+=11;
			}else if($epilogh[5]==$canditate5){
				$count5+=11;	
			}else if($epilogh[5]==$canditate6){
				$count6+=11;	
			}else if($epilogh[5]==$canditate7){
				$count7+=11;
			}else if($epilogh[5]==$canditate8){
				$count8+=11;
			}else if($epilogh[5]==$canditate9){
				$count9+=11;
			}else if($epilogh[5]==$canditate10){
				$count10+=11;
			}else if($epilogh[5]==$canditate11){
				$count11+=11;
			}else if($epilogh[5]==$canditate12){
				$count12+=11;
			}else if($epilogh[5]==$canditate13){
				$count13+=11;
			}else if($epilogh[5]==$canditate14){
				$count14+=11;
			}else if($epilogh[5]==$canditate15){
				$count15+=11;
			}else if($epilogh[5]==$canditate16){
				$count16+=11;
			}else if($epilogh[5]==$canditate17){
				$count17+=11;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=10;
			}else if($epilogh[6]==$canditate2){
				$count2+=10;
			}else if($epilogh[6]==$canditate3){
				$count3+=10;
			}else if($epilogh[6]==$canditate4){
				$count4+=10;
			}else if($epilogh[6]==$canditate5){
				$count5+=10;	
			}else if($epilogh[6]==$canditate6){
				$count6+=10;	
			}else if($epilogh[6]==$canditate7){
				$count7+=10;	
			}else if($epilogh[6]==$canditate8){
				$count8+=10;
			}else if($epilogh[6]==$canditate9){
				$count9+=10;
			}else if($epilogh[6]==$canditate10){
				$count10+=10;
			}else if($epilogh[6]==$canditate11){
				$count11+=10;
			}else if($epilogh[6]==$canditate12){
				$count12+=10;
			}else if($epilogh[6]==$canditate13){
				$count13+=10;
			}else if($epilogh[6]==$canditate14){
				$count14+=10;
			}else if($epilogh[6]==$canditate15){
				$count15+=10;
			}else if($epilogh[6]==$canditate16){
				$count16+=10;
			}else if($epilogh[6]==$canditate17){
				$count17+=10;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=9;
			}else if($epilogh[7]==$canditate2){
				$count2+=9;
			}else if($epilogh[7]==$canditate3){
				$count3+=9;
			}else if($epilogh[7]==$canditate4){
				$count4+=9;
			}else if($epilogh[7]==$canditate5){
				$count5+=9;	
			}else if($epilogh[7]==$canditate6){
				$count6+=9;	
			}else if($epilogh[7]==$canditate7){
				$count7+=9;	
			}else if($epilogh[7]==$canditate8){
				$count8+=9;	
			}else if($epilogh[7]==$canditate9){
				$count9+=9;
			}else if($epilogh[7]==$canditate10){
				$count10+=9;
			}else if($epilogh[7]==$canditate11){
				$count11+=9;
			}else if($epilogh[7]==$canditate12){
				$count12+=9;
			}else if($epilogh[7]==$canditate13){
				$count13+=9;
			}else if($epilogh[7]==$canditate14){
				$count14+=9;
			}else if($epilogh[7]==$canditate15){
				$count15+=9;
			}else if($epilogh[7]==$canditate16){
				$count16+=9;
			}else if($epilogh[7]==$canditate17){
				$count17+=9;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=8;
			}else if($epilogh[8]==$canditate2){
				$count2+=8;
			}else if($epilogh[8]==$canditate3){
				$count3+=8;
			}else if($epilogh[8]==$canditate4){
				$count4+=8;
			}else if($epilogh[8]==$canditate5){
				$count5+=8;	
			}else if($epilogh[8]==$canditate6){
				$count6+=8;	
			}else if($epilogh[8]==$canditate7){
				$count7+=8;	
			}else if($epilogh[8]==$canditate8){
				$count8+=8;	
			}else if($epilogh[8]==$canditate9){
				$count9+=8;	
			}else if($epilogh[8]==$canditate10){
				$count10+=8;
			}else if($epilogh[8]==$canditate11){
				$count11+=8;
			}else if($epilogh[8]==$canditate12){
				$count12+=8;
			}else if($epilogh[8]==$canditate13){
				$count13+=8;
			}else if($epilogh[8]==$canditate14){
				$count14+=8;
			}else if($epilogh[8]==$canditate15){
				$count15+=8;
			}else if($epilogh[8]==$canditate16){
				$count16+=8;
			}else if($epilogh[8]==$canditate17){
				$count17+=8;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=7;
			}else if($epilogh[9]==$canditate2){
				$count2+=7;
			}else if($epilogh[9]==$canditate3){
				$count3+=7;
			}else if($epilogh[9]==$canditate4){
				$count4+=7;
			}else if($epilogh[9]==$canditate5){
				$count5+=7;	
			}else if($epilogh[9]==$canditate6){
				$count6+=7;	
			}else if($epilogh[9]==$canditate7){
				$count7+=7;	
			}else if($epilogh[9]==$canditate8){
				$count8+=7;	
			}else if($epilogh[9]==$canditate9){
				$count9+=7;	
			}else if($epilogh[9]==$canditate10){
				$count10+=7;	
			}else if($epilogh[9]==$canditate11){
				$count11+=7;
			}else if($epilogh[9]==$canditate12){
				$count12+=7;
			}else if($epilogh[9]==$canditate13){
				$count13+=7;
			}else if($epilogh[9]==$canditate14){
				$count14+=7;
			}else if($epilogh[9]==$canditate15){
				$count15+=7;
			}else if($epilogh[9]==$canditate16){
				$count16+=7;
			}else if($epilogh[9]==$canditate17){
				$count17+=7;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=6;
			}else if($epilogh[10]==$canditate2){
				$count2+=6;
			}else if($epilogh[10]==$canditate3){
				$count3+=6;
			}else if($epilogh[10]==$canditate4){
				$count4+=6;
			}else if($epilogh[10]==$canditate5){
				$count5+=6;	
			}else if($epilogh[10]==$canditate6){
				$count6+=6;	
			}else if($epilogh[10]==$canditate7){
				$count7+=6;	
			}else if($epilogh[10]==$canditate8){
				$count8+=6;	
			}else if($epilogh[10]==$canditate9){
				$count9+=6;	
			}else if($epilogh[10]==$canditate10){
				$count10+=6;	
			}else if($epilogh[10]==$canditate11){
				$count11+=6;	
			}else if($epilogh[10]==$canditate12){
				$count12+=6;
			}else if($epilogh[10]==$canditate13){
				$count13+=6;
			}else if($epilogh[10]==$canditate14){
				$count14+=6;
			}else if($epilogh[10]==$canditate15){
				$count15+=6;
			}else if($epilogh[10]==$canditate16){
				$count16+=6;
			}else if($epilogh[10]==$canditate17){
				$count17+=6;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=5;
			}else if($epilogh[11]==$canditate2){
				$count2+=5;
			}else if($epilogh[11]==$canditate3){
				$count3+=5;
			}else if($epilogh[11]==$canditate4){
				$count4+=5;
			}else if($epilogh[11]==$canditate5){
				$count5+=5;	
			}else if($epilogh[11]==$canditate6){
				$count6+=5;	
			}else if($epilogh[11]==$canditate7){
				$count7+=5;	
			}else if($epilogh[11]==$canditate8){
				$count8+=5;	
			}else if($epilogh[11]==$canditate9){
				$count9+=5;	
			}else if($epilogh[11]==$canditate10){
				$count10+=5;	
			}else if($epilogh[11]==$canditate11){
				$count11+=5;	
			}else if($epilogh[11]==$canditate12){
				$count12+=5;	
			}else if($epilogh[11]==$canditate13){
				$count13+=5;
			}else if($epilogh[11]==$canditate14){
				$count14+=5;
			}else if($epilogh[11]==$canditate15){
				$count15+=5;
			}else if($epilogh[11]==$canditate16){
				$count16+=5;
			}else if($epilogh[11]==$canditate17){
				$count17+=5;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=4;
			}else if($epilogh[12]==$canditate2){
				$count2+=4;
			}else if($epilogh[12]==$canditate3){
				$count3+=4;
			}else if($epilogh[12]==$canditate4){
				$count4+=4;
			}else if($epilogh[12]==$canditate5){
				$count5+=4;	
			}else if($epilogh[12]==$canditate6){
				$count6+=4;	
			}else if($epilogh[12]==$canditate7){
				$count7+=4;	
			}else if($epilogh[12]==$canditate8){
				$count8+=4;	
			}else if($epilogh[12]==$canditate9){
				$count9+=4;	
			}else if($epilogh[12]==$canditate10){
				$count10+=4;	
			}else if($epilogh[12]==$canditate11){
				$count11+=4;	
			}else if($epilogh[12]==$canditate12){
				$count12+=4;	
			}else if($epilogh[12]==$canditate13){
				$count13+=4;	
			}else if($epilogh[12]==$canditate14){
				$count14+=4;
			}else if($epilogh[12]==$canditate15){
				$count15+=4;
			}else if($epilogh[12]==$canditate16){
				$count16+=4;
			}else if($epilogh[12]==$canditate17){
				$count17+=4;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate1){
				$count1+=3;
			}else if($epilogh[13]==$canditate2){
				$count2+=3;
			}else if($epilogh[13]==$canditate3){
				$count3+=3;
			}else if($epilogh[13]==$canditate4){
				$count4+=3;
			}else if($epilogh[13]==$canditate5){
				$count5+=3;	
			}else if($epilogh[13]==$canditate6){
				$count6+=3;	
			}else if($epilogh[13]==$canditate7){
				$count7+=3;	
			}else if($epilogh[13]==$canditate8){
				$count8+=3;	
			}else if($epilogh[13]==$canditate9){
				$count9+=3;	
			}else if($epilogh[13]==$canditate10){
				$count10+=3;	
			}else if($epilogh[13]==$canditate11){
				$count11+=3;	
			}else if($epilogh[13]==$canditate12){
				$count12+=3;	
			}else if($epilogh[13]==$canditate13){
				$count13+=3;	
			}else if($epilogh[13]==$canditate14){
				$count14+=3;	
			}else if($epilogh[13]==$canditate15){
				$count15+=3;
			}else if($epilogh[13]==$canditate16){
				$count16+=3;
			}else if($epilogh[13]==$canditate17){
				$count17+=3;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate1){
				$count1+=2;
			}else if($epilogh[14]==$canditate2){
				$count2+=2;
			}else if($epilogh[14]==$canditate3){
				$count3+=2;
			}else if($epilogh[14]==$canditate4){
				$count4+=2;
			}else if($epilogh[14]==$canditate5){
				$count5+=2;	
			}else if($epilogh[14]==$canditate6){
				$count6+=2;	
			}else if($epilogh[14]==$canditate7){
				$count7+=2;	
			}else if($epilogh[14]==$canditate8){
				$count8+=2;	
			}else if($epilogh[14]==$canditate9){
				$count9+=2;	
			}else if($epilogh[14]==$canditate10){
				$count10+=2;	
			}else if($epilogh[14]==$canditate11){
				$count11+=2;	
			}else if($epilogh[14]==$canditate12){
				$count12+=2;	
			}else if($epilogh[14]==$canditate13){
				$count13+=2;	
			}else if($epilogh[14]==$canditate14){
				$count14+=2;	
			}else if($epilogh[14]==$canditate15){
				$count15+=2;	
			}else if($epilogh[14]==$canditate16){
				$count16+=2;
			}else if($epilogh[14]==$canditate17){
				$count17+=2;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate1){
				$count1+=1;
			}else if($epilogh[15]==$canditate2){
				$count2+=1;
			}else if($epilogh[15]==$canditate3){
				$count3+=1;
			}else if($epilogh[15]==$canditate4){
				$count4+=1;
			}else if($epilogh[15]==$canditate5){
				$count5+=1;	
			}else if($epilogh[15]==$canditate6){
				$count6+=1;	
			}else if($epilogh[15]==$canditate7){
				$count7+=1;	
			}else if($epilogh[15]==$canditate8){
				$count8+=1;	
			}else if($epilogh[15]==$canditate9){
				$count9+=1;	
			}else if($epilogh[15]==$canditate10){
				$count10+=1;	
			}else if($epilogh[15]==$canditate11){
				$count11+=1;	
			}else if($epilogh[15]==$canditate12){
				$count12+=1;	
			}else if($epilogh[15]==$canditate13){
				$count13+=1;	
			}else if($epilogh[15]==$canditate14){
				$count14+=1;	
			}else if($epilogh[15]==$canditate15){
				$count15+=1;	
			}else if($epilogh[15]==$canditate16){
				$count16+=1;	
			}else if($epilogh[15]==$canditate17){
				$count17+=1;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate1){
				$count1+=0;
			}else if($epilogh[16]==$canditate2){
				$count2+=0;
			}else if($epilogh[16]==$canditate3){
				$count3+=0;
			}else if($epilogh[16]==$canditate4){
				$count4+=0;
			}else if($epilogh[16]==$canditate5){
				$count5+=0;	
			}else if($epilogh[16]==$canditate6){
				$count6+=0;	
			}else if($epilogh[16]==$canditate7){
				$count7+=0;	
			}else if($epilogh[16]==$canditate8){
				$count8+=0;	
			}else if($epilogh[16]==$canditate9){
				$count9+=0;	
			}else if($epilogh[16]==$canditate10){
				$count10+=0;	
			}else if($epilogh[16]==$canditate11){
				$count11+=0;	
			}else if($epilogh[16]==$canditate12){
				$count12+=0;	
			}else if($epilogh[16]==$canditate13){
				$count13+=0;	
			}else if($epilogh[16]==$canditate14){
				$count14+=0;	
			}else if($epilogh[16]==$canditate15){
				$count15+=0;	
			}else if($epilogh[16]==$canditate16){
				$count16+=0;	
			}else if($epilogh[16]==$canditate17){
				$count17+=0;	
			}
		}
	}
	if ($i2==18){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=17;
			}else if($epilogh[0]==$canditate2){
				$count2+=17;
			}else if($epilogh[0]==$canditate3){
				$count3+=17;
			}else if($epilogh[0]==$canditate4){
				$count4+=17;
			}else if($epilogh[0]==$canditate5){
				$count5+=17;
			}else if($epilogh[0]==$canditate6){
				$count6+=17;
			}else if($epilogh[0]==$canditate7){
				$count7+=17;
			}else if($epilogh[0]==$canditate8){
				$count8+=17;
			}else if($epilogh[0]==$canditate9){
				$count9+=17;
			}else if($epilogh[0]==$canditate10){
				$count10+=17;
			}else if($epilogh[0]==$canditate11){
				$count11+=17;
			}else if($epilogh[0]==$canditate12){
				$count12+=17;
			}else if($epilogh[0]==$canditate13){
				$count13+=17;
			}else if($epilogh[0]==$canditate14){
				$count14+=17;
			}else if($epilogh[0]==$canditate15){
				$count15+=17;
			}else if($epilogh[0]==$canditate16){
				$count16+=17;
			}else if($epilogh[0]==$canditate17){
				$count17+=17;	
			}else if($epilogh[0]==$canditate18){
				$count18+=17;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=16;
			}else if($epilogh[1]==$canditate2){
				$count2+=16;
			}else if($epilogh[1]==$canditate3){
				$count3+=16;
			}else if($epilogh[1]==$canditate4){
				$count4+=16;
			}else if($epilogh[1]==$canditate5){
				$count5+=16;
			}else if($epilogh[1]==$canditate6){
				$count6+=16;
			}else if($epilogh[1]==$canditate7){
				$count7+=16;
			}else if($epilogh[1]==$canditate8){
				$count8+=16;
			}else if($epilogh[1]==$canditate9){
				$count9+=16;
			}else if($epilogh[1]==$canditate10){
				$count10+=16;
			}else if($epilogh[1]==$canditate11){
				$count11+=16;
			}else if($epilogh[1]==$canditate12){
				$count12+=16;
			}else if($epilogh[1]==$canditate13){
				$count13+=16;
			}else if($epilogh[1]==$canditate14){
				$count14+=16;
			}else if($epilogh[1]==$canditate15){
				$count15+=16;
			}else if($epilogh[1]==$canditate16){
				$count16+=16;
			}else if($epilogh[1]==$canditate17){
				$count17+=16;	
			}else if($epilogh[1]==$canditate18){
				$count18+=16;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=15;
			}else if($epilogh[2]==$canditate2){
				$count2+=15;
			}else if($epilogh[2]==$canditate3){
				$count3+=15;
			}else if($epilogh[2]==$canditate4){
				$count4+=15;
			}else if($epilogh[2]==$canditate5){
				$count5+=15;
			}else if($epilogh[2]==$canditate6){
				$count6+=15;
			}else if($epilogh[2]==$canditate7){
				$count7+=15;
			}else if($epilogh[2]==$canditate8){
				$count8+=15;
			}else if($epilogh[2]==$canditate9){
				$count9+=15;
			}else if($epilogh[2]==$canditate10){
				$count10+=15;
			}else if($epilogh[2]==$canditate11){
				$count11+=15;
			}else if($epilogh[2]==$canditate12){
				$count12+=15;
			}else if($epilogh[2]==$canditate13){
				$count13+=15;
			}else if($epilogh[2]==$canditate14){
				$count14+=15;
			}else if($epilogh[2]==$canditate15){
				$count15+=15;
			}else if($epilogh[2]==$canditate16){
				$count16+=15;
			}else if($epilogh[2]==$canditate17){
				$count17+=15;	
			}else if($epilogh[2]==$canditate18){
				$count18+=15;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=14;
			}else if($epilogh[3]==$canditate2){
				$count2+=14;
			}else if($epilogh[3]==$canditate3){
				$count3+=14;
			}else if($epilogh[3]==$canditate4){
				$count4+=14;
			}else if($epilogh[3]==$canditate5){
				$count5+=14;
			}else if($epilogh[3]==$canditate6){
				$count6+=14;
			}else if($epilogh[3]==$canditate7){
				$count7+=14;
			}else if($epilogh[3]==$canditate8){
				$count8+=14;
			}else if($epilogh[3]==$canditate9){
				$count9+=14;
			}else if($epilogh[3]==$canditate10){
				$count10+=14;
			}else if($epilogh[3]==$canditate11){
				$count11+=14;
			}else if($epilogh[3]==$canditate12){
				$count12+=14;
			}else if($epilogh[3]==$canditate13){
				$count13+=14;
			}else if($epilogh[3]==$canditate14){
				$count14+=14;
			}else if($epilogh[3]==$canditate15){
				$count15+=14;
			}else if($epilogh[3]==$canditate16){
				$count16+=14;
			}else if($epilogh[3]==$canditate17){
				$count17+=14;	
			}else if($epilogh[3]==$canditate18){
				$count18+=14;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=13;
			}else if($epilogh[4]==$canditate2){
				$count2+=13;
			}else if($epilogh[4]==$canditate3){
				$count3+=13;
			}else if($epilogh[4]==$canditate4){
				$count4+=13;
			}else if($epilogh[4]==$canditate5){
				$count5+=13;	
			}else if($epilogh[4]==$canditate6){
				$count6+=13;
			}else if($epilogh[4]==$canditate7){
				$count7+=13;
			}else if($epilogh[4]==$canditate8){
				$count8+=13;
			}else if($epilogh[4]==$canditate9){
				$count9+=13;
			}else if($epilogh[4]==$canditate10){
				$count10+=13;
			}else if($epilogh[4]==$canditate11){
				$count11+=13;
			}else if($epilogh[4]==$canditate12){
				$count12+=13;
			}else if($epilogh[4]==$canditate13){
				$count13+=13;
			}else if($epilogh[4]==$canditate14){
				$count14+=13;
			}else if($epilogh[4]==$canditate15){
				$count15+=13;
			}else if($epilogh[4]==$canditate16){
				$count16+=13;
			}else if($epilogh[4]==$canditate17){
				$count17+=13;	
			}else if($epilogh[4]==$canditate18){
				$count18+=13;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=12;
			}else if($epilogh[5]==$canditate2){
				$count2+=12;
			}else if($epilogh[5]==$canditate3){
				$count3+=12;
			}else if($epilogh[5]==$canditate4){
				$count4+=12;
			}else if($epilogh[5]==$canditate5){
				$count5+=12;	
			}else if($epilogh[5]==$canditate6){
				$count6+=12;	
			}else if($epilogh[5]==$canditate7){
				$count7+=12;
			}else if($epilogh[5]==$canditate8){
				$count8+=12;
			}else if($epilogh[5]==$canditate9){
				$count9+=12;
			}else if($epilogh[5]==$canditate10){
				$count10+=12;
			}else if($epilogh[5]==$canditate11){
				$count11+=12;
			}else if($epilogh[5]==$canditate12){
				$count12+=12;
			}else if($epilogh[5]==$canditate13){
				$count13+=12;
			}else if($epilogh[5]==$canditate14){
				$count14+=12;
			}else if($epilogh[5]==$canditate15){
				$count15+=12;
			}else if($epilogh[5]==$canditate16){
				$count16+=12;
			}else if($epilogh[5]==$canditate17){
				$count17+=12;	
			}else if($epilogh[5]==$canditate18){
				$count18+=12;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=11;
			}else if($epilogh[6]==$canditate2){
				$count2+=11;
			}else if($epilogh[6]==$canditate3){
				$count3+=11;
			}else if($epilogh[6]==$canditate4){
				$count4+=11;
			}else if($epilogh[6]==$canditate5){
				$count5+=11;	
			}else if($epilogh[6]==$canditate6){
				$count6+=11;	
			}else if($epilogh[6]==$canditate7){
				$count7+=11;	
			}else if($epilogh[6]==$canditate8){
				$count8+=11;
			}else if($epilogh[6]==$canditate9){
				$count9+=11;
			}else if($epilogh[6]==$canditate10){
				$count10+=11;
			}else if($epilogh[6]==$canditate11){
				$count11+=11;
			}else if($epilogh[6]==$canditate12){
				$count12+=11;
			}else if($epilogh[6]==$canditate13){
				$count13+=11;
			}else if($epilogh[6]==$canditate14){
				$count14+=11;
			}else if($epilogh[6]==$canditate15){
				$count15+=11;
			}else if($epilogh[6]==$canditate16){
				$count16+=11;
			}else if($epilogh[6]==$canditate17){
				$count17+=11;	
			}else if($epilogh[6]==$canditate18){
				$count18+=11;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=10;
			}else if($epilogh[7]==$canditate2){
				$count2+=10;
			}else if($epilogh[7]==$canditate3){
				$count3+=10;
			}else if($epilogh[7]==$canditate4){
				$count4+=10;
			}else if($epilogh[7]==$canditate5){
				$count5+=10;	
			}else if($epilogh[7]==$canditate6){
				$count6+=10;	
			}else if($epilogh[7]==$canditate7){
				$count7+=10;	
			}else if($epilogh[7]==$canditate8){
				$count8+=10;	
			}else if($epilogh[7]==$canditate9){
				$count9+=10;
			}else if($epilogh[7]==$canditate10){
				$count10+=10;
			}else if($epilogh[7]==$canditate11){
				$count11+=10;
			}else if($epilogh[7]==$canditate12){
				$count12+=10;
			}else if($epilogh[7]==$canditate13){
				$count13+=10;
			}else if($epilogh[7]==$canditate14){
				$count14+=10;
			}else if($epilogh[7]==$canditate15){
				$count15+=10;
			}else if($epilogh[7]==$canditate16){
				$count16+=10;
			}else if($epilogh[7]==$canditate17){
				$count17+=10;	
			}else if($epilogh[7]==$canditate18){
				$count18+=10;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=9;
			}else if($epilogh[8]==$canditate2){
				$count2+=9;
			}else if($epilogh[8]==$canditate3){
				$count3+=9;
			}else if($epilogh[8]==$canditate4){
				$count4+=9;
			}else if($epilogh[8]==$canditate5){
				$count5+=9;	
			}else if($epilogh[8]==$canditate6){
				$count6+=9;	
			}else if($epilogh[8]==$canditate7){
				$count7+=9;	
			}else if($epilogh[8]==$canditate8){
				$count8+=9;	
			}else if($epilogh[8]==$canditate9){
				$count9+=9;	
			}else if($epilogh[8]==$canditate10){
				$count10+=9;
			}else if($epilogh[8]==$canditate11){
				$count11+=9;
			}else if($epilogh[8]==$canditate12){
				$count12+=9;
			}else if($epilogh[8]==$canditate13){
				$count13+=9;
			}else if($epilogh[8]==$canditate14){
				$count14+=9;
			}else if($epilogh[8]==$canditate15){
				$count15+=9;
			}else if($epilogh[8]==$canditate16){
				$count16+=9;
			}else if($epilogh[8]==$canditate17){
				$count17+=9;	
			}else if($epilogh[8]==$canditate18){
				$count18+=9;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=8;
			}else if($epilogh[9]==$canditate2){
				$count2+=8;
			}else if($epilogh[9]==$canditate3){
				$count3+=8;
			}else if($epilogh[9]==$canditate4){
				$count4+=8;
			}else if($epilogh[9]==$canditate5){
				$count5+=8;	
			}else if($epilogh[9]==$canditate6){
				$count6+=8;	
			}else if($epilogh[9]==$canditate7){
				$count7+=8;	
			}else if($epilogh[9]==$canditate8){
				$count8+=8;	
			}else if($epilogh[9]==$canditate9){
				$count9+=8;	
			}else if($epilogh[9]==$canditate10){
				$count10+=8;	
			}else if($epilogh[9]==$canditate11){
				$count11+=8;
			}else if($epilogh[9]==$canditate12){
				$count12+=8;
			}else if($epilogh[9]==$canditate13){
				$count13+=8;
			}else if($epilogh[9]==$canditate14){
				$count14+=8;
			}else if($epilogh[9]==$canditate15){
				$count15+=8;
			}else if($epilogh[9]==$canditate16){
				$count16+=8;
			}else if($epilogh[9]==$canditate17){
				$count17+=8;	
			}else if($epilogh[9]==$canditate18){
				$count18+=8;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=7;
			}else if($epilogh[10]==$canditate2){
				$count2+=7;
			}else if($epilogh[10]==$canditate3){
				$count3+=7;
			}else if($epilogh[10]==$canditate4){
				$count4+=7;
			}else if($epilogh[10]==$canditate5){
				$count5+=7;	
			}else if($epilogh[10]==$canditate6){
				$count6+=7;	
			}else if($epilogh[10]==$canditate7){
				$count7+=7;	
			}else if($epilogh[10]==$canditate8){
				$count8+=7;	
			}else if($epilogh[10]==$canditate9){
				$count9+=7;	
			}else if($epilogh[10]==$canditate10){
				$count10+=7;	
			}else if($epilogh[10]==$canditate11){
				$count11+=7;	
			}else if($epilogh[10]==$canditate12){
				$count12+=7;
			}else if($epilogh[10]==$canditate13){
				$count13+=7;
			}else if($epilogh[10]==$canditate14){
				$count14+=7;
			}else if($epilogh[10]==$canditate15){
				$count15+=7;
			}else if($epilogh[10]==$canditate16){
				$count16+=7;
			}else if($epilogh[10]==$canditate17){
				$count17+=7;	
			}else if($epilogh[10]==$canditate18){
				$count18+=7;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=6;
			}else if($epilogh[11]==$canditate2){
				$count2+=6;
			}else if($epilogh[11]==$canditate3){
				$count3+=6;
			}else if($epilogh[11]==$canditate4){
				$count4+=6;
			}else if($epilogh[11]==$canditate5){
				$count5+=6;	
			}else if($epilogh[11]==$canditate6){
				$count6+=6;	
			}else if($epilogh[11]==$canditate7){
				$count7+=6;	
			}else if($epilogh[11]==$canditate8){
				$count8+=6;	
			}else if($epilogh[11]==$canditate9){
				$count9+=6;	
			}else if($epilogh[11]==$canditate10){
				$count10+=6;	
			}else if($epilogh[11]==$canditate11){
				$count11+=6;	
			}else if($epilogh[11]==$canditate12){
				$count12+=6;	
			}else if($epilogh[11]==$canditate13){
				$count13+=6;
			}else if($epilogh[11]==$canditate14){
				$count14+=6;
			}else if($epilogh[11]==$canditate15){
				$count15+=6;
			}else if($epilogh[11]==$canditate16){
				$count16+=6;
			}else if($epilogh[11]==$canditate17){
				$count17+=6;	
			}else if($epilogh[11]==$canditate18){
				$count18+=6;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=5;
			}else if($epilogh[12]==$canditate2){
				$count2+=5;
			}else if($epilogh[12]==$canditate3){
				$count3+=5;
			}else if($epilogh[12]==$canditate4){
				$count4+=5;
			}else if($epilogh[12]==$canditate5){
				$count5+=5;	
			}else if($epilogh[12]==$canditate6){
				$count6+=5;	
			}else if($epilogh[12]==$canditate7){
				$count7+=5;	
			}else if($epilogh[12]==$canditate8){
				$count8+=5;	
			}else if($epilogh[12]==$canditate9){
				$count9+=5;	
			}else if($epilogh[12]==$canditate10){
				$count10+=5;	
			}else if($epilogh[12]==$canditate11){
				$count11+=5;	
			}else if($epilogh[12]==$canditate12){
				$count12+=5;	
			}else if($epilogh[12]==$canditate13){
				$count13+=5;	
			}else if($epilogh[12]==$canditate14){
				$count14+=5;
			}else if($epilogh[12]==$canditate15){
				$count15+=5;
			}else if($epilogh[12]==$canditate16){
				$count16+=5;
			}else if($epilogh[12]==$canditate17){
				$count17+=5;	
			}else if($epilogh[12]==$canditate18){
				$count18+=5;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate1){
				$count1+=4;
			}else if($epilogh[13]==$canditate2){
				$count2+=4;
			}else if($epilogh[13]==$canditate3){
				$count3+=4;
			}else if($epilogh[13]==$canditate4){
				$count4+=4;
			}else if($epilogh[13]==$canditate5){
				$count5+=4;	
			}else if($epilogh[13]==$canditate6){
				$count6+=4;	
			}else if($epilogh[13]==$canditate7){
				$count7+=4;	
			}else if($epilogh[13]==$canditate8){
				$count8+=4;	
			}else if($epilogh[13]==$canditate9){
				$count9+=4;	
			}else if($epilogh[13]==$canditate10){
				$count10+=4;	
			}else if($epilogh[13]==$canditate11){
				$count11+=4;	
			}else if($epilogh[13]==$canditate12){
				$count12+=4;	
			}else if($epilogh[13]==$canditate13){
				$count13+=4;	
			}else if($epilogh[13]==$canditate14){
				$count14+=4;	
			}else if($epilogh[13]==$canditate15){
				$count15+=4;
			}else if($epilogh[13]==$canditate16){
				$count16+=4;
			}else if($epilogh[13]==$canditate17){
				$count17+=4;	
			}else if($epilogh[13]==$canditate18){
				$count18+=4;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate1){
				$count1+=3;
			}else if($epilogh[14]==$canditate2){
				$count2+=3;
			}else if($epilogh[14]==$canditate3){
				$count3+=3;
			}else if($epilogh[14]==$canditate4){
				$count4+=3;
			}else if($epilogh[14]==$canditate5){
				$count5+=3;	
			}else if($epilogh[14]==$canditate6){
				$count6+=3;	
			}else if($epilogh[14]==$canditate7){
				$count7+=3;	
			}else if($epilogh[14]==$canditate8){
				$count8+=3;	
			}else if($epilogh[14]==$canditate9){
				$count9+=3;	
			}else if($epilogh[14]==$canditate10){
				$count10+=3;	
			}else if($epilogh[14]==$canditate11){
				$count11+=3;	
			}else if($epilogh[14]==$canditate12){
				$count12+=3;	
			}else if($epilogh[14]==$canditate13){
				$count13+=3;	
			}else if($epilogh[14]==$canditate14){
				$count14+=3;	
			}else if($epilogh[14]==$canditate15){
				$count15+=3;	
			}else if($epilogh[14]==$canditate16){
				$count16+=3;
			}else if($epilogh[14]==$canditate17){
				$count17+=3;	
			}else if($epilogh[14]==$canditate18){
				$count18+=3;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate1){
				$count1+=2;
			}else if($epilogh[15]==$canditate2){
				$count2+=2;
			}else if($epilogh[15]==$canditate3){
				$count3+=2;
			}else if($epilogh[15]==$canditate4){
				$count4+=2;
			}else if($epilogh[15]==$canditate5){
				$count5+=2;	
			}else if($epilogh[15]==$canditate6){
				$count6+=2;	
			}else if($epilogh[15]==$canditate7){
				$count7+=2;	
			}else if($epilogh[15]==$canditate8){
				$count8+=2;	
			}else if($epilogh[15]==$canditate9){
				$count9+=2;	
			}else if($epilogh[15]==$canditate10){
				$count10+=2;	
			}else if($epilogh[15]==$canditate11){
				$count11+=2;	
			}else if($epilogh[15]==$canditate12){
				$count12+=2;	
			}else if($epilogh[15]==$canditate13){
				$count13+=2;	
			}else if($epilogh[15]==$canditate14){
				$count14+=2;	
			}else if($epilogh[15]==$canditate15){
				$count15+=2;	
			}else if($epilogh[15]==$canditate16){
				$count16+=2;	
			}else if($epilogh[15]==$canditate17){
				$count17+=2;	
			}else if($epilogh[15]==$canditate18){
				$count18+=2;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate1){
				$count1+=1;
			}else if($epilogh[16]==$canditate2){
				$count2+=1;
			}else if($epilogh[16]==$canditate3){
				$count3+=1;
			}else if($epilogh[16]==$canditate4){
				$count4+=1;
			}else if($epilogh[16]==$canditate5){
				$count5+=1;	
			}else if($epilogh[16]==$canditate6){
				$count6+=1;	
			}else if($epilogh[16]==$canditate7){
				$count7+=1;	
			}else if($epilogh[16]==$canditate8){
				$count8+=1;	
			}else if($epilogh[16]==$canditate9){
				$count9+=1;	
			}else if($epilogh[16]==$canditate10){
				$count10+=1;	
			}else if($epilogh[16]==$canditate11){
				$count11+=1;	
			}else if($epilogh[16]==$canditate12){
				$count12+=1;	
			}else if($epilogh[16]==$canditate13){
				$count13+=1;	
			}else if($epilogh[16]==$canditate14){
				$count14+=1;	
			}else if($epilogh[16]==$canditate15){
				$count15+=1;	
			}else if($epilogh[16]==$canditate16){
				$count16+=1;	
			}else if($epilogh[16]==$canditate17){
				$count17+=1;	
			}else if($epilogh[16]==$canditate18){
				$count18+=1;	
			}
		}
		if ($arrlen>=18){	
			if($epilogh[17]==$canditate1){
				$count1+=0;
			}else if($epilogh[17]==$canditate2){
				$count2+=0;
			}else if($epilogh[17]==$canditate3){
				$count3+=0;
			}else if($epilogh[17]==$canditate4){
				$count4+=0;
			}else if($epilogh[17]==$canditate5){
				$count5+=0;	
			}else if($epilogh[17]==$canditate6){
				$count6+=0;	
			}else if($epilogh[17]==$canditate7){
				$count7+=0;	
			}else if($epilogh[17]==$canditate8){
				$count8+=0;	
			}else if($epilogh[17]==$canditate9){
				$count9+=0;	
			}else if($epilogh[17]==$canditate10){
				$count10+=0;	
			}else if($epilogh[17]==$canditate11){
				$count11+=0;	
			}else if($epilogh[17]==$canditate12){
				$count12+=0;	
			}else if($epilogh[17]==$canditate13){
				$count13+=0;	
			}else if($epilogh[17]==$canditate14){
				$count14+=0;	
			}else if($epilogh[17]==$canditate15){
				$count15+=0;	
			}else if($epilogh[17]==$canditate16){
				$count16+=0;	
			}else if($epilogh[17]==$canditate17){
				$count17+=0;	
			}else if($epilogh[17]==$canditate18){
				$count18+=0;	
			}
		}
	}
	if ($i2==19){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=18;
			}else if($epilogh[0]==$canditate2){
				$count2+=18;
			}else if($epilogh[0]==$canditate3){
				$count3+=18;
			}else if($epilogh[0]==$canditate4){
				$count4+=18;
			}else if($epilogh[0]==$canditate5){
				$count5+=18;
			}else if($epilogh[0]==$canditate6){
				$count6+=18;
			}else if($epilogh[0]==$canditate7){
				$count7+=18;
			}else if($epilogh[0]==$canditate8){
				$count8+=18;
			}else if($epilogh[0]==$canditate9){
				$count9+=18;
			}else if($epilogh[0]==$canditate10){
				$count10+=18;
			}else if($epilogh[0]==$canditate11){
				$count11+=18;
			}else if($epilogh[0]==$canditate12){
				$count12+=18;
			}else if($epilogh[0]==$canditate13){
				$count13+=18;
			}else if($epilogh[0]==$canditate14){
				$count14+=18;
			}else if($epilogh[0]==$canditate15){
				$count15+=18;
			}else if($epilogh[0]==$canditate16){
				$count16+=18;
			}else if($epilogh[0]==$canditate17){
				$count17+=18;	
			}else if($epilogh[0]==$canditate18){
				$count18+=18;	
			}else if($epilogh[0]==$canditate19){
				$count19+=18;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=17;
			}else if($epilogh[1]==$canditate2){
				$count2+=17;
			}else if($epilogh[1]==$canditate3){
				$count3+=17;
			}else if($epilogh[1]==$canditate4){
				$count4+=17;
			}else if($epilogh[1]==$canditate5){
				$count5+=17;
			}else if($epilogh[1]==$canditate6){
				$count6+=17;
			}else if($epilogh[1]==$canditate7){
				$count7+=17;
			}else if($epilogh[1]==$canditate8){
				$count8+=17;
			}else if($epilogh[1]==$canditate9){
				$count9+=17;
			}else if($epilogh[1]==$canditate10){
				$count10+=17;
			}else if($epilogh[1]==$canditate11){
				$count11+=17;
			}else if($epilogh[1]==$canditate12){
				$count12+=17;
			}else if($epilogh[1]==$canditate13){
				$count13+=17;
			}else if($epilogh[1]==$canditate14){
				$count14+=17;
			}else if($epilogh[1]==$canditate15){
				$count15+=17;
			}else if($epilogh[1]==$canditate16){
				$count16+=17;
			}else if($epilogh[1]==$canditate17){
				$count17+=17;	
			}else if($epilogh[1]==$canditate18){
				$count18+=17;	
			}else if($epilogh[1]==$canditate19){
				$count19+=17;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=16;
			}else if($epilogh[2]==$canditate2){
				$count2+=16;
			}else if($epilogh[2]==$canditate3){
				$count3+=16;
			}else if($epilogh[2]==$canditate4){
				$count4+=16;
			}else if($epilogh[2]==$canditate5){
				$count5+=16;
			}else if($epilogh[2]==$canditate6){
				$count6+=16;
			}else if($epilogh[2]==$canditate7){
				$count7+=16;
			}else if($epilogh[2]==$canditate8){
				$count8+=16;
			}else if($epilogh[2]==$canditate9){
				$count9+=16;
			}else if($epilogh[2]==$canditate10){
				$count10+=16;
			}else if($epilogh[2]==$canditate11){
				$count11+=16;
			}else if($epilogh[2]==$canditate12){
				$count12+=16;
			}else if($epilogh[2]==$canditate13){
				$count13+=16;
			}else if($epilogh[2]==$canditate14){
				$count14+=16;
			}else if($epilogh[2]==$canditate15){
				$count15+=16;
			}else if($epilogh[2]==$canditate16){
				$count16+=16;
			}else if($epilogh[2]==$canditate17){
				$count17+=16;	
			}else if($epilogh[2]==$canditate18){
				$count18+=16;	
			}else if($epilogh[2]==$canditate19){
				$count19+=16;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=15;
			}else if($epilogh[3]==$canditate2){
				$count2+=15;
			}else if($epilogh[3]==$canditate3){
				$count3+=15;
			}else if($epilogh[3]==$canditate4){
				$count4+=15;
			}else if($epilogh[3]==$canditate5){
				$count5+=15;
			}else if($epilogh[3]==$canditate6){
				$count6+=15;
			}else if($epilogh[3]==$canditate7){
				$count7+=15;
			}else if($epilogh[3]==$canditate8){
				$count8+=15;
			}else if($epilogh[3]==$canditate9){
				$count9+=15;
			}else if($epilogh[3]==$canditate10){
				$count10+=15;
			}else if($epilogh[3]==$canditate11){
				$count11+=15;
			}else if($epilogh[3]==$canditate12){
				$count12+=15;
			}else if($epilogh[3]==$canditate13){
				$count13+=15;
			}else if($epilogh[3]==$canditate14){
				$count14+=15;
			}else if($epilogh[3]==$canditate15){
				$count15+=15;
			}else if($epilogh[3]==$canditate16){
				$count16+=15;
			}else if($epilogh[3]==$canditate17){
				$count17+=15;	
			}else if($epilogh[3]==$canditate18){
				$count18+=15;	
			}else if($epilogh[3]==$canditate19){
				$count19+=15;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=14;
			}else if($epilogh[4]==$canditate2){
				$count2+=14;
			}else if($epilogh[4]==$canditate3){
				$count3+=14;
			}else if($epilogh[4]==$canditate4){
				$count4+=14;
			}else if($epilogh[4]==$canditate5){
				$count5+=14;	
			}else if($epilogh[4]==$canditate6){
				$count6+=14;
			}else if($epilogh[4]==$canditate7){
				$count7+=14;
			}else if($epilogh[4]==$canditate8){
				$count8+=14;
			}else if($epilogh[4]==$canditate9){
				$count9+=14;
			}else if($epilogh[4]==$canditate10){
				$count10+=14;
			}else if($epilogh[4]==$canditate11){
				$count11+=14;
			}else if($epilogh[4]==$canditate12){
				$count12+=14;
			}else if($epilogh[4]==$canditate13){
				$count13+=14;
			}else if($epilogh[4]==$canditate14){
				$count14+=14;
			}else if($epilogh[4]==$canditate15){
				$count15+=14;
			}else if($epilogh[4]==$canditate16){
				$count16+=14;
			}else if($epilogh[4]==$canditate17){
				$count17+=14;	
			}else if($epilogh[4]==$canditate18){
				$count18+=14;	
			}else if($epilogh[4]==$canditate19){
				$count19+=14;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=13;
			}else if($epilogh[5]==$canditate2){
				$count2+=13;
			}else if($epilogh[5]==$canditate3){
				$count3+=13;
			}else if($epilogh[5]==$canditate4){
				$count4+=13;
			}else if($epilogh[5]==$canditate5){
				$count5+=13;	
			}else if($epilogh[5]==$canditate6){
				$count6+=13;	
			}else if($epilogh[5]==$canditate7){
				$count7+=13;
			}else if($epilogh[5]==$canditate8){
				$count8+=13;
			}else if($epilogh[5]==$canditate9){
				$count9+=13;
			}else if($epilogh[5]==$canditate10){
				$count10+=13;
			}else if($epilogh[5]==$canditate11){
				$count11+=13;
			}else if($epilogh[5]==$canditate12){
				$count12+=13;
			}else if($epilogh[5]==$canditate13){
				$count13+=13;
			}else if($epilogh[5]==$canditate14){
				$count14+=13;
			}else if($epilogh[5]==$canditate15){
				$count15+=13;
			}else if($epilogh[5]==$canditate16){
				$count16+=13;
			}else if($epilogh[5]==$canditate17){
				$count17+=13;	
			}else if($epilogh[5]==$canditate18){
				$count18+=13;	
			}else if($epilogh[5]==$canditate19){
				$count19+=13;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=12;
			}else if($epilogh[6]==$canditate2){
				$count2+=12;
			}else if($epilogh[6]==$canditate3){
				$count3+=12;
			}else if($epilogh[6]==$canditate4){
				$count4+=12;
			}else if($epilogh[6]==$canditate5){
				$count5+=12;	
			}else if($epilogh[6]==$canditate6){
				$count6+=12;	
			}else if($epilogh[6]==$canditate7){
				$count7+=12;	
			}else if($epilogh[6]==$canditate8){
				$count8+=12;
			}else if($epilogh[6]==$canditate9){
				$count9+=12;
			}else if($epilogh[6]==$canditate10){
				$count10+=12;
			}else if($epilogh[6]==$canditate11){
				$count11+=12;
			}else if($epilogh[6]==$canditate12){
				$count12+=12;
			}else if($epilogh[6]==$canditate13){
				$count13+=12;
			}else if($epilogh[6]==$canditate14){
				$count14+=12;
			}else if($epilogh[6]==$canditate15){
				$count15+=12;
			}else if($epilogh[6]==$canditate16){
				$count16+=12;
			}else if($epilogh[6]==$canditate17){
				$count17+=12;	
			}else if($epilogh[6]==$canditate18){
				$count18+=12;	
			}else if($epilogh[6]==$canditate19){
				$count19+=12;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=11;
			}else if($epilogh[7]==$canditate2){
				$count2+=11;
			}else if($epilogh[7]==$canditate3){
				$count3+=11;
			}else if($epilogh[7]==$canditate4){
				$count4+=11;
			}else if($epilogh[7]==$canditate5){
				$count5+=11;	
			}else if($epilogh[7]==$canditate6){
				$count6+=11;	
			}else if($epilogh[7]==$canditate7){
				$count7+=11;	
			}else if($epilogh[7]==$canditate8){
				$count8+=11;	
			}else if($epilogh[7]==$canditate9){
				$count9+=11;
			}else if($epilogh[7]==$canditate10){
				$count10+=11;
			}else if($epilogh[7]==$canditate11){
				$count11+=11;
			}else if($epilogh[7]==$canditate12){
				$count12+=11;
			}else if($epilogh[7]==$canditate13){
				$count13+=11;
			}else if($epilogh[7]==$canditate14){
				$count14+=11;
			}else if($epilogh[7]==$canditate15){
				$count15+=11;
			}else if($epilogh[7]==$canditate16){
				$count16+=11;
			}else if($epilogh[7]==$canditate17){
				$count17+=11;	
			}else if($epilogh[7]==$canditate18){
				$count18+=11;	
			}else if($epilogh[7]==$canditate19){
				$count19+=11;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=10;
			}else if($epilogh[8]==$canditate2){
				$count2+=10;
			}else if($epilogh[8]==$canditate3){
				$count3+=10;
			}else if($epilogh[8]==$canditate4){
				$count4+=10;
			}else if($epilogh[8]==$canditate5){
				$count5+=10;	
			}else if($epilogh[8]==$canditate6){
				$count6+=10;	
			}else if($epilogh[8]==$canditate7){
				$count7+=10;	
			}else if($epilogh[8]==$canditate8){
				$count8+=10;	
			}else if($epilogh[8]==$canditate9){
				$count9+=10;	
			}else if($epilogh[8]==$canditate10){
				$count10+=10;
			}else if($epilogh[8]==$canditate11){
				$count11+=10;
			}else if($epilogh[8]==$canditate12){
				$count12+=10;
			}else if($epilogh[8]==$canditate13){
				$count13+=10;
			}else if($epilogh[8]==$canditate14){
				$count14+=10;
			}else if($epilogh[8]==$canditate15){
				$count15+=10;
			}else if($epilogh[8]==$canditate16){
				$count16+=10;
			}else if($epilogh[8]==$canditate17){
				$count17+=10;	
			}else if($epilogh[8]==$canditate18){
				$count18+=10;	
			}else if($epilogh[8]==$canditate19){
				$count19+=10;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=9;
			}else if($epilogh[9]==$canditate2){
				$count2+=9;
			}else if($epilogh[9]==$canditate3){
				$count3+=9;
			}else if($epilogh[9]==$canditate4){
				$count4+=9;
			}else if($epilogh[9]==$canditate5){
				$count5+=9;	
			}else if($epilogh[9]==$canditate6){
				$count6+=9;	
			}else if($epilogh[9]==$canditate7){
				$count7+=9;	
			}else if($epilogh[9]==$canditate8){
				$count8+=9;	
			}else if($epilogh[9]==$canditate9){
				$count9+=9;	
			}else if($epilogh[9]==$canditate10){
				$count10+=9;	
			}else if($epilogh[9]==$canditate11){
				$count11+=9;
			}else if($epilogh[9]==$canditate12){
				$count12+=9;
			}else if($epilogh[9]==$canditate13){
				$count13+=9;
			}else if($epilogh[9]==$canditate14){
				$count14+=9;
			}else if($epilogh[9]==$canditate15){
				$count15+=9;
			}else if($epilogh[9]==$canditate16){
				$count16+=9;
			}else if($epilogh[9]==$canditate17){
				$count17+=9;	
			}else if($epilogh[9]==$canditate18){
				$count18+=9;	
			}else if($epilogh[9]==$canditate19){
				$count19+=9;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=8;
			}else if($epilogh[10]==$canditate2){
				$count2+=8;
			}else if($epilogh[10]==$canditate3){
				$count3+=8;
			}else if($epilogh[10]==$canditate4){
				$count4+=8;
			}else if($epilogh[10]==$canditate5){
				$count5+=8;	
			}else if($epilogh[10]==$canditate6){
				$count6+=8;	
			}else if($epilogh[10]==$canditate7){
				$count7+=8;	
			}else if($epilogh[10]==$canditate8){
				$count8+=8;	
			}else if($epilogh[10]==$canditate9){
				$count9+=8;	
			}else if($epilogh[10]==$canditate10){
				$count10+=8;	
			}else if($epilogh[10]==$canditate11){
				$count11+=8;	
			}else if($epilogh[10]==$canditate12){
				$count12+=8;
			}else if($epilogh[10]==$canditate13){
				$count13+=8;
			}else if($epilogh[10]==$canditate14){
				$count14+=8;
			}else if($epilogh[10]==$canditate15){
				$count15+=8;
			}else if($epilogh[10]==$canditate16){
				$count16+=8;
			}else if($epilogh[10]==$canditate17){
				$count17+=8;	
			}else if($epilogh[10]==$canditate18){
				$count18+=8;	
			}else if($epilogh[10]==$canditate19){
				$count19+=8;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=7;
			}else if($epilogh[11]==$canditate2){
				$count2+=7;
			}else if($epilogh[11]==$canditate3){
				$count3+=7;
			}else if($epilogh[11]==$canditate4){
				$count4+=7;
			}else if($epilogh[11]==$canditate5){
				$count5+=7;	
			}else if($epilogh[11]==$canditate6){
				$count6+=7;	
			}else if($epilogh[11]==$canditate7){
				$count7+=7;	
			}else if($epilogh[11]==$canditate8){
				$count8+=7;	
			}else if($epilogh[11]==$canditate9){
				$count9+=7;	
			}else if($epilogh[11]==$canditate10){
				$count10+=7;	
			}else if($epilogh[11]==$canditate11){
				$count11+=7;	
			}else if($epilogh[11]==$canditate12){
				$count12+=7;	
			}else if($epilogh[11]==$canditate13){
				$count13+=7;
			}else if($epilogh[11]==$canditate14){
				$count14+=7;
			}else if($epilogh[11]==$canditate15){
				$count15+=7;
			}else if($epilogh[11]==$canditate16){
				$count16+=7;
			}else if($epilogh[11]==$canditate17){
				$count17+=7;	
			}else if($epilogh[11]==$canditate18){
				$count18+=7;	
			}else if($epilogh[11]==$canditate19){
				$count19+=7;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=6;
			}else if($epilogh[12]==$canditate2){
				$count2+=6;
			}else if($epilogh[12]==$canditate3){
				$count3+=6;
			}else if($epilogh[12]==$canditate4){
				$count4+=6;
			}else if($epilogh[12]==$canditate5){
				$count5+=6;	
			}else if($epilogh[12]==$canditate6){
				$count6+=6;	
			}else if($epilogh[12]==$canditate7){
				$count7+=6;	
			}else if($epilogh[12]==$canditate8){
				$count8+=6;	
			}else if($epilogh[12]==$canditate9){
				$count9+=6;	
			}else if($epilogh[12]==$canditate10){
				$count10+=6;	
			}else if($epilogh[12]==$canditate11){
				$count11+=6;	
			}else if($epilogh[12]==$canditate12){
				$count12+=6;	
			}else if($epilogh[12]==$canditate13){
				$count13+=6;	
			}else if($epilogh[12]==$canditate14){
				$count14+=6;
			}else if($epilogh[12]==$canditate15){
				$count15+=6;
			}else if($epilogh[12]==$canditate16){
				$count16+=6;
			}else if($epilogh[12]==$canditate17){
				$count17+=6;	
			}else if($epilogh[12]==$canditate18){
				$count18+=6;	
			}else if($epilogh[12]==$canditate19){
				$count19+=6;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate1){
				$count1+=5;
			}else if($epilogh[13]==$canditate2){
				$count2+=5;
			}else if($epilogh[13]==$canditate3){
				$count3+=5;
			}else if($epilogh[13]==$canditate4){
				$count4+=5;
			}else if($epilogh[13]==$canditate5){
				$count5+=5;	
			}else if($epilogh[13]==$canditate6){
				$count6+=5;	
			}else if($epilogh[13]==$canditate7){
				$count7+=5;	
			}else if($epilogh[13]==$canditate8){
				$count8+=5;	
			}else if($epilogh[13]==$canditate9){
				$count9+=5;	
			}else if($epilogh[13]==$canditate10){
				$count10+=5;	
			}else if($epilogh[13]==$canditate11){
				$count11+=5;	
			}else if($epilogh[13]==$canditate12){
				$count12+=5;	
			}else if($epilogh[13]==$canditate13){
				$count13+=5;	
			}else if($epilogh[13]==$canditate14){
				$count14+=5;	
			}else if($epilogh[13]==$canditate15){
				$count15+=5;
			}else if($epilogh[13]==$canditate16){
				$count16+=5;
			}else if($epilogh[13]==$canditate17){
				$count17+=5;	
			}else if($epilogh[13]==$canditate18){
				$count18+=5;	
			}else if($epilogh[13]==$canditate19){
				$count19+=5;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate1){
				$count1+=4;
			}else if($epilogh[14]==$canditate2){
				$count2+=4;
			}else if($epilogh[14]==$canditate3){
				$count3+=4;
			}else if($epilogh[14]==$canditate4){
				$count4+=4;
			}else if($epilogh[14]==$canditate5){
				$count5+=4;	
			}else if($epilogh[14]==$canditate6){
				$count6+=4;	
			}else if($epilogh[14]==$canditate7){
				$count7+=4;	
			}else if($epilogh[14]==$canditate8){
				$count8+=4;	
			}else if($epilogh[14]==$canditate9){
				$count9+=4;	
			}else if($epilogh[14]==$canditate10){
				$count10+=4;	
			}else if($epilogh[14]==$canditate11){
				$count11+=4;	
			}else if($epilogh[14]==$canditate12){
				$count12+=4;	
			}else if($epilogh[14]==$canditate13){
				$count13+=4;	
			}else if($epilogh[14]==$canditate14){
				$count14+=4;	
			}else if($epilogh[14]==$canditate15){
				$count15+=4;	
			}else if($epilogh[14]==$canditate16){
				$count16+=4;
			}else if($epilogh[14]==$canditate17){
				$count17+=4;	
			}else if($epilogh[14]==$canditate18){
				$count18+=4;	
			}else if($epilogh[14]==$canditate19){
				$count19+=4;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate1){
				$count1+=3;
			}else if($epilogh[15]==$canditate2){
				$count2+=3;
			}else if($epilogh[15]==$canditate3){
				$count3+=3;
			}else if($epilogh[15]==$canditate4){
				$count4+=3;
			}else if($epilogh[15]==$canditate5){
				$count5+=3;	
			}else if($epilogh[15]==$canditate6){
				$count6+=3;	
			}else if($epilogh[15]==$canditate7){
				$count7+=3;	
			}else if($epilogh[15]==$canditate8){
				$count8+=3;	
			}else if($epilogh[15]==$canditate9){
				$count9+=3;	
			}else if($epilogh[15]==$canditate10){
				$count10+=2;	
			}else if($epilogh[15]==$canditate11){
				$count11+=3;	
			}else if($epilogh[15]==$canditate12){
				$count12+=3;	
			}else if($epilogh[15]==$canditate13){
				$count13+=3;	
			}else if($epilogh[15]==$canditate14){
				$count14+=3;	
			}else if($epilogh[15]==$canditate15){
				$count15+=3;	
			}else if($epilogh[15]==$canditate16){
				$count16+=3;	
			}else if($epilogh[15]==$canditate17){
				$count17+=3;	
			}else if($epilogh[15]==$canditate18){
				$count18+=3;	
			}else if($epilogh[15]==$canditate19){
				$count19+=3;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate1){
				$count1+=2;
			}else if($epilogh[16]==$canditate2){
				$count2+=2;
			}else if($epilogh[16]==$canditate3){
				$count3+=2;
			}else if($epilogh[16]==$canditate4){
				$count4+=2;
			}else if($epilogh[16]==$canditate5){
				$count5+=2;	
			}else if($epilogh[16]==$canditate6){
				$count6+=2;	
			}else if($epilogh[16]==$canditate7){
				$count7+=2;	
			}else if($epilogh[16]==$canditate8){
				$count8+=2;	
			}else if($epilogh[16]==$canditate9){
				$count9+=2;	
			}else if($epilogh[16]==$canditate10){
				$count10+=2;	
			}else if($epilogh[16]==$canditate11){
				$count11+=2;	
			}else if($epilogh[16]==$canditate12){
				$count12+=2;	
			}else if($epilogh[16]==$canditate13){
				$count13+=2;	
			}else if($epilogh[16]==$canditate14){
				$count14+=2;	
			}else if($epilogh[16]==$canditate15){
				$count15+=2;	
			}else if($epilogh[16]==$canditate16){
				$count16+=2;	
			}else if($epilogh[16]==$canditate17){
				$count17+=2;	
			}else if($epilogh[16]==$canditate18){
				$count18+=2;	
			}else if($epilogh[16]==$canditate19){
				$count19+=2;	
			}
		}
		if ($arrlen>=18){	
			if($epilogh[17]==$canditate1){
				$count1+=1;
			}else if($epilogh[17]==$canditate2){
				$count2+=1;
			}else if($epilogh[17]==$canditate3){
				$count3+=1;
			}else if($epilogh[17]==$canditate4){
				$count4+=1;
			}else if($epilogh[17]==$canditate5){
				$count5+=1;	
			}else if($epilogh[17]==$canditate6){
				$count6+=1;	
			}else if($epilogh[17]==$canditate7){
				$count7+=1;	
			}else if($epilogh[17]==$canditate8){
				$count8+=1;	
			}else if($epilogh[17]==$canditate9){
				$count9+=1;	
			}else if($epilogh[17]==$canditate10){
				$count10+=1;	
			}else if($epilogh[17]==$canditate11){
				$count11+=1;	
			}else if($epilogh[17]==$canditate12){
				$count12+=1;	
			}else if($epilogh[17]==$canditate13){
				$count13+=1;	
			}else if($epilogh[17]==$canditate14){
				$count14+=1;	
			}else if($epilogh[17]==$canditate15){
				$count15+=1;	
			}else if($epilogh[17]==$canditate16){
				$count16+=1;	
			}else if($epilogh[17]==$canditate17){
				$count17+=1;	
			}else if($epilogh[17]==$canditate18){
				$count18+=1;	
			}else if($epilogh[17]==$canditate19){
				$count19+=1;	
			}
		}
		if ($arrlen>=19){	
			if($epilogh[18]==$canditate1){
				$count1+=0;
			}else if($epilogh[18]==$canditate2){
				$count2+=0;
			}else if($epilogh[18]==$canditate3){
				$count3+=0;
			}else if($epilogh[18]==$canditate4){
				$count4+=0;
			}else if($epilogh[18]==$canditate5){
				$count5+=0;	
			}else if($epilogh[18]==$canditate6){
				$count6+=0;	
			}else if($epilogh[18]==$canditate7){
				$count7+=0;	
			}else if($epilogh[18]==$canditate8){
				$count8+=0;	
			}else if($epilogh[18]==$canditate9){
				$count9+=0;	
			}else if($epilogh[18]==$canditate10){
				$count10+=0;	
			}else if($epilogh[18]==$canditate11){
				$count11+=0;	
			}else if($epilogh[18]==$canditate12){
				$count12+=0;	
			}else if($epilogh[18]==$canditate13){
				$count13+=0;	
			}else if($epilogh[18]==$canditate14){
				$count14+=0;	
			}else if($epilogh[18]==$canditate15){
				$count15+=0;	
			}else if($epilogh[18]==$canditate16){
				$count16+=0;	
			}else if($epilogh[18]==$canditate17){
				$count17+=0;	
			}else if($epilogh[18]==$canditate18){
				$count18+=0;	
			}else if($epilogh[18]==$canditate19){
				$count19+=0;	
			}
		}
	}
	if ($i2==20){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=19;
			}else if($epilogh[0]==$canditate2){
				$count2+=19;
			}else if($epilogh[0]==$canditate3){
				$count3+=19;
			}else if($epilogh[0]==$canditate4){
				$count4+=19;
			}else if($epilogh[0]==$canditate5){
				$count5+=19;
			}else if($epilogh[0]==$canditate6){
				$count6+=19;
			}else if($epilogh[0]==$canditate7){
				$count7+=19;
			}else if($epilogh[0]==$canditate8){
				$count8+=19;
			}else if($epilogh[0]==$canditate9){
				$count9+=19;
			}else if($epilogh[0]==$canditate10){
				$count10+=19;
			}else if($epilogh[0]==$canditate11){
				$count11+=19;
			}else if($epilogh[0]==$canditate12){
				$count12+=19;
			}else if($epilogh[0]==$canditate13){
				$count13+=19;
			}else if($epilogh[0]==$canditate14){
				$count14+=19;
			}else if($epilogh[0]==$canditate15){
				$count15+=19;
			}else if($epilogh[0]==$canditate16){
				$count16+=19;
			}else if($epilogh[0]==$canditate17){
				$count17+=19;	
			}else if($epilogh[0]==$canditate18){
				$count18+=19;	
			}else if($epilogh[0]==$canditate19){
				$count19+=19;	
			}else if($epilogh[0]==$canditate20){
				$count20+=19;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=18;
			}else if($epilogh[1]==$canditate2){
				$count2+=18;
			}else if($epilogh[1]==$canditate3){
				$count3+=18;
			}else if($epilogh[1]==$canditate4){
				$count4+=18;
			}else if($epilogh[1]==$canditate5){
				$count5+=18;
			}else if($epilogh[1]==$canditate6){
				$count6+=18;
			}else if($epilogh[1]==$canditate7){
				$count7+=18;
			}else if($epilogh[1]==$canditate8){
				$count8+=18;
			}else if($epilogh[1]==$canditate9){
				$count9+=18;
			}else if($epilogh[1]==$canditate10){
				$count10+=18;
			}else if($epilogh[1]==$canditate11){
				$count11+=18;
			}else if($epilogh[1]==$canditate12){
				$count12+=18;
			}else if($epilogh[1]==$canditate13){
				$count13+=18;
			}else if($epilogh[1]==$canditate14){
				$count14+=18;
			}else if($epilogh[1]==$canditate15){
				$count15+=18;
			}else if($epilogh[1]==$canditate16){
				$count16+=18;
			}else if($epilogh[1]==$canditate17){
				$count17+=18;	
			}else if($epilogh[1]==$canditate18){
				$count18+=18;	
			}else if($epilogh[1]==$canditate19){
				$count19+=18;	
			}else if($epilogh[1]==$canditate20){
				$count20+=18;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=17;
			}else if($epilogh[2]==$canditate2){
				$count2+=17;
			}else if($epilogh[2]==$canditate3){
				$count3+=17;
			}else if($epilogh[2]==$canditate4){
				$count4+=17;
			}else if($epilogh[2]==$canditate5){
				$count5+=17;
			}else if($epilogh[2]==$canditate6){
				$count6+=17;
			}else if($epilogh[2]==$canditate7){
				$count7+=17;
			}else if($epilogh[2]==$canditate8){
				$count8+=17;
			}else if($epilogh[2]==$canditate9){
				$count9+=17;
			}else if($epilogh[2]==$canditate10){
				$count10+=17;
			}else if($epilogh[2]==$canditate11){
				$count11+=17;
			}else if($epilogh[2]==$canditate12){
				$count12+=17;
			}else if($epilogh[2]==$canditate13){
				$count13+=17;
			}else if($epilogh[2]==$canditate14){
				$count14+=17;
			}else if($epilogh[2]==$canditate15){
				$count15+=17;
			}else if($epilogh[2]==$canditate16){
				$count16+=17;
			}else if($epilogh[2]==$canditate17){
				$count17+=17;	
			}else if($epilogh[2]==$canditate18){
				$count18+=17;	
			}else if($epilogh[2]==$canditate19){
				$count19+=17;	
			}else if($epilogh[2]==$canditate20){
				$count20+=17;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=16;
			}else if($epilogh[3]==$canditate2){
				$count2+=16;
			}else if($epilogh[3]==$canditate3){
				$count3+=16;
			}else if($epilogh[3]==$canditate4){
				$count4+=16;
			}else if($epilogh[3]==$canditate5){
				$count5+=16;
			}else if($epilogh[3]==$canditate6){
				$count6+=16;
			}else if($epilogh[3]==$canditate7){
				$count7+=16;
			}else if($epilogh[3]==$canditate8){
				$count8+=16;
			}else if($epilogh[3]==$canditate9){
				$count9+=16;
			}else if($epilogh[3]==$canditate10){
				$count10+=16;
			}else if($epilogh[3]==$canditate11){
				$count11+=16;
			}else if($epilogh[3]==$canditate12){
				$count12+=16;
			}else if($epilogh[3]==$canditate13){
				$count13+=16;
			}else if($epilogh[3]==$canditate14){
				$count14+=16;
			}else if($epilogh[3]==$canditate15){
				$count15+=16;
			}else if($epilogh[3]==$canditate16){
				$count16+=16;
			}else if($epilogh[3]==$canditate17){
				$count17+=16;	
			}else if($epilogh[3]==$canditate18){
				$count18+=16;	
			}else if($epilogh[3]==$canditate19){
				$count19+=16;	
			}else if($epilogh[3]==$canditate20){
				$count20+=16;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=15;
			}else if($epilogh[4]==$canditate2){
				$count2+=15;
			}else if($epilogh[4]==$canditate3){
				$count3+=15;
			}else if($epilogh[4]==$canditate4){
				$count4+=15;
			}else if($epilogh[4]==$canditate5){
				$count5+=15;	
			}else if($epilogh[4]==$canditate6){
				$count6+=15;
			}else if($epilogh[4]==$canditate7){
				$count7+=15;
			}else if($epilogh[4]==$canditate8){
				$count8+=15;
			}else if($epilogh[4]==$canditate9){
				$count9+=15;
			}else if($epilogh[4]==$canditate10){
				$count10+=15;
			}else if($epilogh[4]==$canditate11){
				$count11+=15;
			}else if($epilogh[4]==$canditate12){
				$count12+=15;
			}else if($epilogh[4]==$canditate13){
				$count13+=15;
			}else if($epilogh[4]==$canditate14){
				$count14+=15;
			}else if($epilogh[4]==$canditate15){
				$count15+=15;
			}else if($epilogh[4]==$canditate16){
				$count16+=15;
			}else if($epilogh[4]==$canditate17){
				$count17+=15;	
			}else if($epilogh[4]==$canditate18){
				$count18+=15;	
			}else if($epilogh[4]==$canditate19){
				$count19+=15;	
			}else if($epilogh[4]==$canditate20){
				$count20+=15;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=14;
			}else if($epilogh[5]==$canditate2){
				$count2+=14;
			}else if($epilogh[5]==$canditate3){
				$count3+=14;
			}else if($epilogh[5]==$canditate4){
				$count4+=14;
			}else if($epilogh[5]==$canditate5){
				$count5+=14;	
			}else if($epilogh[5]==$canditate6){
				$count6+=14;	
			}else if($epilogh[5]==$canditate7){
				$count7+=14;
			}else if($epilogh[5]==$canditate8){
				$count8+=14;
			}else if($epilogh[5]==$canditate9){
				$count9+=14;
			}else if($epilogh[5]==$canditate10){
				$count10+=14;
			}else if($epilogh[5]==$canditate11){
				$count11+=14;
			}else if($epilogh[5]==$canditate12){
				$count12+=14;
			}else if($epilogh[5]==$canditate13){
				$count13+=14;
			}else if($epilogh[5]==$canditate14){
				$count14+=14;
			}else if($epilogh[5]==$canditate15){
				$count15+=14;
			}else if($epilogh[5]==$canditate16){
				$count16+=14;
			}else if($epilogh[5]==$canditate17){
				$count17+=14;	
			}else if($epilogh[5]==$canditate18){
				$count18+=14;	
			}else if($epilogh[5]==$canditate19){
				$count19+=14;	
			}else if($epilogh[5]==$canditate20){
				$count20+=14;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=13;
			}else if($epilogh[6]==$canditate2){
				$count2+=13;
			}else if($epilogh[6]==$canditate3){
				$count3+=13;
			}else if($epilogh[6]==$canditate4){
				$count4+=13;
			}else if($epilogh[6]==$canditate5){
				$count5+=13;	
			}else if($epilogh[6]==$canditate6){
				$count6+=13;	
			}else if($epilogh[6]==$canditate7){
				$count7+=13;	
			}else if($epilogh[6]==$canditate8){
				$count8+=13;
			}else if($epilogh[6]==$canditate9){
				$count9+=13;
			}else if($epilogh[6]==$canditate10){
				$count10+=13;
			}else if($epilogh[6]==$canditate11){
				$count11+=13;
			}else if($epilogh[6]==$canditate12){
				$count12+=13;
			}else if($epilogh[6]==$canditate13){
				$count13+=13;
			}else if($epilogh[6]==$canditate14){
				$count14+=13;
			}else if($epilogh[6]==$canditate15){
				$count15+=13;
			}else if($epilogh[6]==$canditate16){
				$count16+=13;
			}else if($epilogh[6]==$canditate17){
				$count17+=13;	
			}else if($epilogh[6]==$canditate18){
				$count18+=13;	
			}else if($epilogh[6]==$canditate19){
				$count19+=13;	
			}else if($epilogh[6]==$canditate20){
				$count20+=13;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=12;
			}else if($epilogh[7]==$canditate2){
				$count2+=12;
			}else if($epilogh[7]==$canditate3){
				$count3+=12;
			}else if($epilogh[7]==$canditate4){
				$count4+=12;
			}else if($epilogh[7]==$canditate5){
				$count5+=12;	
			}else if($epilogh[7]==$canditate6){
				$count6+=12;	
			}else if($epilogh[7]==$canditate7){
				$count7+=12;	
			}else if($epilogh[7]==$canditate8){
				$count8+=12;	
			}else if($epilogh[7]==$canditate9){
				$count9+=12;
			}else if($epilogh[7]==$canditate10){
				$count10+=12;
			}else if($epilogh[7]==$canditate11){
				$count11+=12;
			}else if($epilogh[7]==$canditate12){
				$count12+=12;
			}else if($epilogh[7]==$canditate13){
				$count13+=12;
			}else if($epilogh[7]==$canditate14){
				$count14+=12;
			}else if($epilogh[7]==$canditate15){
				$count15+=12;
			}else if($epilogh[7]==$canditate16){
				$count16+=12;
			}else if($epilogh[7]==$canditate17){
				$count17+=12;	
			}else if($epilogh[7]==$canditate18){
				$count18+=12;	
			}else if($epilogh[7]==$canditate19){
				$count19+=12;	
			}else if($epilogh[7]==$canditate20){
				$count20+=12;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=11;
			}else if($epilogh[8]==$canditate2){
				$count2+=11;
			}else if($epilogh[8]==$canditate3){
				$count3+=11;
			}else if($epilogh[8]==$canditate4){
				$count4+=11;
			}else if($epilogh[8]==$canditate5){
				$count5+=11;	
			}else if($epilogh[8]==$canditate6){
				$count6+=11;	
			}else if($epilogh[8]==$canditate7){
				$count7+=11;	
			}else if($epilogh[8]==$canditate8){
				$count8+=11;	
			}else if($epilogh[8]==$canditate9){
				$count9+=11;	
			}else if($epilogh[8]==$canditate10){
				$count10+=11;
			}else if($epilogh[8]==$canditate11){
				$count11+=11;
			}else if($epilogh[8]==$canditate12){
				$count12+=11;
			}else if($epilogh[8]==$canditate13){
				$count13+=11;
			}else if($epilogh[8]==$canditate14){
				$count14+=11;
			}else if($epilogh[8]==$canditate15){
				$count15+=11;
			}else if($epilogh[8]==$canditate16){
				$count16+=11;
			}else if($epilogh[8]==$canditate17){
				$count17+=11;	
			}else if($epilogh[8]==$canditate18){
				$count18+=11;	
			}else if($epilogh[8]==$canditate19){
				$count19+=11;	
			}else if($epilogh[8]==$canditate20){
				$count20+=11;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=10;
			}else if($epilogh[9]==$canditate2){
				$count2+=10;
			}else if($epilogh[9]==$canditate3){
				$count3+=10;
			}else if($epilogh[9]==$canditate4){
				$count4+=10;
			}else if($epilogh[9]==$canditate5){
				$count5+=10;	
			}else if($epilogh[9]==$canditate6){
				$count6+=10;	
			}else if($epilogh[9]==$canditate7){
				$count7+=10;	
			}else if($epilogh[9]==$canditate8){
				$count8+=10;	
			}else if($epilogh[9]==$canditate9){
				$count9+=10;	
			}else if($epilogh[9]==$canditate10){
				$count10+=10;	
			}else if($epilogh[9]==$canditate11){
				$count11+=10;
			}else if($epilogh[9]==$canditate12){
				$count12+=10;
			}else if($epilogh[9]==$canditate13){
				$count13+=10;
			}else if($epilogh[9]==$canditate14){
				$count14+=10;
			}else if($epilogh[9]==$canditate15){
				$count15+=10;
			}else if($epilogh[9]==$canditate16){
				$count16+=10;
			}else if($epilogh[9]==$canditate17){
				$count17+=10;	
			}else if($epilogh[9]==$canditate18){
				$count18+=10;	
			}else if($epilogh[9]==$canditate19){
				$count19+=10;	
			}else if($epilogh[9]==$canditate20){
				$count20+=10;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=9;
			}else if($epilogh[10]==$canditate2){
				$count2+=9;
			}else if($epilogh[10]==$canditate3){
				$count3+=9;
			}else if($epilogh[10]==$canditate4){
				$count4+=9;
			}else if($epilogh[10]==$canditate5){
				$count5+=9;	
			}else if($epilogh[10]==$canditate6){
				$count6+=9;	
			}else if($epilogh[10]==$canditate7){
				$count7+=9;	
			}else if($epilogh[10]==$canditate8){
				$count8+=9;	
			}else if($epilogh[10]==$canditate9){
				$count9+=9;	
			}else if($epilogh[10]==$canditate10){
				$count10+=9;	
			}else if($epilogh[10]==$canditate11){
				$count11+=9;	
			}else if($epilogh[10]==$canditate12){
				$count12+=9;
			}else if($epilogh[10]==$canditate13){
				$count13+=9;
			}else if($epilogh[10]==$canditate14){
				$count14+=9;
			}else if($epilogh[10]==$canditate15){
				$count15+=9;
			}else if($epilogh[10]==$canditate16){
				$count16+=9;
			}else if($epilogh[10]==$canditate17){
				$count17+=9;	
			}else if($epilogh[10]==$canditate18){
				$count18+=9;	
			}else if($epilogh[10]==$canditate19){
				$count19+=9;	
			}else if($epilogh[10]==$canditate20){
				$count20+=9;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate1){
				$count1+=8;
			}else if($epilogh[11]==$canditate2){
				$count2+=8;
			}else if($epilogh[11]==$canditate3){
				$count3+=8;
			}else if($epilogh[11]==$canditate4){
				$count4+=8;
			}else if($epilogh[11]==$canditate5){
				$count5+=8;	
			}else if($epilogh[11]==$canditate6){
				$count6+=8;	
			}else if($epilogh[11]==$canditate7){
				$count7+=8;	
			}else if($epilogh[11]==$canditate8){
				$count8+=8;	
			}else if($epilogh[11]==$canditate9){
				$count9+=8;	
			}else if($epilogh[11]==$canditate10){
				$count10+=8;	
			}else if($epilogh[11]==$canditate11){
				$count11+=8;	
			}else if($epilogh[11]==$canditate12){
				$count12+=8;	
			}else if($epilogh[11]==$canditate13){
				$count13+=8;
			}else if($epilogh[11]==$canditate14){
				$count14+=8;
			}else if($epilogh[11]==$canditate15){
				$count15+=8;
			}else if($epilogh[11]==$canditate16){
				$count16+=8;
			}else if($epilogh[11]==$canditate17){
				$count17+=8;	
			}else if($epilogh[11]==$canditate18){
				$count18+=8;	
			}else if($epilogh[11]==$canditate19){
				$count19+=8;	
			}else if($epilogh[11]==$canditate20){
				$count20+=8;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate1){
				$count1+=7;
			}else if($epilogh[12]==$canditate2){
				$count2+=7;
			}else if($epilogh[12]==$canditate3){
				$count3+=7;
			}else if($epilogh[12]==$canditate4){
				$count4+=7;
			}else if($epilogh[12]==$canditate5){
				$count5+=7;	
			}else if($epilogh[12]==$canditate6){
				$count6+=7;	
			}else if($epilogh[12]==$canditate7){
				$count7+=7;	
			}else if($epilogh[12]==$canditate8){
				$count8+=7;	
			}else if($epilogh[12]==$canditate9){
				$count9+=7;	
			}else if($epilogh[12]==$canditate10){
				$count10+=7;	
			}else if($epilogh[12]==$canditate11){
				$count11+=7;	
			}else if($epilogh[12]==$canditate12){
				$count12+=7;	
			}else if($epilogh[12]==$canditate13){
				$count13+=7;	
			}else if($epilogh[12]==$canditate14){
				$count14+=7;
			}else if($epilogh[12]==$canditate15){
				$count15+=7;
			}else if($epilogh[12]==$canditate16){
				$count16+=7;
			}else if($epilogh[12]==$canditate17){
				$count17+=7;	
			}else if($epilogh[12]==$canditate18){
				$count18+=7;	
			}else if($epilogh[12]==$canditate19){
				$count19+=7;	
			}else if($epilogh[12]==$canditate20){
				$count20+=7;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate1){
				$count1+=6;
			}else if($epilogh[13]==$canditate2){
				$count2+=6;
			}else if($epilogh[13]==$canditate3){
				$count3+=6;
			}else if($epilogh[13]==$canditate4){
				$count4+=6;
			}else if($epilogh[13]==$canditate5){
				$count5+=6;	
			}else if($epilogh[13]==$canditate6){
				$count6+=6;	
			}else if($epilogh[13]==$canditate7){
				$count7+=6;	
			}else if($epilogh[13]==$canditate8){
				$count8+=6;	
			}else if($epilogh[13]==$canditate9){
				$count9+=6;	
			}else if($epilogh[13]==$canditate10){
				$count10+=6;	
			}else if($epilogh[13]==$canditate11){
				$count11+=6;	
			}else if($epilogh[13]==$canditate12){
				$count12+=6;	
			}else if($epilogh[13]==$canditate13){
				$count13+=6;	
			}else if($epilogh[13]==$canditate14){
				$count14+=6;	
			}else if($epilogh[13]==$canditate15){
				$count15+=6;
			}else if($epilogh[13]==$canditate16){
				$count16+=6;
			}else if($epilogh[13]==$canditate17){
				$count17+=6;	
			}else if($epilogh[13]==$canditate18){
				$count18+=6;	
			}else if($epilogh[13]==$canditate19){
				$count19+=6;	
			}else if($epilogh[13]==$canditate20){
				$count20+=6;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate1){
				$count1+=5;
			}else if($epilogh[14]==$canditate2){
				$count2+=5;
			}else if($epilogh[14]==$canditate3){
				$count3+=5;
			}else if($epilogh[14]==$canditate4){
				$count4+=5;
			}else if($epilogh[14]==$canditate5){
				$count5+=5;	
			}else if($epilogh[14]==$canditate6){
				$count6+=5;	
			}else if($epilogh[14]==$canditate7){
				$count7+=5;	
			}else if($epilogh[14]==$canditate8){
				$count8+=5;	
			}else if($epilogh[14]==$canditate9){
				$count9+=5;	
			}else if($epilogh[14]==$canditate10){
				$count10+=5;	
			}else if($epilogh[14]==$canditate11){
				$count11+=5;	
			}else if($epilogh[14]==$canditate12){
				$count12+=5;	
			}else if($epilogh[14]==$canditate13){
				$count13+=5;	
			}else if($epilogh[14]==$canditate14){
				$count14+=5;	
			}else if($epilogh[14]==$canditate15){
				$count15+=5;	
			}else if($epilogh[14]==$canditate16){
				$count16+=5;
			}else if($epilogh[14]==$canditate17){
				$count17+=5;	
			}else if($epilogh[14]==$canditate18){
				$count18+=5;	
			}else if($epilogh[14]==$canditate19){
				$count19+=5;	
			}else if($epilogh[14]==$canditate20){
				$count20+=5;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate1){
				$count1+=4;
			}else if($epilogh[15]==$canditate2){
				$count2+=4;
			}else if($epilogh[15]==$canditate3){
				$count3+=4;
			}else if($epilogh[15]==$canditate4){
				$count4+=4;
			}else if($epilogh[15]==$canditate5){
				$count5+=4;	
			}else if($epilogh[15]==$canditate6){
				$count6+=4;	
			}else if($epilogh[15]==$canditate7){
				$count7+=4;	
			}else if($epilogh[15]==$canditate8){
				$count8+=4;	
			}else if($epilogh[15]==$canditate9){
				$count9+=4;	
			}else if($epilogh[15]==$canditate10){
				$count10+=4;	
			}else if($epilogh[15]==$canditate11){
				$count11+=4;	
			}else if($epilogh[15]==$canditate12){
				$count12+=4;	
			}else if($epilogh[15]==$canditate13){
				$count13+=4;	
			}else if($epilogh[15]==$canditate14){
				$count14+=4;	
			}else if($epilogh[15]==$canditate15){
				$count15+=4;	
			}else if($epilogh[15]==$canditate16){
				$count16+=4;	
			}else if($epilogh[15]==$canditate17){
				$count17+=4;	
			}else if($epilogh[15]==$canditate18){
				$count18+=4;	
			}else if($epilogh[15]==$canditate19){
				$count19+=4;	
			}else if($epilogh[15]==$canditate20){
				$count20+=4;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate1){
				$count1+=3;
			}else if($epilogh[16]==$canditate2){
				$count2+=3;
			}else if($epilogh[16]==$canditate3){
				$count3+=3;
			}else if($epilogh[16]==$canditate4){
				$count4+=3;
			}else if($epilogh[16]==$canditate5){
				$count5+=3;	
			}else if($epilogh[16]==$canditate6){
				$count6+=3;	
			}else if($epilogh[16]==$canditate7){
				$count7+=3;	
			}else if($epilogh[16]==$canditate8){
				$count8+=3;	
			}else if($epilogh[16]==$canditate9){
				$count9+=3;	
			}else if($epilogh[16]==$canditate10){
				$count10+=3;	
			}else if($epilogh[16]==$canditate11){
				$count11+=3;	
			}else if($epilogh[16]==$canditate12){
				$count12+=3;	
			}else if($epilogh[16]==$canditate13){
				$count13+=3;	
			}else if($epilogh[16]==$canditate14){
				$count14+=3;	
			}else if($epilogh[16]==$canditate15){
				$count15+=3;	
			}else if($epilogh[16]==$canditate16){
				$count16+=3;	
			}else if($epilogh[16]==$canditate17){
				$count17+=3;	
			}else if($epilogh[16]==$canditate18){
				$count18+=3;	
			}else if($epilogh[16]==$canditate19){
				$count19+=3;	
			}else if($epilogh[16]==$canditate20){
				$count20+=3;	
			}
		}
		if ($arrlen>=18){	
			if($epilogh[17]==$canditate1){
				$count1+=2;
			}else if($epilogh[17]==$canditate2){
				$count2+=2;
			}else if($epilogh[17]==$canditate3){
				$count3+=2;
			}else if($epilogh[17]==$canditate4){
				$count4+=2;
			}else if($epilogh[17]==$canditate5){
				$count5+=2;	
			}else if($epilogh[17]==$canditate6){
				$count6+=2;	
			}else if($epilogh[17]==$canditate7){
				$count7+=2;	
			}else if($epilogh[17]==$canditate8){
				$count8+=2;	
			}else if($epilogh[17]==$canditate9){
				$count9+=2;	
			}else if($epilogh[17]==$canditate10){
				$count10+=2;	
			}else if($epilogh[17]==$canditate11){
				$count11+=2;	
			}else if($epilogh[17]==$canditate12){
				$count12+=2;	
			}else if($epilogh[17]==$canditate13){
				$count13+=2;	
			}else if($epilogh[17]==$canditate14){
				$count14+=2;	
			}else if($epilogh[17]==$canditate15){
				$count15+=2;	
			}else if($epilogh[17]==$canditate16){
				$count16+=2;	
			}else if($epilogh[17]==$canditate17){
				$count17+=2;	
			}else if($epilogh[17]==$canditate18){
				$count18+=2;	
			}else if($epilogh[17]==$canditate19){
				$count19+=2;	
			}else if($epilogh[17]==$canditate20){
				$count20+=2;	
			}
		}
		if ($arrlen>=19){	
			if($epilogh[18]==$canditate1){
				$count1+=1;
			}else if($epilogh[18]==$canditate2){
				$count2+=1;
			}else if($epilogh[18]==$canditate3){
				$count3+=1;
			}else if($epilogh[18]==$canditate4){
				$count4+=1;
			}else if($epilogh[18]==$canditate5){
				$count5+=1;	
			}else if($epilogh[18]==$canditate6){
				$count6+=1;	
			}else if($epilogh[18]==$canditate7){
				$count7+=1;	
			}else if($epilogh[18]==$canditate8){
				$count8+=1;	
			}else if($epilogh[18]==$canditate9){
				$count9+=1;	
			}else if($epilogh[18]==$canditate10){
				$count10+=1;	
			}else if($epilogh[18]==$canditate11){
				$count11+=1;	
			}else if($epilogh[18]==$canditate12){
				$count12+=1;	
			}else if($epilogh[18]==$canditate13){
				$count13+=1;	
			}else if($epilogh[18]==$canditate14){
				$count14+=1;	
			}else if($epilogh[18]==$canditate15){
				$count15+=1;	
			}else if($epilogh[18]==$canditate16){
				$count16+=1;	
			}else if($epilogh[18]==$canditate17){
				$count17+=1;	
			}else if($epilogh[18]==$canditate18){
				$count18+=1;	
			}else if($epilogh[18]==$canditate19){
				$count19+=1;	
			}else if($epilogh[18]==$canditate20){
				$count20+=1;	
			}
		}
		if ($arrlen>=20){	
			if($epilogh[19]==$canditate1){
				$count1+=0;
			}else if($epilogh[19]==$canditate2){
				$count2+=0;
			}else if($epilogh[19]==$canditate3){
				$count3+=0;
			}else if($epilogh[19]==$canditate4){
				$count4+=0;
			}else if($epilogh[19]==$canditate5){
				$count5+=0;	
			}else if($epilogh[19]==$canditate6){
				$count6+=0;	
			}else if($epilogh[19]==$canditate7){
				$count7+=0;	
			}else if($epilogh[19]==$canditate8){
				$count8+=0;	
			}else if($epilogh[19]==$canditate9){
				$count9+=0;	
			}else if($epilogh[19]==$canditate10){
				$count10+=0;	
			}else if($epilogh[19]==$canditate11){
				$count11+=0;	
			}else if($epilogh[19]==$canditate12){
				$count12+=0;	
			}else if($epilogh[19]==$canditate13){
				$count13+=0;	
			}else if($epilogh[19]==$canditate14){
				$count14+=0;	
			}else if($epilogh[19]==$canditate15){
				$count15+=0;	
			}else if($epilogh[19]==$canditate16){
				$count16+=0;	
			}else if($epilogh[19]==$canditate17){
				$count17+=0;	
			}else if($epilogh[19]==$canditate18){
				$count18+=0;	
			}else if($epilogh[19]==$canditate19){
				$count19+=0;	
			}else if($epilogh[19]==$canditate20){
				$count20+=0;	
			}
		}
	}
	
	$query="UPDATE ballot SET count1='{$count1}', count2='{$count2}', count3='{$count3}', count4='{$count4}', count5='{$count5}', count6='{$count6}', count7='{$count7}', count8='{$count8}', count9='{$count9}', count10='{$count10}', count11='{$count11}', count12='{$count12}', count13='{$count13}', count14='{$count14}', count15='{$count15}', count16='{$count16}', count17='{$count17}', count18='{$count18}', count19='{$count19}', count20='{$count20}' WHERE name='$name1[0]' ";
	$sql=mysqli_query($connection, $query);
	
	header('Location: ballot.php');
	
	
	if ($count>=2){
		$array=mysqli_query($connection,"SELECT canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20 FROM ballot WHERE name='$name1[1]'");
			while ($row=mysqli_fetch_array($array)){
				$canditate21=$row['canditate1'];
				$count21=$row['count1'];
				$canditate22=$row['canditate2'];
				$count22=$row['count2'];
				$canditate23=$row['canditate3'];
				$count23=$row['count3'];
				$canditate24=$row['canditate4'];
				$count24=$row['count4'];
				$canditate25=$row['canditate5'];
				$count25=$row['count5'];
				$canditate26=$row['canditate6'];
				$count26=$row['count6'];
				$canditate27=$row['canditate7'];
				$count27=$row['count7'];
				$canditate28=$row['canditate8'];
				$count28=$row['count8'];
				$canditate29=$row['canditate9'];
				$count29=$row['count9'];
				$canditate30=$row['canditate10'];
				$count30=$row['count10'];
				$canditate31=$row['canditate11'];
				$count31=$row['count11'];
				$canditate32=$row['canditate12'];
				$count32=$row['count12'];
				$canditate33=$row['canditate13'];
				$count33=$row['count13'];
				$canditate34=$row['canditate14'];
				$count34=$row['count14'];
				$canditate35=$row['canditate15'];
				$count35=$row['count15'];
				$canditate36=$row['canditate16'];
				$count36=$row['count16'];
				$canditate37=$row['canditate17'];
				$count37=$row['count17'];
				$canditate38=$row['canditate19'];
				$count38=$row['count18'];
				$canditate39=$row['canditate19'];
				$count39=$row['count19'];
				$canditate40=$row['canditate20'];
				$count40=$row['count20'];
			}
			
				$i=0;
		if(is_null($canditate21)) {
			$i+=1;
		}
		if(is_null($canditate22)) {
			$i+=1;
		}
		if(is_null($canditate23)) {
			$i+=1;
		}
		if(is_null($canditate24)) {
			$i+=1;;
		}
		if(is_null($canditate25)) {
			$i+=1;
		}
		if(is_null($canditate26)) {
			$i+=1;
		}
		if(is_null($canditate27)) {
			$i+=1;
		}
		if(is_null($canditate28)) {
			$i+=1;
		}
		if(is_null($canditate29)) {
			$i+=1;
		}
		if(is_null($canditate30)) {
			$i+=1;
		}
		if(is_null($canditate31)) {
			$i+=1;
		}
		if(is_null($canditate32)) {
			$i+=1;
		}
		if(is_null($canditate33)) {
			$i+=1;
		}
		if(is_null($canditate34)) {
			$i+=1;
		}
		if(is_null($canditate35)) {
			$i+=1;
		}
		if(is_null($canditate36)) {
			$i+=1;
		}
		if(is_null($canditate37)) {
			$i+=1;
		}
		if(is_null($canditate38)) {
			$i+=1;
		}
		if(is_null($canditate39)) {
			$i+=1;
		}
		if(is_null($canditate40)) {
			$i+=1;
		}
		$i2=20-$i;
	
	if ($i2==2){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=1;
			}else if($epilogh[0]==$canditate2){
				$count2+=1;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=0;
			}else if($epilogh[1]==$canditate2){
				$count2+=0;
			}
		}
	}
	if ($i2==3){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=2;
			}else if($epilogh[0]==$canditate2){
				$count2+=2;
			}else if($epilogh[0]==$canditate3){
				$count3+=2;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=1;
			}else if($epilogh[1]==$canditate2){
				$count2+=1;
			}else if($epilogh[1]==$canditate3){
				$count3+=1;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=0;
			}else if($epilogh[2]==$canditate2){
				$count2+=0;
			}else if($epilogh[2]==$canditate3){
				$count3+=0;
			}
		}
	}
	if ($i2==4){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=3;
			}else if($epilogh[0]==$canditate2){
				$count2+=3;
			}else if($epilogh[0]==$canditate3){
				$count3+=3;
			}else if($epilogh[0]==$canditate4){
				$count4+=3;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=2;
			}else if($epilogh[1]==$canditate2){
				$count2+=2;
			}else if($epilogh[1]==$canditate3){
				$count3+=2;
			}else if($epilogh[1]==$canditate4){
				$count4+=2;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=1;
			}else if($epilogh[2]==$canditate2){
				$count2+=1;
			}else if($epilogh[2]==$canditate3){
				$count3+=1;
			}else if($epilogh[2]==$canditate4){
				$count4+=1;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=0;
			}else if($epilogh[3]==$canditate2){
				$count2+=0;
			}else if($epilogh[3]==$canditate3){
				$count3+=0;
			}else if($epilogh[3]==$canditate4){
				$count4+=0;
			}
		}
	}
	if ($i2==5){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=4;
			}else if($epilogh[0]==$canditate2){
				$count2+=4;
			}else if($epilogh[0]==$canditate3){
				$count3+=4;
			}else if($epilogh[0]==$canditate4){
				$count4+=4;
			}else if($epilogh[0]==$canditate5){
				$count5+=4;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=3;
			}else if($epilogh[1]==$canditate2){
				$count2+=3;
			}else if($epilogh[1]==$canditate3){
				$count3+=3;
			}else if($epilogh[1]==$canditate4){
				$count4+=3;
			}else if($epilogh[1]==$canditate5){
				$count5+=3;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=2;
			}else if($epilogh[2]==$canditate2){
				$count2+=2;
			}else if($epilogh[2]==$canditate3){
				$count3+=2;
			}else if($epilogh[2]==$canditate4){
				$count4+=2;
			}else if($epilogh[2]==$canditate5){
				$count5+=2;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=1;
			}else if($epilogh[3]==$canditate2){
				$count2+=1;
			}else if($epilogh[3]==$canditate3){
				$count3+=1;
			}else if($epilogh[3]==$canditate4){
				$count4+=1;
			}else if($epilogh[3]==$canditate5){
				$count5+=1;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=0;
			}else if($epilogh[4]==$canditate2){
				$count2+=0;
			}else if($epilogh[4]==$canditate3){
				$count3+=0;
			}else if($epilogh[4]==$canditate4){
				$count4+=0;
			}else if($epilogh[4]==$canditate5){
				$count5+=0;	
			}
		}
	}
	if ($i2==6){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=5;
			}else if($epilogh[0]==$canditate2){
				$count2+=5;
			}else if($epilogh[0]==$canditate3){
				$count3+=5;
			}else if($epilogh[0]==$canditate4){
				$count4+=5;
			}else if($epilogh[0]==$canditate5){
				$count5+=5;
			}else if($epilogh[0]==$canditate6){
				$count6+=5;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=4;
			}else if($epilogh[1]==$canditate2){
				$count2+=4;
			}else if($epilogh[1]==$canditate3){
				$count3+=4;
			}else if($epilogh[1]==$canditate4){
				$count4+=4;
			}else if($epilogh[1]==$canditate5){
				$count5+=4;
			}else if($epilogh[1]==$canditate6){
				$count6+=4;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=3;
			}else if($epilogh[2]==$canditate2){
				$count2+=3;
			}else if($epilogh[2]==$canditate3){
				$count3+=3;
			}else if($epilogh[2]==$canditate4){
				$count4+=3;
			}else if($epilogh[2]==$canditate5){
				$count5+=3;
			}else if($epilogh[2]==$canditate6){
				$count6+=3;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=2;
			}else if($epilogh[3]==$canditate2){
				$count2+=2;
			}else if($epilogh[3]==$canditate3){
				$count3+=2;
			}else if($epilogh[3]==$canditate4){
				$count4+=2;
			}else if($epilogh[3]==$canditate5){
				$count5+=2;
			}else if($epilogh[3]==$canditate6){
				$count6+=2;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=1;
			}else if($epilogh[4]==$canditate2){
				$count2+=1;
			}else if($epilogh[4]==$canditate3){
				$count3+=1;
			}else if($epilogh[4]==$canditate4){
				$count4+=1;
			}else if($epilogh[4]==$canditate5){
				$count5+=1;	
			}else if($epilogh[4]==$canditate6){
				$count6+=1;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=0;
			}else if($epilogh[5]==$canditate2){
				$count2+=0;
			}else if($epilogh[5]==$canditate3){
				$count3+=0;
			}else if($epilogh[5]==$canditate4){
				$count4+=0;
			}else if($epilogh[5]==$canditate5){
				$count5+=0;	
			}else if($epilogh[5]==$canditate6){
				$count6+=0;	
			}
		}
	}
	if ($i2==7){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=6;
			}else if($epilogh[0]==$canditate2){
				$count2+=6;
			}else if($epilogh[0]==$canditate3){
				$count3+=6;
			}else if($epilogh[0]==$canditate4){
				$count4+=6;
			}else if($epilogh[0]==$canditate5){
				$count5+=6;
			}else if($epilogh[0]==$canditate6){
				$count6+=6;
			}else if($epilogh[0]==$canditate7){
				$count7+=6;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=5;
			}else if($epilogh[1]==$canditate2){
				$count2+=5;
			}else if($epilogh[1]==$canditate3){
				$count3+=5;
			}else if($epilogh[1]==$canditate4){
				$count4+=5;
			}else if($epilogh[1]==$canditate5){
				$count5+=5;
			}else if($epilogh[1]==$canditate6){
				$count6+=5;
			}else if($epilogh[1]==$canditate7){
				$count7+=5;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=4;
			}else if($epilogh[2]==$canditate2){
				$count2+=4;
			}else if($epilogh[2]==$canditate3){
				$count3+=4;
			}else if($epilogh[2]==$canditate4){
				$count4+=4;
			}else if($epilogh[2]==$canditate5){
				$count5+=4;
			}else if($epilogh[2]==$canditate6){
				$count6+=4;
			}else if($epilogh[2]==$canditate7){
				$count7+=4;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=3;
			}else if($epilogh[3]==$canditate2){
				$count2+=3;
			}else if($epilogh[3]==$canditate3){
				$count3+=3;
			}else if($epilogh[3]==$canditate4){
				$count4+=3;
			}else if($epilogh[3]==$canditate5){
				$count5+=3;
			}else if($epilogh[3]==$canditate6){
				$count6+=3;
			}else if($epilogh[3]==$canditate7){
				$count7+=3;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=2;
			}else if($epilogh[4]==$canditate2){
				$count2+=2;
			}else if($epilogh[4]==$canditate3){
				$count3+=2;
			}else if($epilogh[4]==$canditate4){
				$count4+=2;
			}else if($epilogh[4]==$canditate5){
				$count5+=2;	
			}else if($epilogh[4]==$canditate6){
				$count6+=2;
			}else if($epilogh[4]==$canditate7){
				$count7+=2;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=1;
			}else if($epilogh[5]==$canditate2){
				$count2+=1;
			}else if($epilogh[5]==$canditate3){
				$count3+=1;
			}else if($epilogh[5]==$canditate4){
				$count4+=1;
			}else if($epilogh[5]==$canditate5){
				$count5+=1;	
			}else if($epilogh[5]==$canditate6){
				$count6+=1;	
			}else if($epilogh[5]==$canditate7){
				$count7+=1;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=0;
			}else if($epilogh[6]==$canditate2){
				$count2+=0;
			}else if($epilogh[6]==$canditate3){
				$count3+=0;
			}else if($epilogh[6]==$canditate4){
				$count4+=0;
			}else if($epilogh[6]==$canditate5){
				$count5+=0;	
			}else if($epilogh[6]==$canditate6){
				$count6+=0;	
			}else if($epilogh[6]==$canditate7){
				$count7+=0;	
			}
		}
	}
	if ($i2==8){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=7;
			}else if($epilogh[0]==$canditate2){
				$count2+=7;
			}else if($epilogh[0]==$canditate3){
				$count3+=7;
			}else if($epilogh[0]==$canditate4){
				$count4+=7;
			}else if($epilogh[0]==$canditate5){
				$count5+=7;
			}else if($epilogh[0]==$canditate6){
				$count6+=7;
			}else if($epilogh[0]==$canditate7){
				$count7+=7;
			}else if($epilogh[0]==$canditate8){
				$count8+=7;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=6;
			}else if($epilogh[1]==$canditate2){
				$count2+=6;
			}else if($epilogh[1]==$canditate3){
				$count3+=6;
			}else if($epilogh[1]==$canditate4){
				$count4+=6;
			}else if($epilogh[1]==$canditate5){
				$count5+=6;
			}else if($epilogh[1]==$canditate6){
				$count6+=6;
			}else if($epilogh[1]==$canditate7){
				$count7+=6;
			}else if($epilogh[1]==$canditate8){
				$count8+=6;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=5;
			}else if($epilogh[2]==$canditate2){
				$count2+=5;
			}else if($epilogh[2]==$canditate3){
				$count3+=5;
			}else if($epilogh[2]==$canditate4){
				$count4+=5;
			}else if($epilogh[2]==$canditate5){
				$count5+=5;
			}else if($epilogh[2]==$canditate6){
				$count6+=5;
			}else if($epilogh[2]==$canditate7){
				$count7+=5;
			}else if($epilogh[2]==$canditate8){
				$count8+=5;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=4;
			}else if($epilogh[3]==$canditate2){
				$count2+=4;
			}else if($epilogh[3]==$canditate3){
				$count3+=4;
			}else if($epilogh[3]==$canditate4){
				$count4+=4;
			}else if($epilogh[3]==$canditate5){
				$count5+=4;
			}else if($epilogh[3]==$canditate6){
				$count6+=4;
			}else if($epilogh[3]==$canditate7){
				$count7+=4;
			}else if($epilogh[3]==$canditate8){
				$count8+=4;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=3;
			}else if($epilogh[4]==$canditate2){
				$count2+=3;
			}else if($epilogh[4]==$canditate3){
				$count3+=3;
			}else if($epilogh[4]==$canditate4){
				$count4+=3;
			}else if($epilogh[4]==$canditate5){
				$count5+=3;	
			}else if($epilogh[4]==$canditate6){
				$count6+=3;
			}else if($epilogh[4]==$canditate7){
				$count7+=3;
			}else if($epilogh[4]==$canditate8){
				$count8+=3;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=2;
			}else if($epilogh[5]==$canditate2){
				$count2+=2;
			}else if($epilogh[5]==$canditate3){
				$count3+=2;
			}else if($epilogh[5]==$canditate4){
				$count4+=2;
			}else if($epilogh[5]==$canditate5){
				$count5+=2;	
			}else if($epilogh[5]==$canditate6){
				$count6+=2;	
			}else if($epilogh[5]==$canditate7){
				$count7+=2;
			}else if($epilogh[5]==$canditate8){
				$count8+=2;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=1;
			}else if($epilogh[6]==$canditate2){
				$count2+=1;
			}else if($epilogh[6]==$canditate3){
				$count3+=1;
			}else if($epilogh[6]==$canditate4){
				$count4+=1;
			}else if($epilogh[6]==$canditate5){
				$count5+=1;	
			}else if($epilogh[6]==$canditate6){
				$count6+=1;	
			}else if($epilogh[6]==$canditate7){
				$count7+=1;	
			}else if($epilogh[6]==$canditate8){
				$count8+=1;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=0;
			}else if($epilogh[7]==$canditate2){
				$count2+=0;
			}else if($epilogh[7]==$canditate3){
				$count3+=0;
			}else if($epilogh[7]==$canditate4){
				$count4+=0;
			}else if($epilogh[7]==$canditate5){
				$count5+=0;	
			}else if($epilogh[7]==$canditate6){
				$count6+=0;	
			}else if($epilogh[7]==$canditate7){
				$count7+=0;	
			}else if($epilogh[7]==$canditate8){
				$count8+=0;	
			}
		}
	}
	if ($i2==9){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=8;
			}else if($epilogh[0]==$canditate2){
				$count2+=8;
			}else if($epilogh[0]==$canditate3){
				$count3+=8;
			}else if($epilogh[0]==$canditate4){
				$count4+=8;
			}else if($epilogh[0]==$canditate5){
				$count5+=8;
			}else if($epilogh[0]==$canditate6){
				$count6+=8;
			}else if($epilogh[0]==$canditate7){
				$count7+=8;
			}else if($epilogh[0]==$canditate8){
				$count8+=8;
			}else if($epilogh[0]==$canditate9){
				$count9+=8;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=7;
			}else if($epilogh[1]==$canditate2){
				$count2+=7;
			}else if($epilogh[1]==$canditate3){
				$count3+=7;
			}else if($epilogh[1]==$canditate4){
				$count4+=7;
			}else if($epilogh[1]==$canditate5){
				$count5+=7;
			}else if($epilogh[1]==$canditate6){
				$count6+=7;
			}else if($epilogh[1]==$canditate7){
				$count7+=7;
			}else if($epilogh[1]==$canditate8){
				$count8+=7;
			}else if($epilogh[1]==$canditate9){
				$count9+=7;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=6;
			}else if($epilogh[2]==$canditate2){
				$count2+=6;
			}else if($epilogh[2]==$canditate3){
				$count3+=6;
			}else if($epilogh[2]==$canditate4){
				$count4+=6;
			}else if($epilogh[2]==$canditate5){
				$count5+=6;
			}else if($epilogh[2]==$canditate6){
				$count6+=6;
			}else if($epilogh[2]==$canditate7){
				$count7+=6;
			}else if($epilogh[2]==$canditate8){
				$count8+=6;
			}else if($epilogh[2]==$canditate9){
				$count9+=6;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=5;
			}else if($epilogh[3]==$canditate2){
				$count2+=5;
			}else if($epilogh[3]==$canditate3){
				$count3+=5;
			}else if($epilogh[3]==$canditate4){
				$count4+=5;
			}else if($epilogh[3]==$canditate5){
				$count5+=5;
			}else if($epilogh[3]==$canditate6){
				$count6+=5;
			}else if($epilogh[3]==$canditate7){
				$count7+=5;
			}else if($epilogh[3]==$canditate8){
				$count8+=5;
			}else if($epilogh[3]==$canditate9){
				$count9+=5;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=4;
			}else if($epilogh[4]==$canditate2){
				$count2+=4;
			}else if($epilogh[4]==$canditate3){
				$count3+=4;
			}else if($epilogh[4]==$canditate4){
				$count4+=4;
			}else if($epilogh[4]==$canditate5){
				$count5+=4;	
			}else if($epilogh[4]==$canditate6){
				$count6+=4;
			}else if($epilogh[4]==$canditate7){
				$count7+=4;
			}else if($epilogh[4]==$canditate8){
				$count8+=4;
			}else if($epilogh[4]==$canditate9){
				$count9+=4;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=3;
			}else if($epilogh[5]==$canditate2){
				$count2+=3;
			}else if($epilogh[5]==$canditate3){
				$count3+=3;
			}else if($epilogh[5]==$canditate4){
				$count4+=3;
			}else if($epilogh[5]==$canditate5){
				$count5+=3;	
			}else if($epilogh[5]==$canditate6){
				$count6+=3;	
			}else if($epilogh[5]==$canditate7){
				$count7+=3;
			}else if($epilogh[5]==$canditate8){
				$count8+=3;
			}else if($epilogh[5]==$canditate9){
				$count9+=3;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=2;
			}else if($epilogh[6]==$canditate2){
				$count2+=2;
			}else if($epilogh[6]==$canditate3){
				$count3+=2;
			}else if($epilogh[6]==$canditate4){
				$count4+=2;
			}else if($epilogh[6]==$canditate5){
				$count5+=2;	
			}else if($epilogh[6]==$canditate6){
				$count6+=2;	
			}else if($epilogh[6]==$canditate7){
				$count7+=2;	
			}else if($epilogh[6]==$canditate8){
				$count8+=2;
			}else if($epilogh[6]==$canditate9){
				$count9+=2;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=1;
			}else if($epilogh[7]==$canditate2){
				$count2+=1;
			}else if($epilogh[7]==$canditate3){
				$count3+=1;
			}else if($epilogh[7]==$canditate4){
				$count4+=1;
			}else if($epilogh[7]==$canditate5){
				$count5+=1;	
			}else if($epilogh[7]==$canditate6){
				$count6+=1;	
			}else if($epilogh[7]==$canditate7){
				$count7+=1;	
			}else if($epilogh[7]==$canditate8){
				$count8+=1;	
			}else if($epilogh[7]==$canditate9){
				$count9+=1;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=0;
			}else if($epilogh[8]==$canditate2){
				$count2+=0;
			}else if($epilogh[8]==$canditate3){
				$count3+=0;
			}else if($epilogh[8]==$canditate4){
				$count4+=0;
			}else if($epilogh[8]==$canditate5){
				$count5+=0;	
			}else if($epilogh[8]==$canditate6){
				$count6+=0;	
			}else if($epilogh[8]==$canditate7){
				$count7+=0;	
			}else if($epilogh[8]==$canditate8){
				$count8+=0;	
			}else if($epilogh[8]==$canditate9){
				$count9+=0;	
			}
		}
	}
	if ($i2==10){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=9;
			}else if($epilogh[0]==$canditate2){
				$count2+=9;
			}else if($epilogh[0]==$canditate3){
				$count3+=9;
			}else if($epilogh[0]==$canditate4){
				$count4+=9;
			}else if($epilogh[0]==$canditate5){
				$count5+=9;
			}else if($epilogh[0]==$canditate6){
				$count6+=9;
			}else if($epilogh[0]==$canditate7){
				$count7+=9;
			}else if($epilogh[0]==$canditate8){
				$count8+=9;
			}else if($epilogh[0]==$canditate9){
				$count9+=9;
			}else if($epilogh[0]==$canditate10){
				$count10+=9;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=8;
			}else if($epilogh[1]==$canditate2){
				$count2+=8;
			}else if($epilogh[1]==$canditate3){
				$count3+=8;
			}else if($epilogh[1]==$canditate4){
				$count4+=8;
			}else if($epilogh[1]==$canditate5){
				$count5+=8;
			}else if($epilogh[1]==$canditate6){
				$count6+=8;
			}else if($epilogh[1]==$canditate7){
				$count7+=8;
			}else if($epilogh[1]==$canditate8){
				$count8+=8;
			}else if($epilogh[1]==$canditate9){
				$count9+=8;
			}else if($epilogh[1]==$canditate10){
				$count10+=8;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=7;
			}else if($epilogh[2]==$canditate2){
				$count2+=7;
			}else if($epilogh[2]==$canditate3){
				$count3+=7;
			}else if($epilogh[2]==$canditate4){
				$count4+=7;
			}else if($epilogh[2]==$canditate5){
				$count5+=7;
			}else if($epilogh[2]==$canditate6){
				$count6+=7;
			}else if($epilogh[2]==$canditate7){
				$count7+=7;
			}else if($epilogh[2]==$canditate8){
				$count8+=7;
			}else if($epilogh[2]==$canditate9){
				$count9+=7;
			}else if($epilogh[2]==$canditate10){
				$count10+=7;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=6;
			}else if($epilogh[3]==$canditate2){
				$count2+=6;
			}else if($epilogh[3]==$canditate3){
				$count3+=6;
			}else if($epilogh[3]==$canditate4){
				$count4+=6;
			}else if($epilogh[3]==$canditate5){
				$count5+=6;
			}else if($epilogh[3]==$canditate6){
				$count6+=6;
			}else if($epilogh[3]==$canditate7){
				$count7+=6;
			}else if($epilogh[3]==$canditate8){
				$count8+=6;
			}else if($epilogh[3]==$canditate9){
				$count9+=6;
			}else if($epilogh[3]==$canditate10){
				$count10+=6;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=5;
			}else if($epilogh[4]==$canditate2){
				$count2+=5;
			}else if($epilogh[4]==$canditate3){
				$count3+=5;
			}else if($epilogh[4]==$canditate4){
				$count4+=5;
			}else if($epilogh[4]==$canditate5){
				$count5+=5;	
			}else if($epilogh[4]==$canditate6){
				$count6+=5;
			}else if($epilogh[4]==$canditate7){
				$count7+=5;
			}else if($epilogh[4]==$canditate8){
				$count8+=5;
			}else if($epilogh[4]==$canditate9){
				$count9+=5;
			}else if($epilogh[4]==$canditate10){
				$count10+=5;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=4;
			}else if($epilogh[5]==$canditate2){
				$count2+=4;
			}else if($epilogh[5]==$canditate3){
				$count3+=4;
			}else if($epilogh[5]==$canditate4){
				$count4+=4;
			}else if($epilogh[5]==$canditate5){
				$count5+=4;	
			}else if($epilogh[5]==$canditate6){
				$count6+=4;	
			}else if($epilogh[5]==$canditate7){
				$count7+=4;
			}else if($epilogh[5]==$canditate8){
				$count8+=4;
			}else if($epilogh[5]==$canditate9){
				$count9+=4;
			}else if($epilogh[5]==$canditate10){
				$count10+=4;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=3;
			}else if($epilogh[6]==$canditate2){
				$count2+=3;
			}else if($epilogh[6]==$canditate3){
				$count3+=3;
			}else if($epilogh[6]==$canditate4){
				$count4+=3;
			}else if($epilogh[6]==$canditate5){
				$count5+=3;	
			}else if($epilogh[6]==$canditate6){
				$count6+=3;	
			}else if($epilogh[6]==$canditate7){
				$count7+=3;	
			}else if($epilogh[6]==$canditate8){
				$count8+=3;
			}else if($epilogh[6]==$canditate9){
				$count9+=3;
			}else if($epilogh[6]==$canditate10){
				$count10+=3;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=2;
			}else if($epilogh[7]==$canditate2){
				$count2+=2;
			}else if($epilogh[7]==$canditate3){
				$count3+=2;
			}else if($epilogh[7]==$canditate4){
				$count4+=2;
			}else if($epilogh[7]==$canditate5){
				$count5+=2;	
			}else if($epilogh[7]==$canditate6){
				$count6+=2;	
			}else if($epilogh[7]==$canditate7){
				$count7+=2;	
			}else if($epilogh[7]==$canditate8){
				$count8+=2;	
			}else if($epilogh[7]==$canditate9){
				$count9+=2;
			}else if($epilogh[7]==$canditate10){
				$count10+=2;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=1;
			}else if($epilogh[8]==$canditate2){
				$count2+=1;
			}else if($epilogh[8]==$canditate3){
				$count3+=1;
			}else if($epilogh[8]==$canditate4){
				$count4+=1;
			}else if($epilogh[8]==$canditate5){
				$count5+=1;	
			}else if($epilogh[8]==$canditate6){
				$count6+=1;	
			}else if($epilogh[8]==$canditate7){
				$count7+=1;	
			}else if($epilogh[8]==$canditate8){
				$count8+=1;	
			}else if($epilogh[8]==$canditate9){
				$count9+=1;	
			}else if($epilogh[8]==$canditate10){
				$count10+=1;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=0;
			}else if($epilogh[9]==$canditate2){
				$count2+=0;
			}else if($epilogh[9]==$canditate3){
				$count3+=0;
			}else if($epilogh[9]==$canditate4){
				$count4+=0;
			}else if($epilogh[9]==$canditate5){
				$count5+=0;	
			}else if($epilogh[9]==$canditate6){
				$count6+=0;	
			}else if($epilogh[9]==$canditate7){
				$count7+=0;	
			}else if($epilogh[9]==$canditate8){
				$count8+=0;	
			}else if($epilogh[9]==$canditate9){
				$count9+=0;	
			}else if($epilogh[9]==$canditate10){
				$count10+=0;	
			}
		}
	}
	if ($i2==11){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate1){
				$count1+=10;
			}else if($epilogh[0]==$canditate2){
				$count2+=10;
			}else if($epilogh[0]==$canditate3){
				$count3+=10;
			}else if($epilogh[0]==$canditate4){
				$count4+=10;
			}else if($epilogh[0]==$canditate5){
				$count5+=10;
			}else if($epilogh[0]==$canditate6){
				$count6+=10;
			}else if($epilogh[0]==$canditate7){
				$count7+=10;
			}else if($epilogh[0]==$canditate8){
				$count8+=10;
			}else if($epilogh[0]==$canditate9){
				$count9+=10;
			}else if($epilogh[0]==$canditate10){
				$count10+=10;
			}else if($epilogh[0]==$canditate11){
				$count11+=10;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate1){
				$count1+=9;
			}else if($epilogh[1]==$canditate2){
				$count2+=9;
			}else if($epilogh[1]==$canditate3){
				$count3+=9;
			}else if($epilogh[1]==$canditate4){
				$count4+=9;
			}else if($epilogh[1]==$canditate5){
				$count5+=9;
			}else if($epilogh[1]==$canditate6){
				$count6+=9;
			}else if($epilogh[1]==$canditate7){
				$count7+=9;
			}else if($epilogh[1]==$canditate8){
				$count8+=9;
			}else if($epilogh[1]==$canditate9){
				$count9+=9;
			}else if($epilogh[1]==$canditate10){
				$count10+=9;
			}else if($epilogh[1]==$canditate11){
				$count11+=9;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate1){
				$count1+=8;
			}else if($epilogh[2]==$canditate2){
				$count2+=8;
			}else if($epilogh[2]==$canditate3){
				$count3+=8;
			}else if($epilogh[2]==$canditate4){
				$count4+=8;
			}else if($epilogh[2]==$canditate5){
				$count5+=8;
			}else if($epilogh[2]==$canditate6){
				$count6+=8;
			}else if($epilogh[2]==$canditate7){
				$count7+=8;
			}else if($epilogh[2]==$canditate8){
				$count8+=8;
			}else if($epilogh[2]==$canditate9){
				$count9+=8;
			}else if($epilogh[2]==$canditate10){
				$count10+=8;
			}else if($epilogh[2]==$canditate11){
				$count11+=8;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate1){
				$count1+=7;
			}else if($epilogh[3]==$canditate2){
				$count2+=7;
			}else if($epilogh[3]==$canditate3){
				$count3+=7;
			}else if($epilogh[3]==$canditate4){
				$count4+=7;
			}else if($epilogh[3]==$canditate5){
				$count5+=7;
			}else if($epilogh[3]==$canditate6){
				$count6+=7;
			}else if($epilogh[3]==$canditate7){
				$count7+=7;
			}else if($epilogh[3]==$canditate8){
				$count8+=7;
			}else if($epilogh[3]==$canditate9){
				$count9+=7;
			}else if($epilogh[3]==$canditate10){
				$count10+=7;
			}else if($epilogh[3]==$canditate11){
				$count11+=7;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate1){
				$count1+=6;
			}else if($epilogh[4]==$canditate2){
				$count2+=6;
			}else if($epilogh[4]==$canditate3){
				$count3+=6;
			}else if($epilogh[4]==$canditate4){
				$count4+=6;
			}else if($epilogh[4]==$canditate5){
				$count5+=6;	
			}else if($epilogh[4]==$canditate6){
				$count6+=6;
			}else if($epilogh[4]==$canditate7){
				$count7+=6;
			}else if($epilogh[4]==$canditate8){
				$count8+=6;
			}else if($epilogh[4]==$canditate9){
				$count9+=6;
			}else if($epilogh[4]==$canditate10){
				$count10+=6;
			}else if($epilogh[4]==$canditate11){
				$count11+=6;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate1){
				$count1+=5;
			}else if($epilogh[5]==$canditate2){
				$count2+=5;
			}else if($epilogh[5]==$canditate3){
				$count3+=5;
			}else if($epilogh[5]==$canditate4){
				$count4+=5;
			}else if($epilogh[5]==$canditate5){
				$count5+=5;	
			}else if($epilogh[5]==$canditate6){
				$count6+=5;	
			}else if($epilogh[5]==$canditate7){
				$count7+=5;
			}else if($epilogh[5]==$canditate8){
				$count8+=5;
			}else if($epilogh[5]==$canditate9){
				$count9+=5;
			}else if($epilogh[5]==$canditate10){
				$count10+=5;
			}else if($epilogh[5]==$canditate11){
				$count11+=5;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate1){
				$count1+=4;
			}else if($epilogh[6]==$canditate2){
				$count2+=4;
			}else if($epilogh[6]==$canditate3){
				$count3+=4;
			}else if($epilogh[6]==$canditate4){
				$count4+=4;
			}else if($epilogh[6]==$canditate5){
				$count5+=4;	
			}else if($epilogh[6]==$canditate6){
				$count6+=4;	
			}else if($epilogh[6]==$canditate7){
				$count7+=4;	
			}else if($epilogh[6]==$canditate8){
				$count8+=4;
			}else if($epilogh[6]==$canditate9){
				$count9+=4;
			}else if($epilogh[6]==$canditate10){
				$count10+=4;
			}else if($epilogh[6]==$canditate11){
				$count11+=4;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate1){
				$count1+=3;
			}else if($epilogh[7]==$canditate2){
				$count2+=3;
			}else if($epilogh[7]==$canditate3){
				$count3+=3;
			}else if($epilogh[7]==$canditate4){
				$count4+=3;
			}else if($epilogh[7]==$canditate5){
				$count5+=3;	
			}else if($epilogh[7]==$canditate6){
				$count6+=3;	
			}else if($epilogh[7]==$canditate7){
				$count7+=3;	
			}else if($epilogh[7]==$canditate8){
				$count8+=3;	
			}else if($epilogh[7]==$canditate9){
				$count9+=3;
			}else if($epilogh[7]==$canditate10){
				$count10+=3;
			}else if($epilogh[7]==$canditate11){
				$count11+=3;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate1){
				$count1+=2;
			}else if($epilogh[8]==$canditate2){
				$count2+=2;
			}else if($epilogh[8]==$canditate3){
				$count3+=2;
			}else if($epilogh[8]==$canditate4){
				$count4+=2;
			}else if($epilogh[8]==$canditate5){
				$count5+=2;	
			}else if($epilogh[8]==$canditate6){
				$count6+=2;	
			}else if($epilogh[8]==$canditate7){
				$count7+=2;	
			}else if($epilogh[8]==$canditate8){
				$count8+=2;	
			}else if($epilogh[8]==$canditate9){
				$count9+=2;	
			}else if($epilogh[8]==$canditate10){
				$count10+=2;
			}else if($epilogh[8]==$canditate11){
				$count11+=2;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count1+=1;
			}else if($epilogh[9]==$canditate2){
				$count2+=1;
			}else if($epilogh[9]==$canditate3){
				$count3+=1;
			}else if($epilogh[9]==$canditate4){
				$count4+=1;
			}else if($epilogh[9]==$canditate5){
				$count5+=1;	
			}else if($epilogh[9]==$canditate6){
				$count6+=1;	
			}else if($epilogh[9]==$canditate7){
				$count7+=1;	
			}else if($epilogh[9]==$canditate8){
				$count8+=1;	
			}else if($epilogh[9]==$canditate9){
				$count9+=1;	
			}else if($epilogh[9]==$canditate10){
				$count10+=1;	
			}else if($epilogh[9]==$canditate11){
				$count11+=1;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate1){
				$count1+=0;
			}else if($epilogh[10]==$canditate2){
				$count2+=0;
			}else if($epilogh[10]==$canditate3){
				$count3+=0;
			}else if($epilogh[10]==$canditate4){
				$count4+=0;
			}else if($epilogh[10]==$canditate5){
				$count5+=0;	
			}else if($epilogh[10]==$canditate6){
				$count6+=0;	
			}else if($epilogh[10]==$canditate7){
				$count7+=0;	
			}else if($epilogh[10]==$canditate8){
				$count8+=0;	
			}else if($epilogh[10]==$canditate9){
				$count9+=0;	
			}else if($epilogh[10]==$canditate10){
				$count10+=0;	
			}else if($epilogh[10]==$canditate11){
				$count11+=0;	
			}
		}
	}
	//////////////////////////////////////edw///////////////////////////////////////paw pros ta panw
	if ($i2==12){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=11;
			}else if($epilogh[0]==$canditate22){
				$count22+=11;
			}else if($epilogh[0]==$canditate23){
				$count23+=11;
			}else if($epilogh[0]==$canditate24){
				$count24+=11;
			}else if($epilogh[0]==$canditate25){
				$count25+=11;
			}else if($epilogh[0]==$canditate26){
				$count26+=11;
			}else if($epilogh[0]==$canditate27){
				$count27+=11;
			}else if($epilogh[0]==$canditate28){
				$count28+=11;
			}else if($epilogh[0]==$canditate29){
				$count29+=11;
			}else if($epilogh[0]==$canditate30){
				$count30+=11;
			}else if($epilogh[0]==$canditate31){
				$count31+=11;
			}else if($epilogh[0]==$canditate32){
				$count32+=11;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=10;
			}else if($epilogh[1]==$canditate22){
				$count22+=10;
			}else if($epilogh[1]==$canditate23){
				$count23+=10;
			}else if($epilogh[1]==$canditate24){
				$count24+=10;
			}else if($epilogh[1]==$canditate25){
				$count25+=10;
			}else if($epilogh[1]==$canditate26){
				$count26+=10;
			}else if($epilogh[1]==$canditate27){
				$count27+=10;
			}else if($epilogh[1]==$canditate28){
				$count28+=10;
			}else if($epilogh[1]==$canditate29){
				$count29+=10;
			}else if($epilogh[1]==$canditate30){
				$count30+=10;
			}else if($epilogh[1]==$canditate31){
				$count31+=10;
			}else if($epilogh[1]==$canditate32){
				$count32+=10;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=9;
			}else if($epilogh[2]==$canditate22){
				$count22+=9;
			}else if($epilogh[2]==$canditate23){
				$count23+=9;
			}else if($epilogh[2]==$canditate24){
				$count24+=9;
			}else if($epilogh[2]==$canditate25){
				$count25+=9;
			}else if($epilogh[2]==$canditate26){
				$count26+=9;
			}else if($epilogh[2]==$canditate27){
				$count27+=9;
			}else if($epilogh[2]==$canditate28){
				$count28+=9;
			}else if($epilogh[2]==$canditate29){
				$count29+=9;
			}else if($epilogh[2]==$canditate30){
				$count30+=9;
			}else if($epilogh[2]==$canditate31){
				$count31+=9;
			}else if($epilogh[2]==$canditate32){
				$count32+=9;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=8;
			}else if($epilogh[3]==$canditate22){
				$count22+=8;
			}else if($epilogh[3]==$canditate23){
				$count23+=8;
			}else if($epilogh[3]==$canditate24){
				$count24+=8;
			}else if($epilogh[3]==$canditate25){
				$count25+=8;
			}else if($epilogh[3]==$canditate26){
				$count26+=8;
			}else if($epilogh[3]==$canditate27){
				$count27+=8;
			}else if($epilogh[3]==$canditate28){
				$count28+=8;
			}else if($epilogh[3]==$canditate29){
				$count29+=8;
			}else if($epilogh[3]==$canditate30){
				$count30+=8;
			}else if($epilogh[3]==$canditate31){
				$count31+=8;
			}else if($epilogh[3]==$canditate32){
				$count32+=8;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=7;
			}else if($epilogh[4]==$canditate22){
				$count22+=7;
			}else if($epilogh[4]==$canditate23){
				$count23+=7;
			}else if($epilogh[4]==$canditate24){
				$count24+=7;
			}else if($epilogh[4]==$canditate25){
				$count25+=7;	
			}else if($epilogh[4]==$canditate26){
				$count26+=7;
			}else if($epilogh[4]==$canditate27){
				$count27+=7;
			}else if($epilogh[4]==$canditate28){
				$count28+=7;
			}else if($epilogh[4]==$canditate29){
				$count29+=7;
			}else if($epilogh[4]==$canditate30){
				$count30+=7;
			}else if($epilogh[4]==$canditate31){
				$count31+=7;
			}else if($epilogh[4]==$canditate32){
				$count32+=7;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=6;
			}else if($epilogh[5]==$canditate22){
				$count22+=6;
			}else if($epilogh[5]==$canditate23){
				$count23+=6;
			}else if($epilogh[5]==$canditate24){
				$count24+=6;
			}else if($epilogh[5]==$canditate25){
				$count25+=6;	
			}else if($epilogh[5]==$canditate26){
				$count26+=6;	
			}else if($epilogh[5]==$canditate27){
				$count27+=6;
			}else if($epilogh[5]==$canditate28){
				$count28+=6;
			}else if($epilogh[5]==$canditate29){
				$count29+=6;
			}else if($epilogh[5]==$canditate30){
				$count30+=6;
			}else if($epilogh[5]==$canditate31){
				$count31+=6;
			}else if($epilogh[5]==$canditate32){
				$count32+=6;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=5;
			}else if($epilogh[6]==$canditate22){
				$count22+=5;
			}else if($epilogh[6]==$canditate23){
				$count23+=5;
			}else if($epilogh[6]==$canditate24){
				$count24+=5;
			}else if($epilogh[6]==$canditate25){
				$count25+=5;	
			}else if($epilogh[6]==$canditate26){
				$count26+=5;	
			}else if($epilogh[6]==$canditate27){
				$count27+=5;	
			}else if($epilogh[6]==$canditate28){
				$count28+=5;
			}else if($epilogh[6]==$canditate29){
				$count29+=5;
			}else if($epilogh[6]==$canditate30){
				$count30+=5;
			}else if($epilogh[6]==$canditate31){
				$count31+=5;
			}else if($epilogh[6]==$canditate32){
				$count32+=5;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=4;
			}else if($epilogh[7]==$canditate22){
				$count22+=4;
			}else if($epilogh[7]==$canditate23){
				$count23+=4;
			}else if($epilogh[7]==$canditate24){
				$count24+=4;
			}else if($epilogh[7]==$canditate25){
				$count25+=4;	
			}else if($epilogh[7]==$canditate26){
				$count26+=4;	
			}else if($epilogh[7]==$canditate27){
				$count27+=4;	
			}else if($epilogh[7]==$canditate28){
				$count28+=4;	
			}else if($epilogh[7]==$canditate29){
				$count29+=4;
			}else if($epilogh[7]==$canditate30){
				$count30+=4;
			}else if($epilogh[7]==$canditate31){
				$count31+=4;
			}else if($epilogh[7]==$canditate32){
				$count32+=4;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=3;
			}else if($epilogh[8]==$canditate22){
				$count22+=3;
			}else if($epilogh[8]==$canditate23){
				$count23+=3;
			}else if($epilogh[8]==$canditate24){
				$count24+=3;
			}else if($epilogh[8]==$canditate25){
				$count25+=3;	
			}else if($epilogh[8]==$canditate26){
				$count26+=3;	
			}else if($epilogh[8]==$canditate27){
				$count27+=3;	
			}else if($epilogh[8]==$canditate28){
				$count28+=3;	
			}else if($epilogh[8]==$canditate29){
				$count29+=3;	
			}else if($epilogh[8]==$canditate30){
				$count30+=3;
			}else if($epilogh[8]==$canditate31){
				$count31+=3;
			}else if($epilogh[8]==$canditate32){
				$count32+=3;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=2;
			}else if($epilogh[9]==$canditate22){
				$count22+=2;
			}else if($epilogh[9]==$canditate23){
				$count23+=2;
			}else if($epilogh[9]==$canditate24){
				$count24+=2;
			}else if($epilogh[9]==$canditate25){
				$count25+=2;	
			}else if($epilogh[9]==$canditate26){
				$count26+=2;	
			}else if($epilogh[9]==$canditate27){
				$count27+=2;	
			}else if($epilogh[9]==$canditate28){
				$count28+=2;	
			}else if($epilogh[9]==$canditate29){
				$count29+=2;	
			}else if($epilogh[9]==$canditate30){
				$count30+=2;	
			}else if($epilogh[9]==$canditate31){
				$count31+=2;
			}else if($epilogh[9]==$canditate32){
				$count32+=2;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=1;
			}else if($epilogh[10]==$canditate22){
				$count22+=1;
			}else if($epilogh[10]==$canditate23){
				$count23+=1;
			}else if($epilogh[10]==$canditate24){
				$count24+=1;
			}else if($epilogh[10]==$canditate25){
				$count25+=1;	
			}else if($epilogh[10]==$canditate26){
				$count26+=1;	
			}else if($epilogh[10]==$canditate27){
				$count27+=1;	
			}else if($epilogh[10]==$canditate28){
				$count28+=1;	
			}else if($epilogh[10]==$canditate29){
				$count29+=1;	
			}else if($epilogh[10]==$canditate30){
				$count30+=1;	
			}else if($epilogh[10]==$canditate31){
				$count31+=1;	
			}else if($epilogh[10]==$canditate32){
				$count32+=1;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=0;
			}else if($epilogh[11]==$canditate22){
				$count22+=0;
			}else if($epilogh[11]==$canditate23){
				$count23+=0;
			}else if($epilogh[11]==$canditate24){
				$count24+=0;
			}else if($epilogh[11]==$canditate25){
				$count25+=0;	
			}else if($epilogh[11]==$canditate26){
				$count26+=0;	
			}else if($epilogh[11]==$canditate27){
				$count27+=0;	
			}else if($epilogh[11]==$canditate28){
				$count28+=0;	
			}else if($epilogh[11]==$canditate29){
				$count29+=0;	
			}else if($epilogh[11]==$canditate30){
				$count30+=0;	
			}else if($epilogh[11]==$canditate31){
				$count31+=0;	
			}else if($epilogh[11]==$canditate32){
				$count32+=0;	
			}
		}
	}
	if ($i2==13){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=12;
			}else if($epilogh[0]==$canditate22){
				$count22+=12;
			}else if($epilogh[0]==$canditate23){
				$count23+=12;
			}else if($epilogh[0]==$canditate24){
				$count24+=12;
			}else if($epilogh[0]==$canditate25){
				$count25+=12;
			}else if($epilogh[0]==$canditate26){
				$count26+=12;
			}else if($epilogh[0]==$canditate27){
				$count27+=12;
			}else if($epilogh[0]==$canditate28){
				$count28+=12;
			}else if($epilogh[0]==$canditate29){
				$count29+=12;
			}else if($epilogh[0]==$canditate30){
				$count30+=12;
			}else if($epilogh[0]==$canditate31){
				$count31+=12;
			}else if($epilogh[0]==$canditate32){
				$count32+=12;
			}else if($epilogh[0]==$canditate33){
				$count33+=12;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=11;
			}else if($epilogh[1]==$canditate22){
				$count22+=11;
			}else if($epilogh[1]==$canditate23){
				$count23+=11;
			}else if($epilogh[1]==$canditate24){
				$count24+=11;
			}else if($epilogh[1]==$canditate25){
				$count25+=11;
			}else if($epilogh[1]==$canditate26){
				$count26+=11;
			}else if($epilogh[1]==$canditate27){
				$count27+=11;
			}else if($epilogh[1]==$canditate28){
				$count28+=11;
			}else if($epilogh[1]==$canditate29){
				$count29+=11;
			}else if($epilogh[1]==$canditate30){
				$count30+=11;
			}else if($epilogh[1]==$canditate31){
				$count31+=11;
			}else if($epilogh[1]==$canditate32){
				$count32+=11;
			}else if($epilogh[1]==$canditate33){
				$count33+=11;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=10;
			}else if($epilogh[2]==$canditate22){
				$count22+=10;
			}else if($epilogh[2]==$canditate23){
				$count23+=10;
			}else if($epilogh[2]==$canditate24){
				$count24+=10;
			}else if($epilogh[2]==$canditate25){
				$count25+=10;
			}else if($epilogh[2]==$canditate26){
				$count26+=10;
			}else if($epilogh[2]==$canditate27){
				$count27+=10;
			}else if($epilogh[2]==$canditate28){
				$count28+=10;
			}else if($epilogh[2]==$canditate29){
				$count29+=10;
			}else if($epilogh[2]==$canditate30){
				$count30+=10;
			}else if($epilogh[2]==$canditate31){
				$count31+=10;
			}else if($epilogh[2]==$canditate32){
				$count32+=10;
			}else if($epilogh[2]==$canditate33){
				$count33+=10;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=9;
			}else if($epilogh[3]==$canditate22){
				$count22+=9;
			}else if($epilogh[3]==$canditate23){
				$count23+=9;
			}else if($epilogh[3]==$canditate24){
				$count24+=9;
			}else if($epilogh[3]==$canditate25){
				$count25+=9;
			}else if($epilogh[3]==$canditate26){
				$count26+=9;
			}else if($epilogh[3]==$canditate27){
				$count27+=9;
			}else if($epilogh[3]==$canditate28){
				$count28+=9;
			}else if($epilogh[3]==$canditate29){
				$count29+=9;
			}else if($epilogh[3]==$canditate30){
				$count30+=9;
			}else if($epilogh[3]==$canditate31){
				$count31+=9;
			}else if($epilogh[3]==$canditate32){
				$count32+=9;
			}else if($epilogh[3]==$canditate33){
				$count33+=9;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=8;
			}else if($epilogh[4]==$canditate22){
				$count22+=8;
			}else if($epilogh[4]==$canditate23){
				$count23+=8;
			}else if($epilogh[4]==$canditate24){
				$count24+=8;
			}else if($epilogh[4]==$canditate25){
				$count25+=8;	
			}else if($epilogh[4]==$canditate26){
				$count26+=8;
			}else if($epilogh[4]==$canditate27){
				$count27+=8;
			}else if($epilogh[4]==$canditate28){
				$count28+=8;
			}else if($epilogh[4]==$canditate29){
				$count29+=8;
			}else if($epilogh[4]==$canditate30){
				$count30+=8;
			}else if($epilogh[4]==$canditate31){
				$count31+=8;
			}else if($epilogh[4]==$canditate32){
				$count32+=8;
			}else if($epilogh[4]==$canditate33){
				$count33+=8;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=7;
			}else if($epilogh[5]==$canditate22){
				$count22+=7;
			}else if($epilogh[5]==$canditate23){
				$count23+=7;
			}else if($epilogh[5]==$canditate24){
				$count24+=7;
			}else if($epilogh[5]==$canditate25){
				$count25+=7;	
			}else if($epilogh[5]==$canditate26){
				$count26+=7;	
			}else if($epilogh[5]==$canditate27){
				$count27+=7;
			}else if($epilogh[5]==$canditate28){
				$count28+=7;
			}else if($epilogh[5]==$canditate29){
				$count29+=7;
			}else if($epilogh[5]==$canditate30){
				$count30+=7;
			}else if($epilogh[5]==$canditate31){
				$count31+=7;
			}else if($epilogh[5]==$canditate32){
				$count32+=7;
			}else if($epilogh[5]==$canditate33){
				$count33+=7;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=6;
			}else if($epilogh[6]==$canditate22){
				$count22+=6;
			}else if($epilogh[6]==$canditate23){
				$count23+=6;
			}else if($epilogh[6]==$canditate24){
				$count24+=6;
			}else if($epilogh[6]==$canditate25){
				$count25+=6;	
			}else if($epilogh[6]==$canditate26){
				$count26+=6;	
			}else if($epilogh[6]==$canditate27){
				$count27+=6;	
			}else if($epilogh[6]==$canditate28){
				$count28+=6;
			}else if($epilogh[6]==$canditate29){
				$count29+=6;
			}else if($epilogh[6]==$canditate30){
				$count30+=6;
			}else if($epilogh[6]==$canditate31){
				$count31+=6;
			}else if($epilogh[6]==$canditate32){
				$count32+=6;
			}else if($epilogh[6]==$canditate33){
				$count33+=6;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=5;
			}else if($epilogh[7]==$canditate22){
				$count22+=5;
			}else if($epilogh[7]==$canditate23){
				$count23+=5;
			}else if($epilogh[7]==$canditate24){
				$count24+=5;
			}else if($epilogh[7]==$canditate25){
				$count25+=5;	
			}else if($epilogh[7]==$canditate26){
				$count26+=5;	
			}else if($epilogh[7]==$canditate27){
				$count27+=5;	
			}else if($epilogh[7]==$canditate28){
				$count28+=5;	
			}else if($epilogh[7]==$canditate29){
				$count29+=5;
			}else if($epilogh[7]==$canditate30){
				$count30+=5;
			}else if($epilogh[7]==$canditate31){
				$count31+=5;
			}else if($epilogh[7]==$canditate32){
				$count32+=5;
			}else if($epilogh[7]==$canditate33){
				$count33+=5;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=4;
			}else if($epilogh[8]==$canditate22){
				$count22+=4;
			}else if($epilogh[8]==$canditate23){
				$count23+=4;
			}else if($epilogh[8]==$canditate24){
				$count24+=4;
			}else if($epilogh[8]==$canditate25){
				$count25+=4;	
			}else if($epilogh[8]==$canditate26){
				$count26+=4;	
			}else if($epilogh[8]==$canditate27){
				$count27+=4;	
			}else if($epilogh[8]==$canditate28){
				$count28+=4;	
			}else if($epilogh[8]==$canditate29){
				$count29+=4;	
			}else if($epilogh[8]==$canditate30){
				$count30+=4;
			}else if($epilogh[8]==$canditate31){
				$count31+=4;
			}else if($epilogh[8]==$canditate32){
				$count32+=4;
			}else if($epilogh[8]==$canditate33){
				$count33+=4;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=3;
			}else if($epilogh[9]==$canditate22){
				$count22+=3;
			}else if($epilogh[9]==$canditate23){
				$count23+=3;
			}else if($epilogh[9]==$canditate24){
				$count24+=3;
			}else if($epilogh[9]==$canditate25){
				$count25+=3;	
			}else if($epilogh[9]==$canditate26){
				$count26+=3;	
			}else if($epilogh[9]==$canditate27){
				$count27+=3;	
			}else if($epilogh[9]==$canditate28){
				$count28+=3;	
			}else if($epilogh[9]==$canditate29){
				$count29+=3;	
			}else if($epilogh[9]==$canditate30){
				$count30+=3;	
			}else if($epilogh[9]==$canditate31){
				$count31+=3;
			}else if($epilogh[9]==$canditate32){
				$count32+=3;
			}else if($epilogh[9]==$canditate33){
				$count33+=3;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=2;
			}else if($epilogh[10]==$canditate22){
				$count22+=2;
			}else if($epilogh[10]==$canditate23){
				$count23+=2;
			}else if($epilogh[10]==$canditate24){
				$count24+=2;
			}else if($epilogh[10]==$canditate25){
				$count25+=2;	
			}else if($epilogh[10]==$canditate26){
				$count26+=2;	
			}else if($epilogh[10]==$canditate27){
				$count27+=2;	
			}else if($epilogh[10]==$canditate28){
				$count28+=2;	
			}else if($epilogh[10]==$canditate29){
				$count29+=2;	
			}else if($epilogh[10]==$canditate30){
				$count30+=2;	
			}else if($epilogh[10]==$canditate31){
				$count31+=2;	
			}else if($epilogh[10]==$canditate32){
				$count32+=2;
			}else if($epilogh[10]==$canditate33){
				$count33+=2;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=1;
			}else if($epilogh[11]==$canditate22){
				$count22+=1;
			}else if($epilogh[11]==$canditate23){
				$count23+=1;
			}else if($epilogh[11]==$canditate24){
				$count24+=1;
			}else if($epilogh[11]==$canditate25){
				$count25+=1;	
			}else if($epilogh[11]==$canditate26){
				$count26+=1;	
			}else if($epilogh[11]==$canditate27){
				$count27+=1;	
			}else if($epilogh[11]==$canditate28){
				$count28+=1;	
			}else if($epilogh[11]==$canditate29){
				$count29+=1;	
			}else if($epilogh[11]==$canditate30){
				$count30+=1;	
			}else if($epilogh[11]==$canditate31){
				$count31+=1;	
			}else if($epilogh[11]==$canditate32){
				$count32+=1;	
			}else if($epilogh[11]==$canditate33){
				$count33+=1;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=0;
			}else if($epilogh[12]==$canditate22){
				$count22+=0;
			}else if($epilogh[12]==$canditate23){
				$count23+=0;
			}else if($epilogh[12]==$canditate24){
				$count24+=0;
			}else if($epilogh[12]==$canditate25){
				$count25+=0;	
			}else if($epilogh[12]==$canditate26){
				$count26+=0;	
			}else if($epilogh[12]==$canditate27){
				$count27+=0;	
			}else if($epilogh[12]==$canditate28){
				$count28+=0;	
			}else if($epilogh[12]==$canditate29){
				$count29+=0;	
			}else if($epilogh[12]==$canditate30){
				$count30+=0;	
			}else if($epilogh[12]==$canditate31){
				$count31+=0;	
			}else if($epilogh[12]==$canditate32){
				$count32+=0;	
			}else if($epilogh[12]==$canditate33){
				$count33+=0;	
			}
		}
	}
	if ($i2==14){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=13;
			}else if($epilogh[0]==$canditate22){
				$count22+=13;
			}else if($epilogh[0]==$canditate23){
				$count23+=13;
			}else if($epilogh[0]==$canditate24){
				$count24+=13;
			}else if($epilogh[0]==$canditate25){
				$count25+=13;
			}else if($epilogh[0]==$canditate26){
				$count26+=13;
			}else if($epilogh[0]==$canditate27){
				$count27+=13;
			}else if($epilogh[0]==$canditate28){
				$count28+=13;
			}else if($epilogh[0]==$canditate29){
				$count29+=13;
			}else if($epilogh[0]==$canditate30){
				$count30+=13;
			}else if($epilogh[0]==$canditate31){
				$count31+=13;
			}else if($epilogh[0]==$canditate32){
				$count32+=13;
			}else if($epilogh[0]==$canditate33){
				$count33+=13;
			}else if($epilogh[0]==$canditate34){
				$count34+=13;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=12;
			}else if($epilogh[1]==$canditate22){
				$count22+=12;
			}else if($epilogh[1]==$canditate23){
				$count23+=12;
			}else if($epilogh[1]==$canditate24){
				$count24+=12;
			}else if($epilogh[1]==$canditate25){
				$count25+=12;
			}else if($epilogh[1]==$canditate26){
				$count26+=12;
			}else if($epilogh[1]==$canditate27){
				$count27+=12;
			}else if($epilogh[1]==$canditate28){
				$count28+=12;
			}else if($epilogh[1]==$canditate29){
				$count29+=12;
			}else if($epilogh[1]==$canditate30){
				$count30+=12;
			}else if($epilogh[1]==$canditate31){
				$count31+=12;
			}else if($epilogh[1]==$canditate32){
				$count32+=12;
			}else if($epilogh[1]==$canditate33){
				$count33+=12;
			}else if($epilogh[1]==$canditate34){
				$count34+=12;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=11;
			}else if($epilogh[2]==$canditate22){
				$count22+=11;
			}else if($epilogh[2]==$canditate23){
				$count23+=11;
			}else if($epilogh[2]==$canditate24){
				$count24+=11;
			}else if($epilogh[2]==$canditate25){
				$count25+=11;
			}else if($epilogh[2]==$canditate26){
				$count26+=11;
			}else if($epilogh[2]==$canditate27){
				$count27+=11;
			}else if($epilogh[2]==$canditate28){
				$count28+=11;
			}else if($epilogh[2]==$canditate29){
				$count29+=11;
			}else if($epilogh[2]==$canditate30){
				$count30+=11;
			}else if($epilogh[2]==$canditate31){
				$count31+=11;
			}else if($epilogh[2]==$canditate32){
				$count32+=11;
			}else if($epilogh[2]==$canditate33){
				$count33+=11;
			}else if($epilogh[2]==$canditate34){
				$count34+=11;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=10;
			}else if($epilogh[3]==$canditate22){
				$count22+=10;
			}else if($epilogh[3]==$canditate23){
				$count23+=10;
			}else if($epilogh[3]==$canditate24){
				$count24+=10;
			}else if($epilogh[3]==$canditate25){
				$count25+=10;
			}else if($epilogh[3]==$canditate26){
				$count26+=10;
			}else if($epilogh[3]==$canditate27){
				$count27+=10;
			}else if($epilogh[3]==$canditate28){
				$count28+=10;
			}else if($epilogh[3]==$canditate29){
				$count29+=10;
			}else if($epilogh[3]==$canditate30){
				$count30+=10;
			}else if($epilogh[3]==$canditate31){
				$count31+=10;
			}else if($epilogh[3]==$canditate32){
				$count32+=10;
			}else if($epilogh[3]==$canditate33){
				$count33+=10;
			}else if($epilogh[3]==$canditate34){
				$count34+=10;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=9;
			}else if($epilogh[4]==$canditate22){
				$count22+=9;
			}else if($epilogh[4]==$canditate23){
				$count23+=9;
			}else if($epilogh[4]==$canditate24){
				$count24+=9;
			}else if($epilogh[4]==$canditate25){
				$count25+=9;	
			}else if($epilogh[4]==$canditate26){
				$count26+=9;
			}else if($epilogh[4]==$canditate27){
				$count27+=9;
			}else if($epilogh[4]==$canditate28){
				$count28+=9;
			}else if($epilogh[4]==$canditate29){
				$count29+=9;
			}else if($epilogh[4]==$canditate30){
				$count30+=9;
			}else if($epilogh[4]==$canditate31){
				$count31+=9;
			}else if($epilogh[4]==$canditate32){
				$count32+=9;
			}else if($epilogh[4]==$canditate33){
				$count33+=9;
			}else if($epilogh[4]==$canditate34){
				$count34+=9;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=8;
			}else if($epilogh[5]==$canditate22){
				$count22+=8;
			}else if($epilogh[5]==$canditate23){
				$count23+=8;
			}else if($epilogh[5]==$canditate24){
				$count24+=8;
			}else if($epilogh[5]==$canditate25){
				$count25+=8;	
			}else if($epilogh[5]==$canditate26){
				$count26+=8;	
			}else if($epilogh[5]==$canditate27){
				$count27+=8;
			}else if($epilogh[5]==$canditate28){
				$count28+=8;
			}else if($epilogh[5]==$canditate29){
				$count29+=8;
			}else if($epilogh[5]==$canditate30){
				$count30+=8;
			}else if($epilogh[5]==$canditate31){
				$count31+=8;
			}else if($epilogh[5]==$canditate32){
				$count32+=8;
			}else if($epilogh[5]==$canditate33){
				$count33+=8;
			}else if($epilogh[5]==$canditate34){
				$count34+=8;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=7;
			}else if($epilogh[6]==$canditate22){
				$count22+=7;
			}else if($epilogh[6]==$canditate23){
				$count23+=7;
			}else if($epilogh[6]==$canditate24){
				$count24+=7;
			}else if($epilogh[6]==$canditate25){
				$count25+=7;	
			}else if($epilogh[6]==$canditate26){
				$count26+=7;	
			}else if($epilogh[6]==$canditate27){
				$count27+=7;	
			}else if($epilogh[6]==$canditate28){
				$count28+=7;
			}else if($epilogh[6]==$canditate29){
				$count29+=7;
			}else if($epilogh[6]==$canditate30){
				$count30+=7;
			}else if($epilogh[6]==$canditate31){
				$count31+=7;
			}else if($epilogh[6]==$canditate32){
				$count32+=7;
			}else if($epilogh[6]==$canditate33){
				$count33+=7;
			}else if($epilogh[6]==$canditate34){
				$count34+=7;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=6;
			}else if($epilogh[7]==$canditate22){
				$count22+=6;
			}else if($epilogh[7]==$canditate23){
				$count23+=6;
			}else if($epilogh[7]==$canditate24){
				$count24+=6;
			}else if($epilogh[7]==$canditate25){
				$count25+=6;	
			}else if($epilogh[7]==$canditate26){
				$count26+=6;	
			}else if($epilogh[7]==$canditate27){
				$count27+=6;	
			}else if($epilogh[7]==$canditate28){
				$count28+=6;	
			}else if($epilogh[7]==$canditate29){
				$count29+=6;
			}else if($epilogh[7]==$canditate30){
				$count30+=6;
			}else if($epilogh[7]==$canditate31){
				$count31+=6;
			}else if($epilogh[7]==$canditate32){
				$count32+=6;
			}else if($epilogh[7]==$canditate33){
				$count33+=6;
			}else if($epilogh[7]==$canditate34){
				$count34+=6;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=5;
			}else if($epilogh[8]==$canditate22){
				$count22+=5;
			}else if($epilogh[8]==$canditate23){
				$count23+=5;
			}else if($epilogh[8]==$canditate24){
				$count24+=5;
			}else if($epilogh[8]==$canditate25){
				$count25+=5;	
			}else if($epilogh[8]==$canditate26){
				$count26+=5;	
			}else if($epilogh[8]==$canditate27){
				$count27+=5;	
			}else if($epilogh[8]==$canditate28){
				$count28+=5;	
			}else if($epilogh[8]==$canditate29){
				$count29+=5;	
			}else if($epilogh[8]==$canditate30){
				$count30+=5;
			}else if($epilogh[8]==$canditate31){
				$count31+=5;
			}else if($epilogh[8]==$canditate32){
				$count32+=5;
			}else if($epilogh[8]==$canditate33){
				$count33+=5;
			}else if($epilogh[8]==$canditate34){
				$count34+=5;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=4;
			}else if($epilogh[9]==$canditate22){
				$count22+=4;
			}else if($epilogh[9]==$canditate23){
				$count23+=4;
			}else if($epilogh[9]==$canditate24){
				$count24+=4;
			}else if($epilogh[9]==$canditate25){
				$count25+=4;	
			}else if($epilogh[9]==$canditate26){
				$count26+=4;	
			}else if($epilogh[9]==$canditate27){
				$count27+=4;	
			}else if($epilogh[9]==$canditate28){
				$count28+=4;	
			}else if($epilogh[9]==$canditate29){
				$count29+=4;	
			}else if($epilogh[9]==$canditate30){
				$count30+=4;	
			}else if($epilogh[9]==$canditate31){
				$count31+=4;
			}else if($epilogh[9]==$canditate32){
				$count32+=4;
			}else if($epilogh[9]==$canditate33){
				$count33+=4;
			}else if($epilogh[9]==$canditate34){
				$count34+=4;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=3;
			}else if($epilogh[10]==$canditate22){
				$count22+=3;
			}else if($epilogh[10]==$canditate23){
				$count23+=3;
			}else if($epilogh[10]==$canditate24){
				$count24+=3;
			}else if($epilogh[10]==$canditate25){
				$count25+=3;	
			}else if($epilogh[10]==$canditate26){
				$count26+=3;	
			}else if($epilogh[10]==$canditate27){
				$count27+=3;	
			}else if($epilogh[10]==$canditate28){
				$count28+=3;	
			}else if($epilogh[10]==$canditate29){
				$count29+=3;	
			}else if($epilogh[10]==$canditate30){
				$count30+=3;	
			}else if($epilogh[10]==$canditate31){
				$count31+=3;	
			}else if($epilogh[10]==$canditate32){
				$count32+=3;
			}else if($epilogh[10]==$canditate33){
				$count33+=3;
			}else if($epilogh[10]==$canditate34){
				$count34+=3;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=2;
			}else if($epilogh[11]==$canditate22){
				$count22+=2;
			}else if($epilogh[11]==$canditate23){
				$count23+=2;
			}else if($epilogh[11]==$canditate24){
				$count24+=2;
			}else if($epilogh[11]==$canditate25){
				$count25+=2;	
			}else if($epilogh[11]==$canditate26){
				$count26+=2;	
			}else if($epilogh[11]==$canditate27){
				$count27+=2;	
			}else if($epilogh[11]==$canditate28){
				$count28+=2;	
			}else if($epilogh[11]==$canditate29){
				$count29+=2;	
			}else if($epilogh[11]==$canditate30){
				$count30+=2;	
			}else if($epilogh[11]==$canditate31){
				$count31+=2;	
			}else if($epilogh[11]==$canditate32){
				$count32+=2;	
			}else if($epilogh[11]==$canditate33){
				$count33+=2;
			}else if($epilogh[11]==$canditate34){
				$count34+=2;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=1;
			}else if($epilogh[12]==$canditate22){
				$count22+=1;
			}else if($epilogh[12]==$canditate23){
				$count23+=1;
			}else if($epilogh[12]==$canditate24){
				$count24+=1;
			}else if($epilogh[12]==$canditate25){
				$count25+=1;	
			}else if($epilogh[12]==$canditate26){
				$count26+=1;	
			}else if($epilogh[12]==$canditate27){
				$count27+=1;	
			}else if($epilogh[12]==$canditate28){
				$count28+=1;	
			}else if($epilogh[12]==$canditate29){
				$count29+=1;	
			}else if($epilogh[12]==$canditate30){
				$count30+=1;	
			}else if($epilogh[12]==$canditate31){
				$count31+=1;	
			}else if($epilogh[12]==$canditate32){
				$count32+=1;	
			}else if($epilogh[12]==$canditate33){
				$count33+=1;	
			}else if($epilogh[12]==$canditate34){
				$count34+=1;
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate21){
				$count21+=0;
			}else if($epilogh[13]==$canditate22){
				$count22+=0;
			}else if($epilogh[13]==$canditate23){
				$count23+=0;
			}else if($epilogh[13]==$canditate24){
				$count24+=0;
			}else if($epilogh[13]==$canditate25){
				$count25+=0;	
			}else if($epilogh[13]==$canditate26){
				$count26+=0;	
			}else if($epilogh[13]==$canditate27){
				$count27+=0;	
			}else if($epilogh[13]==$canditate28){
				$count28+=0;	
			}else if($epilogh[13]==$canditate29){
				$count29+=0;	
			}else if($epilogh[13]==$canditate30){
				$count30+=0;	
			}else if($epilogh[13]==$canditate31){
				$count31+=0;	
			}else if($epilogh[13]==$canditate32){
				$count32+=0;	
			}else if($epilogh[13]==$canditate33){
				$count33+=0;	
			}else if($epilogh[13]==$canditate34){
				$count34+=0;	
			}
		}
	}
	if ($i2==15){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=14;
			}else if($epilogh[0]==$canditate22){
				$count22+=14;
			}else if($epilogh[0]==$canditate23){
				$count23+=14;
			}else if($epilogh[0]==$canditate24){
				$count24+=14;
			}else if($epilogh[0]==$canditate25){
				$count25+=14;
			}else if($epilogh[0]==$canditate26){
				$count26+=14;
			}else if($epilogh[0]==$canditate27){
				$count27+=14;
			}else if($epilogh[0]==$canditate28){
				$count28+=14;
			}else if($epilogh[0]==$canditate29){
				$count29+=14;
			}else if($epilogh[0]==$canditate30){
				$count30+=14;
			}else if($epilogh[0]==$canditate31){
				$count31+=14;
			}else if($epilogh[0]==$canditate32){
				$count32+=14;
			}else if($epilogh[0]==$canditate33){
				$count33+=14;
			}else if($epilogh[0]==$canditate34){
				$count34+=14;
			}else if($epilogh[0]==$canditate35){
				$count35+=14;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=13;
			}else if($epilogh[1]==$canditate22){
				$count22+=13;
			}else if($epilogh[1]==$canditate23){
				$count23+=13;
			}else if($epilogh[1]==$canditate24){
				$count24+=13;
			}else if($epilogh[1]==$canditate25){
				$count25+=13;
			}else if($epilogh[1]==$canditate26){
				$count26+=13;
			}else if($epilogh[1]==$canditate27){
				$count27+=13;
			}else if($epilogh[1]==$canditate28){
				$count28+=13;
			}else if($epilogh[1]==$canditate29){
				$count29+=13;
			}else if($epilogh[1]==$canditate30){
				$count30+=13;
			}else if($epilogh[1]==$canditate31){
				$count31+=13;
			}else if($epilogh[1]==$canditate32){
				$count32+=13;
			}else if($epilogh[1]==$canditate33){
				$count33+=13;
			}else if($epilogh[1]==$canditate34){
				$count34+=13;
			}else if($epilogh[1]==$canditate35){
				$count35+=13;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=12;
			}else if($epilogh[2]==$canditate22){
				$count22+=12;
			}else if($epilogh[2]==$canditate23){
				$count23+=12;
			}else if($epilogh[2]==$canditate24){
				$count24+=12;
			}else if($epilogh[2]==$canditate25){
				$count25+=12;
			}else if($epilogh[2]==$canditate26){
				$count26+=12;
			}else if($epilogh[2]==$canditate27){
				$count27+=12;
			}else if($epilogh[2]==$canditate28){
				$count28+=12;
			}else if($epilogh[2]==$canditate29){
				$count29+=12;
			}else if($epilogh[2]==$canditate30){
				$count30+=12;
			}else if($epilogh[2]==$canditate31){
				$count31+=12;
			}else if($epilogh[2]==$canditate32){
				$count32+=12;
			}else if($epilogh[2]==$canditate33){
				$count33+=12;
			}else if($epilogh[2]==$canditate34){
				$count34+=12;
			}else if($epilogh[2]==$canditate35){
				$count35+=12;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=11;
			}else if($epilogh[3]==$canditate22){
				$count22+=11;
			}else if($epilogh[3]==$canditate23){
				$count23+=11;
			}else if($epilogh[3]==$canditate24){
				$count24+=11;
			}else if($epilogh[3]==$canditate25){
				$count25+=11;
			}else if($epilogh[3]==$canditate26){
				$count26+=11;
			}else if($epilogh[3]==$canditate27){
				$count27+=11;
			}else if($epilogh[3]==$canditate28){
				$count28+=11;
			}else if($epilogh[3]==$canditate29){
				$count29+=11;
			}else if($epilogh[3]==$canditate30){
				$count30+=11;
			}else if($epilogh[3]==$canditate31){
				$count31+=11;
			}else if($epilogh[3]==$canditate32){
				$count32+=11;
			}else if($epilogh[3]==$canditate33){
				$count33+=11;
			}else if($epilogh[3]==$canditate34){
				$count34+=11;
			}else if($epilogh[3]==$canditate35){
				$count35+=11;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=10;
			}else if($epilogh[4]==$canditate22){
				$count22+=10;
			}else if($epilogh[4]==$canditate23){
				$count23+=10;
			}else if($epilogh[4]==$canditate24){
				$count24+=10;
			}else if($epilogh[4]==$canditate25){
				$count25+=10;	
			}else if($epilogh[4]==$canditate26){
				$count26+=10;
			}else if($epilogh[4]==$canditate27){
				$count27+=10;
			}else if($epilogh[4]==$canditate28){
				$count28+=10;
			}else if($epilogh[4]==$canditate29){
				$count29+=10;
			}else if($epilogh[4]==$canditate30){
				$count30+=10;
			}else if($epilogh[4]==$canditate31){
				$count31+=10;
			}else if($epilogh[4]==$canditate32){
				$count32+=10;
			}else if($epilogh[4]==$canditate33){
				$count33+=10;
			}else if($epilogh[4]==$canditate34){
				$count34+=10;
			}else if($epilogh[4]==$canditate35){
				$count35+=10;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=9;
			}else if($epilogh[5]==$canditate22){
				$count22+=9;
			}else if($epilogh[5]==$canditate23){
				$count23+=9;
			}else if($epilogh[5]==$canditate24){
				$count24+=9;
			}else if($epilogh[5]==$canditate25){
				$count25+=9;	
			}else if($epilogh[5]==$canditate26){
				$count26+=9;	
			}else if($epilogh[5]==$canditate27){
				$count27+=9;
			}else if($epilogh[5]==$canditate28){
				$count28+=9;
			}else if($epilogh[5]==$canditate29){
				$count29+=9;
			}else if($epilogh[5]==$canditate30){
				$count30+=9;
			}else if($epilogh[5]==$canditate31){
				$count31+=9;
			}else if($epilogh[5]==$canditate32){
				$count32+=9;
			}else if($epilogh[5]==$canditate33){
				$count33+=9;
			}else if($epilogh[5]==$canditate34){
				$count34+=9;
			}else if($epilogh[5]==$canditate35){
				$count35+=9;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=8;
			}else if($epilogh[6]==$canditate22){
				$count22+=8;
			}else if($epilogh[6]==$canditate23){
				$count23+=8;
			}else if($epilogh[6]==$canditate24){
				$count24+=8;
			}else if($epilogh[6]==$canditate25){
				$count25+=8;	
			}else if($epilogh[6]==$canditate26){
				$count26+=8;	
			}else if($epilogh[6]==$canditate27){
				$count27+=8;	
			}else if($epilogh[6]==$canditate28){
				$count28+=8;
			}else if($epilogh[6]==$canditate29){
				$count29+=8;
			}else if($epilogh[6]==$canditate30){
				$count30+=8;
			}else if($epilogh[6]==$canditate31){
				$count31+=8;
			}else if($epilogh[6]==$canditate32){
				$count32+=8;
			}else if($epilogh[6]==$canditate33){
				$count33+=8;
			}else if($epilogh[6]==$canditate34){
				$count34+=8;
			}else if($epilogh[6]==$canditate35){
				$count35+=8;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=7;
			}else if($epilogh[7]==$canditate22){
				$count22+=7;
			}else if($epilogh[7]==$canditate23){
				$count23+=7;
			}else if($epilogh[7]==$canditate24){
				$count24+=7;
			}else if($epilogh[7]==$canditate25){
				$count25+=7;	
			}else if($epilogh[7]==$canditate26){
				$count26+=7;	
			}else if($epilogh[7]==$canditate27){
				$count27+=7;	
			}else if($epilogh[7]==$canditate28){
				$count28+=7;	
			}else if($epilogh[7]==$canditate29){
				$count29+=7;
			}else if($epilogh[7]==$canditate30){
				$count30+=7;
			}else if($epilogh[7]==$canditate31){
				$count31+=7;
			}else if($epilogh[7]==$canditate32){
				$count32+=7;
			}else if($epilogh[7]==$canditate33){
				$count33+=7;
			}else if($epilogh[7]==$canditate34){
				$count34+=7;
			}else if($epilogh[7]==$canditate35){
				$count35+=7;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=6;
			}else if($epilogh[8]==$canditate22){
				$count22+=6;
			}else if($epilogh[8]==$canditate23){
				$count23+=6;
			}else if($epilogh[8]==$canditate24){
				$count24+=6;
			}else if($epilogh[8]==$canditate25){
				$count25+=6;	
			}else if($epilogh[8]==$canditate26){
				$count26+=6;	
			}else if($epilogh[8]==$canditate27){
				$count27+=6;	
			}else if($epilogh[8]==$canditate28){
				$count28+=6;	
			}else if($epilogh[8]==$canditate29){
				$count29+=6;	
			}else if($epilogh[8]==$canditate30){
				$count30+=6;
			}else if($epilogh[8]==$canditate31){
				$count31+=6;
			}else if($epilogh[8]==$canditate32){
				$count32+=6;
			}else if($epilogh[8]==$canditate33){
				$count33+=6;
			}else if($epilogh[8]==$canditate34){
				$count34+=6;
			}else if($epilogh[8]==$canditate35){
				$count35+=6;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate1){
				$count21+=5;
			}else if($epilogh[9]==$canditate22){
				$count22+=5;
			}else if($epilogh[9]==$canditate23){
				$count23+=5;
			}else if($epilogh[9]==$canditate24){
				$count24+=5;
			}else if($epilogh[9]==$canditate25){
				$count25+=5;	
			}else if($epilogh[9]==$canditate26){
				$count26+=5;	
			}else if($epilogh[9]==$canditate27){
				$count27+=5;	
			}else if($epilogh[9]==$canditate28){
				$count28+=5;	
			}else if($epilogh[9]==$canditate29){
				$count29+=5;	
			}else if($epilogh[9]==$canditate30){
				$count30+=5;	
			}else if($epilogh[9]==$canditate31){
				$count31+=5;
			}else if($epilogh[9]==$canditate32){
				$count32+=5;
			}else if($epilogh[9]==$canditate33){
				$count33+=5;
			}else if($epilogh[9]==$canditate34){
				$count34+=5;
			}else if($epilogh[9]==$canditate35){
				$count35+=5;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=4;
			}else if($epilogh[10]==$canditate22){
				$count22+=4;
			}else if($epilogh[10]==$canditate23){
				$count23+=4;
			}else if($epilogh[10]==$canditate24){
				$count24+=4;
			}else if($epilogh[10]==$canditate25){
				$count25+=4;	
			}else if($epilogh[10]==$canditate26){
				$count26+=4;	
			}else if($epilogh[10]==$canditate27){
				$count27+=4;	
			}else if($epilogh[10]==$canditate28){
				$count28+=4;	
			}else if($epilogh[10]==$canditate29){
				$count29+=4;	
			}else if($epilogh[10]==$canditate30){
				$count30+=4;	
			}else if($epilogh[10]==$canditate31){
				$count31+=4;	
			}else if($epilogh[10]==$canditate32){
				$count32+=4;
			}else if($epilogh[10]==$canditate33){
				$count33+=4;
			}else if($epilogh[10]==$canditate34){
				$count34+=4;
			}else if($epilogh[10]==$canditate35){
				$count35+=4;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=3;
			}else if($epilogh[11]==$canditate22){
				$count22+=3;
			}else if($epilogh[11]==$canditate23){
				$count23+=3;
			}else if($epilogh[11]==$canditate24){
				$count24+=3;
			}else if($epilogh[11]==$canditate25){
				$count25+=3;	
			}else if($epilogh[11]==$canditate26){
				$count26+=3;	
			}else if($epilogh[11]==$canditate27){
				$count27+=3;	
			}else if($epilogh[11]==$canditate28){
				$count28+=3;	
			}else if($epilogh[11]==$canditate29){
				$count29+=3;	
			}else if($epilogh[11]==$canditate30){
				$count30+=3;	
			}else if($epilogh[11]==$canditate31){
				$count31+=3;	
			}else if($epilogh[11]==$canditate32){
				$count32+=3;	
			}else if($epilogh[11]==$canditate33){
				$count33+=3;
			}else if($epilogh[11]==$canditate34){
				$count34+=3;
			}else if($epilogh[11]==$canditate35){
				$count35+=3;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=2;
			}else if($epilogh[12]==$canditate22){
				$count22+=2;
			}else if($epilogh[12]==$canditate23){
				$count23+=2;
			}else if($epilogh[12]==$canditate24){
				$count24+=2;
			}else if($epilogh[12]==$canditate25){
				$count25+=2;	
			}else if($epilogh[12]==$canditate26){
				$count26+=2;	
			}else if($epilogh[12]==$canditate27){
				$count27+=2;	
			}else if($epilogh[12]==$canditate28){
				$count28+=2;	
			}else if($epilogh[12]==$canditate29){
				$count29+=2;	
			}else if($epilogh[12]==$canditate30){
				$count30+=2;	
			}else if($epilogh[12]==$canditate31){
				$count31+=2;	
			}else if($epilogh[12]==$canditate32){
				$count32+=2;	
			}else if($epilogh[12]==$canditate33){
				$count33+=2;	
			}else if($epilogh[12]==$canditate34){
				$count34+=2;
			}else if($epilogh[12]==$canditate35){
				$count35+=2;
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate21){
				$count21+=1;
			}else if($epilogh[13]==$canditate22){
				$count22+=1;
			}else if($epilogh[13]==$canditate23){
				$count23+=1;
			}else if($epilogh[13]==$canditate24){
				$count24+=1;
			}else if($epilogh[13]==$canditate25){
				$count25+=1;	
			}else if($epilogh[13]==$canditate26){
				$count26+=1;	
			}else if($epilogh[13]==$canditate27){
				$count27+=1;	
			}else if($epilogh[13]==$canditate28){
				$count28+=1;	
			}else if($epilogh[13]==$canditate29){
				$count29+=1;	
			}else if($epilogh[13]==$canditate30){
				$count30+=1;	
			}else if($epilogh[13]==$canditate31){
				$count31+=1;	
			}else if($epilogh[13]==$canditate32){
				$count32+=1;	
			}else if($epilogh[13]==$canditate33){
				$count33+=1;	
			}else if($epilogh[13]==$canditate34){
				$count34+=1;	
			}else if($epilogh[13]==$canditate35){
				$count35+=1;
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate21){
				$count21+=0;
			}else if($epilogh[14]==$canditate22){
				$count22+=0;
			}else if($epilogh[14]==$canditate23){
				$count23+=0;
			}else if($epilogh[14]==$canditate24){
				$count24+=0;
			}else if($epilogh[14]==$canditate25){
				$count25+=0;	
			}else if($epilogh[14]==$canditate26){
				$count26+=0;	
			}else if($epilogh[14]==$canditate27){
				$count27+=0;	
			}else if($epilogh[14]==$canditate28){
				$count28+=0;	
			}else if($epilogh[14]==$canditate29){
				$count29+=0;	
			}else if($epilogh[14]==$canditate30){
				$count30+=0;	
			}else if($epilogh[14]==$canditate31){
				$count31+=0;	
			}else if($epilogh[14]==$canditate32){
				$count32+=0;	
			}else if($epilogh[14]==$canditate33){
				$count33+=0;	
			}else if($epilogh[14]==$canditate34){
				$count34+=0;	
			}else if($epilogh[14]==$canditate35){
				$count35+=0;	
			}
		}
	}
	if ($i2==16){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=15;
			}else if($epilogh[0]==$canditate22){
				$count22+=15;
			}else if($epilogh[0]==$canditate23){
				$count23+=15;
			}else if($epilogh[0]==$canditate24){
				$count24+=15;
			}else if($epilogh[0]==$canditate25){
				$count25+=15;
			}else if($epilogh[0]==$canditate26){
				$count26+=15;
			}else if($epilogh[0]==$canditate27){
				$count27+=15;
			}else if($epilogh[0]==$canditate28){
				$count28+=15;
			}else if($epilogh[0]==$canditate29){
				$count29+=15;
			}else if($epilogh[0]==$canditate30){
				$count30+=15;
			}else if($epilogh[0]==$canditate31){
				$count31+=15;
			}else if($epilogh[0]==$canditate32){
				$count32+=15;
			}else if($epilogh[0]==$canditate33){
				$count33+=15;
			}else if($epilogh[0]==$canditate34){
				$count34+=15;
			}else if($epilogh[0]==$canditate35){
				$count35+=15;
			}else if($epilogh[0]==$canditate36){
				$count36+=15;
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=14;
			}else if($epilogh[1]==$canditate22){
				$count22+=14;
			}else if($epilogh[1]==$canditate23){
				$count23+=14;
			}else if($epilogh[1]==$canditate24){
				$count24+=14;
			}else if($epilogh[1]==$canditate25){
				$count25+=14;
			}else if($epilogh[1]==$canditate26){
				$count26+=14;
			}else if($epilogh[1]==$canditate27){
				$count27+=14;
			}else if($epilogh[1]==$canditate28){
				$count28+=14;
			}else if($epilogh[1]==$canditate29){
				$count29+=14;
			}else if($epilogh[1]==$canditate30){
				$count30+=14;
			}else if($epilogh[1]==$canditate31){
				$count31+=14;
			}else if($epilogh[1]==$canditate32){
				$count32+=14;
			}else if($epilogh[1]==$canditate33){
				$count33+=14;
			}else if($epilogh[1]==$canditate34){
				$count34+=14;
			}else if($epilogh[1]==$canditate35){
				$count35+=14;
			}else if($epilogh[1]==$canditate36){
				$count36+=14;
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=13;
			}else if($epilogh[2]==$canditate22){
				$count22+=13;
			}else if($epilogh[2]==$canditate23){
				$count23+=13;
			}else if($epilogh[2]==$canditate24){
				$count24+=13;
			}else if($epilogh[2]==$canditate25){
				$count25+=13;
			}else if($epilogh[2]==$canditate26){
				$count26+=13;
			}else if($epilogh[2]==$canditate27){
				$count27+=13;
			}else if($epilogh[2]==$canditate28){
				$count28+=13;
			}else if($epilogh[2]==$canditate29){
				$count29+=13;
			}else if($epilogh[2]==$canditate30){
				$count30+=13;
			}else if($epilogh[2]==$canditate31){
				$count31+=13;
			}else if($epilogh[2]==$canditate32){
				$count32+=13;
			}else if($epilogh[2]==$canditate33){
				$count33+=13;
			}else if($epilogh[2]==$canditate34){
				$count34+=13;
			}else if($epilogh[2]==$canditate35){
				$count35+=13;
			}else if($epilogh[2]==$canditate36){
				$count36+=13;
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=12;
			}else if($epilogh[3]==$canditate22){
				$count22+=12;
			}else if($epilogh[3]==$canditate23){
				$count23+=12;
			}else if($epilogh[3]==$canditate24){
				$count24+=12;
			}else if($epilogh[3]==$canditate25){
				$count25+=12;
			}else if($epilogh[3]==$canditate26){
				$count26+=12;
			}else if($epilogh[3]==$canditate27){
				$count27+=12;
			}else if($epilogh[3]==$canditate28){
				$count28+=12;
			}else if($epilogh[3]==$canditate29){
				$count29+=12;
			}else if($epilogh[3]==$canditate30){
				$count30+=12;
			}else if($epilogh[3]==$canditate31){
				$count31+=12;
			}else if($epilogh[3]==$canditate32){
				$count32+=12;
			}else if($epilogh[3]==$canditate33){
				$count33+=12;
			}else if($epilogh[3]==$canditate34){
				$count34+=12;
			}else if($epilogh[3]==$canditate35){
				$count35+=12;
			}else if($epilogh[3]==$canditate36){
				$count36+=12;
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=11;
			}else if($epilogh[4]==$canditate22){
				$count22+=11;
			}else if($epilogh[4]==$canditate23){
				$count23+=11;
			}else if($epilogh[4]==$canditate24){
				$count24+=11;
			}else if($epilogh[4]==$canditate25){
				$count25+=11;	
			}else if($epilogh[4]==$canditate26){
				$count26+=11;
			}else if($epilogh[4]==$canditate27){
				$count27+=11;
			}else if($epilogh[4]==$canditate28){
				$count28+=11;
			}else if($epilogh[4]==$canditate29){
				$count29+=11;
			}else if($epilogh[4]==$canditate30){
				$count30+=11;
			}else if($epilogh[4]==$canditate31){
				$count31+=11;
			}else if($epilogh[4]==$canditate32){
				$count32+=11;
			}else if($epilogh[4]==$canditate33){
				$count33+=11;
			}else if($epilogh[4]==$canditate34){
				$count34+=11;
			}else if($epilogh[4]==$canditate35){
				$count35+=11;
			}else if($epilogh[4]==$canditate36){
				$count36+=11;
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=10;
			}else if($epilogh[5]==$canditate22){
				$count22+=10;
			}else if($epilogh[5]==$canditate23){
				$count23+=10;
			}else if($epilogh[5]==$canditate24){
				$count24+=10;
			}else if($epilogh[5]==$canditate25){
				$count25+=10;	
			}else if($epilogh[5]==$canditate26){
				$count26+=10;	
			}else if($epilogh[5]==$canditate27){
				$count27+=10;
			}else if($epilogh[5]==$canditate28){
				$count28+=10;
			}else if($epilogh[5]==$canditate29){
				$count29+=10;
			}else if($epilogh[5]==$canditate30){
				$count30+=10;
			}else if($epilogh[5]==$canditate31){
				$count31+=10;
			}else if($epilogh[5]==$canditate32){
				$count32+=10;
			}else if($epilogh[5]==$canditate33){
				$count33+=10;
			}else if($epilogh[5]==$canditate34){
				$count34+=10;
			}else if($epilogh[5]==$canditate35){
				$count35+=10;
			}else if($epilogh[5]==$canditate36){
				$count36+=10;
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=9;
			}else if($epilogh[6]==$canditate22){
				$count22+=9;
			}else if($epilogh[6]==$canditate23){
				$count23+=9;
			}else if($epilogh[6]==$canditate24){
				$count24+=9;
			}else if($epilogh[6]==$canditate25){
				$count25+=9;	
			}else if($epilogh[6]==$canditate26){
				$count26+=9;	
			}else if($epilogh[6]==$canditate27){
				$count27+=9;	
			}else if($epilogh[6]==$canditate28){
				$count28+=9;
			}else if($epilogh[6]==$canditate29){
				$count29+=9;
			}else if($epilogh[6]==$canditate30){
				$count30+=9;
			}else if($epilogh[6]==$canditate31){
				$count31+=9;
			}else if($epilogh[6]==$canditate32){
				$count32+=9;
			}else if($epilogh[6]==$canditate33){
				$count33+=9;
			}else if($epilogh[6]==$canditate34){
				$count34+=9;
			}else if($epilogh[6]==$canditate35){
				$count35+=9;
			}else if($epilogh[6]==$canditate36){
				$count36+=9;
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=8;
			}else if($epilogh[7]==$canditate22){
				$count22+=8;
			}else if($epilogh[7]==$canditate23){
				$count23+=8;
			}else if($epilogh[7]==$canditate24){
				$count24+=8;
			}else if($epilogh[7]==$canditate25){
				$count25+=8;	
			}else if($epilogh[7]==$canditate26){
				$count26+=8;	
			}else if($epilogh[7]==$canditate27){
				$count27+=8;	
			}else if($epilogh[7]==$canditate28){
				$count28+=8;	
			}else if($epilogh[7]==$canditate29){
				$count29+=8;
			}else if($epilogh[7]==$canditate30){
				$count30+=8;
			}else if($epilogh[7]==$canditate31){
				$count31+=8;
			}else if($epilogh[7]==$canditate32){
				$count32+=8;
			}else if($epilogh[7]==$canditate33){
				$count33+=8;
			}else if($epilogh[7]==$canditate34){
				$count34+=8;
			}else if($epilogh[7]==$canditate35){
				$count35+=8;
			}else if($epilogh[7]==$canditate36){
				$count36+=8;
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=7;
			}else if($epilogh[8]==$canditate22){
				$count22+=7;
			}else if($epilogh[8]==$canditate23){
				$count23+=7;
			}else if($epilogh[8]==$canditate24){
				$count24+=7;
			}else if($epilogh[8]==$canditate25){
				$count25+=7;	
			}else if($epilogh[8]==$canditate26){
				$count26+=7;	
			}else if($epilogh[8]==$canditate27){
				$count27+=7;	
			}else if($epilogh[8]==$canditate28){
				$count28+=7;	
			}else if($epilogh[8]==$canditate29){
				$count29+=7;	
			}else if($epilogh[8]==$canditate30){
				$count30+=7;
			}else if($epilogh[8]==$canditate31){
				$count31+=7;
			}else if($epilogh[8]==$canditate32){
				$count32+=7;
			}else if($epilogh[8]==$canditate33){
				$count33+=7;
			}else if($epilogh[8]==$canditate34){
				$count34+=7;
			}else if($epilogh[8]==$canditate35){
				$count35+=7;
			}else if($epilogh[8]==$canditate36){
				$count36+=7;
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=6;
			}else if($epilogh[9]==$canditate22){
				$count22+=6;
			}else if($epilogh[9]==$canditate23){
				$count23+=6;
			}else if($epilogh[9]==$canditate24){
				$count24+=6;
			}else if($epilogh[9]==$canditate25){
				$count25+=6;	
			}else if($epilogh[9]==$canditate26){
				$count26+=6;	
			}else if($epilogh[9]==$canditate27){
				$count27+=6;	
			}else if($epilogh[9]==$canditate28){
				$count28+=6;	
			}else if($epilogh[9]==$canditate29){
				$count29+=6;	
			}else if($epilogh[9]==$canditate30){
				$count30+=6;	
			}else if($epilogh[9]==$canditate31){
				$count31+=6;
			}else if($epilogh[9]==$canditate32){
				$count32+=6;
			}else if($epilogh[9]==$canditate33){
				$count33+=6;
			}else if($epilogh[9]==$canditate34){
				$count34+=6;
			}else if($epilogh[9]==$canditate35){
				$count35+=6;
			}else if($epilogh[9]==$canditate36){
				$count36+=6;
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=5;
			}else if($epilogh[10]==$canditate22){
				$count22+=5;
			}else if($epilogh[10]==$canditate23){
				$count23+=5;
			}else if($epilogh[10]==$canditate24){
				$count24+=5;
			}else if($epilogh[10]==$canditate25){
				$count25+=5;	
			}else if($epilogh[10]==$canditate26){
				$count26+=5;	
			}else if($epilogh[10]==$canditate27){
				$count27+=5;	
			}else if($epilogh[10]==$canditate28){
				$count28+=5;	
			}else if($epilogh[10]==$canditate29){
				$count29+=5;	
			}else if($epilogh[10]==$canditate30){
				$count30+=5;	
			}else if($epilogh[10]==$canditate31){
				$count31+=5;	
			}else if($epilogh[10]==$canditate32){
				$count32+=5;
			}else if($epilogh[10]==$canditate33){
				$count33+=5;
			}else if($epilogh[10]==$canditate34){
				$count34+=5;
			}else if($epilogh[10]==$canditate35){
				$count35+=5;
			}else if($epilogh[10]==$canditate36){
				$count36+=5;
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=4;
			}else if($epilogh[11]==$canditate22){
				$count22+=4;
			}else if($epilogh[11]==$canditate23){
				$count23+=4;
			}else if($epilogh[11]==$canditate24){
				$count24+=4;
			}else if($epilogh[11]==$canditate25){
				$count25+=4;	
			}else if($epilogh[11]==$canditate26){
				$count26+=4;	
			}else if($epilogh[11]==$canditate27){
				$count27+=4;	
			}else if($epilogh[11]==$canditate28){
				$count28+=4;	
			}else if($epilogh[11]==$canditate29){
				$count29+=4;	
			}else if($epilogh[11]==$canditate30){
				$count30+=4;	
			}else if($epilogh[11]==$canditate31){
				$count31+=4;	
			}else if($epilogh[11]==$canditate32){
				$count32+=4;	
			}else if($epilogh[11]==$canditate33){
				$count33+=4;
			}else if($epilogh[11]==$canditate34){
				$count34+=4;
			}else if($epilogh[11]==$canditate35){
				$count35+=4;
			}else if($epilogh[11]==$canditate36){
				$count36+=4;
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=3;
			}else if($epilogh[12]==$canditate22){
				$count22+=3;
			}else if($epilogh[12]==$canditate23){
				$count23+=3;
			}else if($epilogh[12]==$canditate24){
				$count24+=3;
			}else if($epilogh[12]==$canditate25){
				$count25+=3;	
			}else if($epilogh[12]==$canditate26){
				$count26+=3;	
			}else if($epilogh[12]==$canditate27){
				$count27+=3;	
			}else if($epilogh[12]==$canditate28){
				$count28+=3;	
			}else if($epilogh[12]==$canditate29){
				$count29+=3;	
			}else if($epilogh[12]==$canditate30){
				$count30+=3;	
			}else if($epilogh[12]==$canditate31){
				$count31+=3;	
			}else if($epilogh[12]==$canditate32){
				$count32+=3;	
			}else if($epilogh[12]==$canditate33){
				$count33+=3;	
			}else if($epilogh[12]==$canditate34){
				$count34+=3;
			}else if($epilogh[12]==$canditate35){
				$count35+=3;
			}else if($epilogh[12]==$canditate36){
				$count36+=3;
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate21){
				$count21+=2;
			}else if($epilogh[13]==$canditate22){
				$count22+=2;
			}else if($epilogh[13]==$canditate23){
				$count23+=2;
			}else if($epilogh[13]==$canditate24){
				$count24+=2;
			}else if($epilogh[13]==$canditate25){
				$count25+=2;	
			}else if($epilogh[13]==$canditate26){
				$count26+=2;	
			}else if($epilogh[13]==$canditate27){
				$count27+=2;	
			}else if($epilogh[13]==$canditate28){
				$count28+=2;	
			}else if($epilogh[13]==$canditate29){
				$count29+=2;	
			}else if($epilogh[13]==$canditate30){
				$count30+=2;	
			}else if($epilogh[13]==$canditate31){
				$count31+=2;	
			}else if($epilogh[13]==$canditate32){
				$count32+=2;	
			}else if($epilogh[13]==$canditate33){
				$count33+=2;	
			}else if($epilogh[13]==$canditate34){
				$count34+=2;	
			}else if($epilogh[13]==$canditate35){
				$count35+=2;
			}else if($epilogh[13]==$canditate36){
				$count36+=2;
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate21){
				$count21+=1;
			}else if($epilogh[14]==$canditate22){
				$count22+=1;
			}else if($epilogh[14]==$canditate23){
				$count23+=1;
			}else if($epilogh[14]==$canditate24){
				$count24+=1;
			}else if($epilogh[14]==$canditate25){
				$count25+=1;	
			}else if($epilogh[14]==$canditate26){
				$count26+=1;	
			}else if($epilogh[14]==$canditate27){
				$count27+=1;	
			}else if($epilogh[14]==$canditate28){
				$count28+=1;	
			}else if($epilogh[14]==$canditate29){
				$count29+=1;	
			}else if($epilogh[14]==$canditate30){
				$count30+=1;	
			}else if($epilogh[14]==$canditate31){
				$count31+=1;	
			}else if($epilogh[14]==$canditate32){
				$count32+=1;	
			}else if($epilogh[14]==$canditate33){
				$count33+=1;	
			}else if($epilogh[14]==$canditate34){
				$count34+=1;	
			}else if($epilogh[14]==$canditate35){
				$count35+=1;	
			}else if($epilogh[14]==$canditate36){
				$count36+=1;
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate21){
				$count21+=0;
			}else if($epilogh[15]==$canditate22){
				$count22+=0;
			}else if($epilogh[15]==$canditate23){
				$count23+=0;
			}else if($epilogh[15]==$canditate24){
				$count24+=0;
			}else if($epilogh[15]==$canditate25){
				$count25+=0;	
			}else if($epilogh[15]==$canditate26){
				$count26+=0;	
			}else if($epilogh[15]==$canditate27){
				$count27+=0;	
			}else if($epilogh[15]==$canditate28){
				$count28+=0;	
			}else if($epilogh[15]==$canditate29){
				$count29+=0;	
			}else if($epilogh[15]==$canditate30){
				$count30+=0;	
			}else if($epilogh[15]==$canditate31){
				$count31+=0;	
			}else if($epilogh[15]==$canditate32){
				$count32+=0;	
			}else if($epilogh[15]==$canditate33){
				$count33+=0;	
			}else if($epilogh[15]==$canditate34){
				$count34+=0;	
			}else if($epilogh[15]==$canditate35){
				$count35+=0;	
			}else if($epilogh[15]==$canditate36){
				$count36+=0;	
			}
		}
	}
	if ($i2==17{
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=16;
			}else if($epilogh[0]==$canditate22){
				$count22+=16;
			}else if($epilogh[0]==$canditate23){
				$count23+=16;
			}else if($epilogh[0]==$canditate24){
				$count24+=16;
			}else if($epilogh[0]==$canditate25){
				$count25+=16;
			}else if($epilogh[0]==$canditate26){
				$count26+=16;
			}else if($epilogh[0]==$canditate27){
				$count27+=16;
			}else if($epilogh[0]==$canditate28){
				$count28+=16;
			}else if($epilogh[0]==$canditate29){
				$count29+=16;
			}else if($epilogh[0]==$canditate30){
				$count30+=16;
			}else if($epilogh[0]==$canditate31){
				$count31+=16;
			}else if($epilogh[0]==$canditate32){
				$count32+=16;
			}else if($epilogh[0]==$canditate33){
				$count33+=16;
			}else if($epilogh[0]==$canditate34){
				$count34+=16;
			}else if($epilogh[0]==$canditate35){
				$count35+=16;
			}else if($epilogh[0]==$canditate36){
				$count36+=16;
			}else if($epilogh[0]==$canditate37){
				$count37+=16;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=15;
			}else if($epilogh[1]==$canditate22){
				$count22+=15;
			}else if($epilogh[1]==$canditate23){
				$count23+=15;
			}else if($epilogh[1]==$canditate24){
				$count24+=15;
			}else if($epilogh[1]==$canditate25){
				$count25+=15;
			}else if($epilogh[1]==$canditate26){
				$count26+=15;
			}else if($epilogh[1]==$canditate27){
				$count27+=15;
			}else if($epilogh[1]==$canditate28){
				$count28+=15;
			}else if($epilogh[1]==$canditate29){
				$count29+=15;
			}else if($epilogh[1]==$canditate30){
				$count30+=15;
			}else if($epilogh[1]==$canditate31){
				$count31+=15;
			}else if($epilogh[1]==$canditate32){
				$count32+=15;
			}else if($epilogh[1]==$canditate33){
				$count33+=15;
			}else if($epilogh[1]==$canditate34){
				$count34+=15;
			}else if($epilogh[1]==$canditate35){
				$count35+=15;
			}else if($epilogh[1]==$canditate36){
				$count36+=15;
			}else if($epilogh[1]==$canditate37){
				$count37+=15;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=14;
			}else if($epilogh[2]==$canditate22){
				$count22+=14;
			}else if($epilogh[2]==$canditate23){
				$count23+=14;
			}else if($epilogh[2]==$canditate24){
				$count24+=14;
			}else if($epilogh[2]==$canditate25){
				$count25+=14;
			}else if($epilogh[2]==$canditate26){
				$count26+=14;
			}else if($epilogh[2]==$canditate27){
				$count27+=14;
			}else if($epilogh[2]==$canditate28){
				$count28+=14;
			}else if($epilogh[2]==$canditate29){
				$count29+=14;
			}else if($epilogh[2]==$canditate30){
				$count30+=14;
			}else if($epilogh[2]==$canditate31){
				$count31+=14;
			}else if($epilogh[2]==$canditate32){
				$count32+=14;
			}else if($epilogh[2]==$canditate33){
				$count33+=14;
			}else if($epilogh[2]==$canditate34){
				$count34+=14;
			}else if($epilogh[2]==$canditate35){
				$count35+=14;
			}else if($epilogh[2]==$canditate36){
				$count36+=14;
			}else if($epilogh[2]==$canditate37){
				$count37+=14;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=13;
			}else if($epilogh[3]==$canditate22){
				$count22+=13;
			}else if($epilogh[3]==$canditate23){
				$count23+=13;
			}else if($epilogh[3]==$canditate24){
				$count24+=13;
			}else if($epilogh[3]==$canditate25){
				$count25+=13;
			}else if($epilogh[3]==$canditate26){
				$count26+=13;
			}else if($epilogh[3]==$canditate27){
				$count27+=13;
			}else if($epilogh[3]==$canditate28){
				$count28+=13;
			}else if($epilogh[3]==$canditate29){
				$count29+=13;
			}else if($epilogh[3]==$canditate30){
				$count30+=13;
			}else if($epilogh[3]==$canditate31){
				$count31+=13;
			}else if($epilogh[3]==$canditate32){
				$count32+=13;
			}else if($epilogh[3]==$canditate33){
				$count33+=13;
			}else if($epilogh[3]==$canditate34){
				$count34+=13;
			}else if($epilogh[3]==$canditate35){
				$count35+=13;
			}else if($epilogh[3]==$canditate36){
				$count36+=13;
			}else if($epilogh[3]==$canditate37){
				$count37+=13;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=12;
			}else if($epilogh[4]==$canditate22){
				$count22+=12;
			}else if($epilogh[4]==$canditate23){
				$count23+=12;
			}else if($epilogh[4]==$canditate24){
				$count24+=12;
			}else if($epilogh[4]==$canditate25){
				$count25+=12;	
			}else if($epilogh[4]==$canditate26){
				$count26+=12;
			}else if($epilogh[4]==$canditate27){
				$count27+=12;
			}else if($epilogh[4]==$canditate28){
				$count28+=12;
			}else if($epilogh[4]==$canditate29){
				$count29+=12;
			}else if($epilogh[4]==$canditate30){
				$count30+=12;
			}else if($epilogh[4]==$canditate31){
				$count31+=12;
			}else if($epilogh[4]==$canditate32){
				$count32+=12;
			}else if($epilogh[4]==$canditate33){
				$count33+=12;
			}else if($epilogh[4]==$canditate34){
				$count34+=12;
			}else if($epilogh[4]==$canditate35){
				$count35+=12;
			}else if($epilogh[4]==$canditate36){
				$count36+=12;
			}else if($epilogh[4]==$canditate37){
				$count37+=12;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=11;
			}else if($epilogh[5]==$canditate22){
				$count22+=11;
			}else if($epilogh[5]==$canditate23){
				$count23+=11;
			}else if($epilogh[5]==$canditate24){
				$count24+=11;
			}else if($epilogh[5]==$canditate25){
				$count25+=11;	
			}else if($epilogh[5]==$canditate26){
				$count26+=11;	
			}else if($epilogh[5]==$canditate27){
				$count27+=11;
			}else if($epilogh[5]==$canditate28){
				$count28+=11;
			}else if($epilogh[5]==$canditate29){
				$count29+=11;
			}else if($epilogh[5]==$canditate30){
				$count30+=11;
			}else if($epilogh[5]==$canditate31){
				$count31+=11;
			}else if($epilogh[5]==$canditate32){
				$count32+=11;
			}else if($epilogh[5]==$canditate33){
				$count33+=11;
			}else if($epilogh[5]==$canditate34){
				$count34+=11;
			}else if($epilogh[5]==$canditate35){
				$count35+=11;
			}else if($epilogh[5]==$canditate36){
				$count36+=11;
			}else if($epilogh[5]==$canditate37){
				$count37+=11;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=10;
			}else if($epilogh[6]==$canditate22){
				$count22+=10;
			}else if($epilogh[6]==$canditate23){
				$count23+=10;
			}else if($epilogh[6]==$canditate24){
				$count24+=10;
			}else if($epilogh[6]==$canditate25){
				$count25+=10;	
			}else if($epilogh[6]==$canditate26){
				$count26+=10;	
			}else if($epilogh[6]==$canditate27){
				$count27+=10;	
			}else if($epilogh[6]==$canditate28){
				$count28+=10;
			}else if($epilogh[6]==$canditate29){
				$count29+=10;
			}else if($epilogh[6]==$canditate30){
				$count30+=10;
			}else if($epilogh[6]==$canditate31){
				$count31+=10;
			}else if($epilogh[6]==$canditate32){
				$count32+=10;
			}else if($epilogh[6]==$canditate33){
				$count33+=10;
			}else if($epilogh[6]==$canditate34){
				$count34+=10;
			}else if($epilogh[6]==$canditate35){
				$count35+=10;
			}else if($epilogh[6]==$canditate36){
				$count36+=10;
			}else if($epilogh[6]==$canditate37){
				$count37+=10;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=9;
			}else if($epilogh[7]==$canditate22){
				$count22+=9;
			}else if($epilogh[7]==$canditate23){
				$count23+=9;
			}else if($epilogh[7]==$canditate24){
				$count24+=9;
			}else if($epilogh[7]==$canditate25){
				$count25+=9;	
			}else if($epilogh[7]==$canditate26){
				$count26+=9;	
			}else if($epilogh[7]==$canditate27){
				$count27+=9;	
			}else if($epilogh[7]==$canditate28){
				$count28+=9;	
			}else if($epilogh[7]==$canditate29){
				$count29+=9;
			}else if($epilogh[7]==$canditate30){
				$count30+=9;
			}else if($epilogh[7]==$canditate31){
				$count31+=9;
			}else if($epilogh[7]==$canditate32){
				$count32+=9;
			}else if($epilogh[7]==$canditate33){
				$count33+=9;
			}else if($epilogh[7]==$canditate34){
				$count34+=9;
			}else if($epilogh[7]==$canditate35){
				$count35+=9;
			}else if($epilogh[7]==$canditate36){
				$count36+=9;
			}else if($epilogh[7]==$canditate37){
				$count37+=9;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=8;
			}else if($epilogh[8]==$canditate22){
				$count22+=8;
			}else if($epilogh[8]==$canditate23){
				$count23+=8;
			}else if($epilogh[8]==$canditate24){
				$count24+=8;
			}else if($epilogh[8]==$canditate25){
				$count25+=8;	
			}else if($epilogh[8]==$canditate26){
				$count26+=8;	
			}else if($epilogh[8]==$canditate27){
				$count27+=8;	
			}else if($epilogh[8]==$canditate28){
				$count28+=8;	
			}else if($epilogh[8]==$canditate29){
				$count29+=8;	
			}else if($epilogh[8]==$canditate30){
				$count30+=8;
			}else if($epilogh[8]==$canditate31){
				$count31+=8;
			}else if($epilogh[8]==$canditate32){
				$count32+=8;
			}else if($epilogh[8]==$canditate33){
				$count33+=8;
			}else if($epilogh[8]==$canditate34){
				$count34+=8;
			}else if($epilogh[8]==$canditate35){
				$count35+=8;
			}else if($epilogh[8]==$canditate36){
				$count36+=8;
			}else if($epilogh[8]==$canditate37){
				$count37+=8;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=7;
			}else if($epilogh[9]==$canditate22){
				$count22+=7;
			}else if($epilogh[9]==$canditate23){
				$count23+=7;
			}else if($epilogh[9]==$canditate24){
				$count24+=7;
			}else if($epilogh[9]==$canditate25){
				$count25+=7;	
			}else if($epilogh[9]==$canditate26){
				$count26+=7;	
			}else if($epilogh[9]==$canditate27){
				$count27+=7;	
			}else if($epilogh[9]==$canditate28){
				$count28+=7;	
			}else if($epilogh[9]==$canditate29){
				$count29+=7;	
			}else if($epilogh[9]==$canditate30){
				$count30+=7;	
			}else if($epilogh[9]==$canditate31){
				$count31+=7;
			}else if($epilogh[9]==$canditate32){
				$count32+=7;
			}else if($epilogh[9]==$canditate33){
				$count33+=7;
			}else if($epilogh[9]==$canditate34){
				$count34+=7;
			}else if($epilogh[9]==$canditate35){
				$count35+=7;
			}else if($epilogh[9]==$canditate36){
				$count36+=7;
			}else if($epilogh[9]==$canditate37){
				$count37+=7;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=6;
			}else if($epilogh[10]==$canditate22){
				$count22+=6;
			}else if($epilogh[10]==$canditate23){
				$count23+=6;
			}else if($epilogh[10]==$canditate24){
				$count24+=6;
			}else if($epilogh[10]==$canditate25){
				$count25+=6;	
			}else if($epilogh[10]==$canditate26){
				$count26+=6;	
			}else if($epilogh[10]==$canditate27){
				$count27+=6;	
			}else if($epilogh[10]==$canditate28){
				$count28+=6;	
			}else if($epilogh[10]==$canditate29){
				$count29+=6;	
			}else if($epilogh[10]==$canditate30){
				$count30+=6;	
			}else if($epilogh[10]==$canditate31){
				$count31+=6;	
			}else if($epilogh[10]==$canditate32){
				$count32+=6;
			}else if($epilogh[10]==$canditate33){
				$count33+=6;
			}else if($epilogh[10]==$canditate34){
				$count34+=6;
			}else if($epilogh[10]==$canditate35){
				$count35+=6;
			}else if($epilogh[10]==$canditate36){
				$count36+=6;
			}else if($epilogh[10]==$canditate37){
				$count37+=6;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=5;
			}else if($epilogh[11]==$canditate22){
				$count22+=5;
			}else if($epilogh[11]==$canditate23){
				$count23+=5;
			}else if($epilogh[11]==$canditate24){
				$count24+=5;
			}else if($epilogh[11]==$canditate25){
				$count25+=5;	
			}else if($epilogh[11]==$canditate26){
				$count26+=5;	
			}else if($epilogh[11]==$canditate27){
				$count27+=5;	
			}else if($epilogh[11]==$canditate28){
				$count28+=5;	
			}else if($epilogh[11]==$canditate29){
				$count29+=5;	
			}else if($epilogh[11]==$canditate30){
				$count30+=5;	
			}else if($epilogh[11]==$canditate31){
				$count31+=5;	
			}else if($epilogh[11]==$canditate32){
				$count32+=5;	
			}else if($epilogh[11]==$canditate33){
				$count33+=5;
			}else if($epilogh[11]==$canditate34){
				$count34+=5;
			}else if($epilogh[11]==$canditate35){
				$count35+=5;
			}else if($epilogh[11]==$canditate36){
				$count36+=5;
			}else if($epilogh[11]==$canditate37){
				$count37+=5;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=4;
			}else if($epilogh[12]==$canditate22){
				$count22+=4;
			}else if($epilogh[12]==$canditate23){
				$count23+=4;
			}else if($epilogh[12]==$canditate24){
				$count24+=4;
			}else if($epilogh[12]==$canditate25){
				$count25+=4;	
			}else if($epilogh[12]==$canditate26){
				$count26+=4;	
			}else if($epilogh[12]==$canditate27){
				$count27+=4;	
			}else if($epilogh[12]==$canditate28){
				$count28+=4;	
			}else if($epilogh[12]==$canditate29){
				$count29+=4;	
			}else if($epilogh[12]==$canditate30){
				$count30+=4;	
			}else if($epilogh[12]==$canditat31){
				$count31+=4;	
			}else if($epilogh[12]==$canditate32){
				$count32+=4;	
			}else if($epilogh[12]==$canditate33){
				$count33+=4;	
			}else if($epilogh[12]==$canditate34){
				$count34+=4;
			}else if($epilogh[12]==$canditate35){
				$count35+=4;
			}else if($epilogh[12]==$canditate36){
				$count36+=4;
			}else if($epilogh[12]==$canditate37){
				$count37+=4;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate21){
				$count21+=3;
			}else if($epilogh[13]==$canditate22){
				$count22+=3;
			}else if($epilogh[13]==$canditate23){
				$count23+=3;
			}else if($epilogh[13]==$canditate24){
				$count24+=3;
			}else if($epilogh[13]==$canditate25){
				$count25+=3;	
			}else if($epilogh[13]==$canditate26){
				$count26+=3;	
			}else if($epilogh[13]==$canditate27){
				$count27+=3;	
			}else if($epilogh[13]==$canditate28){
				$count28+=3;	
			}else if($epilogh[13]==$canditate29){
				$count29+=3;	
			}else if($epilogh[13]==$canditate30){
				$count30+=3;	
			}else if($epilogh[13]==$canditate31){
				$count31+=3;	
			}else if($epilogh[13]==$canditate32){
				$count32+=3;	
			}else if($epilogh[13]==$canditate33){
				$count33+=3;	
			}else if($epilogh[13]==$canditate34){
				$count34+=3;	
			}else if($epilogh[13]==$canditate35){
				$count35+=3;
			}else if($epilogh[13]==$canditate36){
				$count36+=3;
			}else if($epilogh[13]==$canditate37){
				$count37+=3;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate21){
				$count21+=2;
			}else if($epilogh[14]==$canditate22){
				$count22+=2;
			}else if($epilogh[14]==$canditate23){
				$count23+=2;
			}else if($epilogh[14]==$canditate24){
				$count24+=2;
			}else if($epilogh[14]==$canditate25){
				$count25+=2;	
			}else if($epilogh[14]==$canditate26){
				$count26+=2;	
			}else if($epilogh[14]==$canditate27){
				$count27+=2;	
			}else if($epilogh[14]==$canditate28){
				$count28+=2;	
			}else if($epilogh[14]==$canditate29){
				$count29+=2;	
			}else if($epilogh[14]==$canditate30){
				$count30+=2;	
			}else if($epilogh[14]==$canditate31){
				$count31+=2;	
			}else if($epilogh[14]==$canditate32){
				$count32+=2;	
			}else if($epilogh[14]==$canditate33){
				$count33+=2;	
			}else if($epilogh[14]==$canditate34){
				$count34+=2;	
			}else if($epilogh[14]==$canditate35){
				$count35+=2;	
			}else if($epilogh[14]==$canditate36){
				$count36+=2;
			}else if($epilogh[14]==$canditate37){
				$count37+=2;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate21){
				$count21+=1;
			}else if($epilogh[15]==$canditate22){
				$count22+=1;
			}else if($epilogh[15]==$canditate23){
				$count23+=1;
			}else if($epilogh[15]==$canditate24){
				$count24+=1;
			}else if($epilogh[15]==$canditate25){
				$count25+=1;	
			}else if($epilogh[15]==$canditate26){
				$count26+=1;	
			}else if($epilogh[15]==$canditate27){
				$count27+=1;	
			}else if($epilogh[15]==$canditate28){
				$count28+=1;	
			}else if($epilogh[15]==$canditate29){
				$count29+=1;	
			}else if($epilogh[15]==$canditate30){
				$count30+=1;	
			}else if($epilogh[15]==$canditate31){
				$count31+=1;	
			}else if($epilogh[15]==$canditate32){
				$count32+=1;	
			}else if($epilogh[15]==$canditate33){
				$count33+=1;	
			}else if($epilogh[15]==$canditate34){
				$count34+=1;	
			}else if($epilogh[15]==$canditate35){
				$count35+=1;	
			}else if($epilogh[15]==$canditate36){
				$count36+=1;	
			}else if($epilogh[15]==$canditate37){
				$count37+=1;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate21){
				$count21+=0;
			}else if($epilogh[16]==$canditate22){
				$count22+=0;
			}else if($epilogh[16]==$canditate23){
				$count23+=0;
			}else if($epilogh[16]==$canditate24){
				$count24+=0;
			}else if($epilogh[16]==$canditate25){
				$count25+=0;	
			}else if($epilogh[16]==$canditate26){
				$count26+=0;	
			}else if($epilogh[16]==$canditate27){
				$count27+=0;	
			}else if($epilogh[16]==$canditate28){
				$count28+=0;	
			}else if($epilogh[16]==$canditate29){
				$count29+=0;	
			}else if($epilogh[16]==$canditate30){
				$count30+=0;	
			}else if($epilogh[16]==$canditate31){
				$count31+=0;	
			}else if($epilogh[16]==$canditate32){
				$count32+=0;	
			}else if($epilogh[16]==$canditate33){
				$count33+=0;	
			}else if($epilogh[16]==$canditate34){
				$count34+=0;	
			}else if($epilogh[16]==$canditate35){
				$count35+=0;	
			}else if($epilogh[16]==$canditate36){
				$count36+=0;	
			}else if($epilogh[16]==$canditate37){
				$count37+=0;	
			}
		}
	}
	if ($i2==18){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=17;
			}else if($epilogh[0]==$canditate22){
				$count22+=17;
			}else if($epilogh[0]==$canditate23){
				$count23+=17;
			}else if($epilogh[0]==$canditate24){
				$count24+=17;
			}else if($epilogh[0]==$canditate25){
				$count25+=17;
			}else if($epilogh[0]==$canditate26){
				$count26+=17;
			}else if($epilogh[0]==$canditate27){
				$count27+=17;
			}else if($epilogh[0]==$canditate28){
				$count28+=17;
			}else if($epilogh[0]==$canditate29){
				$count29+=17;
			}else if($epilogh[0]==$canditate30){
				$count30+=17;
			}else if($epilogh[0]==$canditate31){
				$count31+=17;
			}else if($epilogh[0]==$canditate32){
				$count32+=17;
			}else if($epilogh[0]==$canditate33){
				$count33+=17;
			}else if($epilogh[0]==$canditate34){
				$count34+=17;
			}else if($epilogh[0]==$canditate35){
				$count35+=17;
			}else if($epilogh[0]==$canditate36){
				$count36+=17;
			}else if($epilogh[0]==$canditate37){
				$count37+=17;	
			}else if($epilogh[0]==$canditate38){
				$count38+=17;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=16;
			}else if($epilogh[1]==$canditate22){
				$count22+=16;
			}else if($epilogh[1]==$canditate23){
				$count23+=16;
			}else if($epilogh[1]==$canditate24){
				$count24+=16;
			}else if($epilogh[1]==$canditate25){
				$count25+=16;
			}else if($epilogh[1]==$canditate26){
				$count26+=16;
			}else if($epilogh[1]==$canditate27){
				$count27+=16;
			}else if($epilogh[1]==$canditate28){
				$count28+=16;
			}else if($epilogh[1]==$canditate29){
				$count29+=16;
			}else if($epilogh[1]==$canditate30){
				$count30+=16;
			}else if($epilogh[1]==$canditate31){
				$count31+=16;
			}else if($epilogh[1]==$canditate32){
				$count32+=16;
			}else if($epilogh[1]==$canditate33){
				$count33+=16;
			}else if($epilogh[1]==$canditate34){
				$count34+=16;
			}else if($epilogh[1]==$canditate35){
				$count35+=16;
			}else if($epilogh[1]==$canditate36){
				$count36+=16;
			}else if($epilogh[1]==$canditate37){
				$count37+=16;	
			}else if($epilogh[1]==$canditate38){
				$count38+=16;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=15;
			}else if($epilogh[2]==$canditate22){
				$count22+=15;
			}else if($epilogh[2]==$canditate23){
				$count23+=15;
			}else if($epilogh[2]==$canditate24){
				$count24+=15;
			}else if($epilogh[2]==$canditate25){
				$count25+=15;
			}else if($epilogh[2]==$canditate26){
				$count26+=15;
			}else if($epilogh[2]==$canditate27){
				$count27+=15;
			}else if($epilogh[2]==$canditate28){
				$count28+=15;
			}else if($epilogh[2]==$canditate29){
				$count29+=15;
			}else if($epilogh[2]==$canditate30){
				$count30+=15;
			}else if($epilogh[2]==$canditate31){
				$count31+=15;
			}else if($epilogh[2]==$canditate32){
				$count32+=15;
			}else if($epilogh[2]==$canditate33){
				$count33+=15;
			}else if($epilogh[2]==$canditate34){
				$count34+=15;
			}else if($epilogh[2]==$canditate35){
				$count35+=15;
			}else if($epilogh[2]==$canditate36){
				$count36+=15;
			}else if($epilogh[2]==$canditate37){
				$count37+=15;	
			}else if($epilogh[2]==$canditate38){
				$count38+=15;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=14;
			}else if($epilogh[3]==$canditate22){
				$count22+=14;
			}else if($epilogh[3]==$canditate23){
				$count23+=14;
			}else if($epilogh[3]==$canditate24){
				$count24+=14;
			}else if($epilogh[3]==$canditate25){
				$count25+=14;
			}else if($epilogh[3]==$canditate26){
				$count26+=14;
			}else if($epilogh[3]==$canditate27){
				$count27+=14;
			}else if($epilogh[3]==$canditate28){
				$count28+=14;
			}else if($epilogh[3]==$canditate29){
				$count29+=14;
			}else if($epilogh[3]==$canditate30){
				$count30+=14;
			}else if($epilogh[3]==$canditate31){
				$count31+=14;
			}else if($epilogh[3]==$canditate32){
				$count32+=14;
			}else if($epilogh[3]==$canditate33){
				$count33+=14;
			}else if($epilogh[3]==$canditate34){
				$count34+=14;
			}else if($epilogh[3]==$canditate35){
				$count35+=14;
			}else if($epilogh[3]==$canditate36){
				$count36+=14;
			}else if($epilogh[3]==$canditate37){
				$count37+=14;	
			}else if($epilogh[3]==$canditate38){
				$count38+=14;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=13;
			}else if($epilogh[4]==$canditate22){
				$count22+=13;
			}else if($epilogh[4]==$canditate23){
				$count23+=13;
			}else if($epilogh[4]==$canditate24){
				$count24+=13;
			}else if($epilogh[4]==$canditate25){
				$count25+=13;	
			}else if($epilogh[4]==$canditate26){
				$count26+=13;
			}else if($epilogh[4]==$canditate27){
				$count27+=13;
			}else if($epilogh[4]==$canditate28){
				$count28+=13;
			}else if($epilogh[4]==$canditate29){
				$count29+=13;
			}else if($epilogh[4]==$canditate30){
				$count30+=13;
			}else if($epilogh[4]==$canditate31){
				$count31+=13;
			}else if($epilogh[4]==$canditate32){
				$count32+=13;
			}else if($epilogh[4]==$canditate33){
				$count33+=13;
			}else if($epilogh[4]==$canditate34){
				$count34+=13;
			}else if($epilogh[4]==$canditate35){
				$count35+=13;
			}else if($epilogh[4]==$canditate36){
				$count36+=13;
			}else if($epilogh[4]==$canditate37){
				$count37+=13;	
			}else if($epilogh[4]==$canditate38){
				$count38+=13;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=12;
			}else if($epilogh[5]==$canditate22){
				$count22+=12;
			}else if($epilogh[5]==$canditate23){
				$count23+=12;
			}else if($epilogh[5]==$canditate24){
				$count24+=12;
			}else if($epilogh[5]==$canditate25){
				$count25+=12;	
			}else if($epilogh[5]==$canditate26){
				$count26+=12;	
			}else if($epilogh[5]==$canditate27){
				$count27+=12;
			}else if($epilogh[5]==$canditate28){
				$count28+=12;
			}else if($epilogh[5]==$canditate29){
				$count29+=12;
			}else if($epilogh[5]==$canditate30){
				$count30+=12;
			}else if($epilogh[5]==$canditate31){
				$count31+=12;
			}else if($epilogh[5]==$canditate32){
				$count32+=12;
			}else if($epilogh[5]==$canditate33){
				$count33+=12;
			}else if($epilogh[5]==$canditate34){
				$count34+=12;
			}else if($epilogh[5]==$canditate35){
				$count35+=12;
			}else if($epilogh[5]==$canditate36){
				$count36+=12;
			}else if($epilogh[5]==$canditate37){
				$count37+=12;	
			}else if($epilogh[5]==$canditate38){
				$count38+=12;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=11;
			}else if($epilogh[6]==$canditate22){
				$count22+=11;
			}else if($epilogh[6]==$canditate23){
				$count23+=11;
			}else if($epilogh[6]==$canditate24){
				$count24+=11;
			}else if($epilogh[6]==$canditate25){
				$count25+=11;	
			}else if($epilogh[6]==$canditate26){
				$count26+=11;	
			}else if($epilogh[6]==$canditate27){
				$count27+=11;	
			}else if($epilogh[6]==$canditate28){
				$count28+=11;
			}else if($epilogh[6]==$canditate29){
				$count29+=11;
			}else if($epilogh[6]==$canditate30){
				$count30+=11;
			}else if($epilogh[6]==$canditate31){
				$count31+=11;
			}else if($epilogh[6]==$canditate32){
				$count32+=11;
			}else if($epilogh[6]==$canditate33){
				$count33+=11;
			}else if($epilogh[6]==$canditate34){
				$count34+=11;
			}else if($epilogh[6]==$canditate35){
				$count35+=11;
			}else if($epilogh[6]==$canditate36){
				$count36+=11;
			}else if($epilogh[6]==$canditate37){
				$count37+=11;	
			}else if($epilogh[6]==$canditate38){
				$count38+=11;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=10;
			}else if($epilogh[7]==$canditate22){
				$count22+=10;
			}else if($epilogh[7]==$canditate23){
				$count23+=10;
			}else if($epilogh[7]==$canditate24){
				$count24+=10;
			}else if($epilogh[7]==$canditate25){
				$count25+=10;	
			}else if($epilogh[7]==$canditate26){
				$count26+=10;	
			}else if($epilogh[7]==$canditate27){
				$count27+=10;	
			}else if($epilogh[7]==$canditate28){
				$count28+=10;	
			}else if($epilogh[7]==$canditate29){
				$count29+=10;
			}else if($epilogh[7]==$canditate30){
				$count30+=10;
			}else if($epilogh[7]==$canditate31){
				$count31+=10;
			}else if($epilogh[7]==$canditate32){
				$count32+=10;
			}else if($epilogh[7]==$canditate33){
				$count33+=10;
			}else if($epilogh[7]==$canditate34){
				$count34+=10;
			}else if($epilogh[7]==$canditate35){
				$count35+=10;
			}else if($epilogh[7]==$canditate36){
				$count36+=10;
			}else if($epilogh[7]==$canditate37){
				$count37+=10;	
			}else if($epilogh[7]==$canditate38){
				$count38+=10;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=9;
			}else if($epilogh[8]==$canditate22){
				$count22+=9;
			}else if($epilogh[8]==$canditate23){
				$count23+=9;
			}else if($epilogh[8]==$canditate24){
				$count24+=9;
			}else if($epilogh[8]==$canditate25){
				$count25+=9;	
			}else if($epilogh[8]==$canditate26){
				$count26+=9;	
			}else if($epilogh[8]==$canditate27){
				$count27+=9;	
			}else if($epilogh[8]==$canditate28){
				$count28+=9;	
			}else if($epilogh[8]==$canditate29){
				$count29+=9;	
			}else if($epilogh[8]==$canditate30){
				$count30+=9;
			}else if($epilogh[8]==$canditate31){
				$count31+=9;
			}else if($epilogh[8]==$canditate32){
				$count32+=9;
			}else if($epilogh[8]==$canditate33){
				$count33+=9;
			}else if($epilogh[8]==$canditate34){
				$count34+=9;
			}else if($epilogh[8]==$canditate35){
				$count35+=9;
			}else if($epilogh[8]==$canditate36){
				$count36+=9;
			}else if($epilogh[8]==$canditate37){
				$count37+=9;	
			}else if($epilogh[8]==$canditate38){
				$count38+=9;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=8;
			}else if($epilogh[9]==$canditate22){
				$count22+=8;
			}else if($epilogh[9]==$canditate23){
				$count23+=8;
			}else if($epilogh[9]==$canditate24){
				$count24+=8;
			}else if($epilogh[9]==$canditate25){
				$count25+=8;	
			}else if($epilogh[9]==$canditate26){
				$count26+=8;	
			}else if($epilogh[9]==$canditate27){
				$count27+=8;	
			}else if($epilogh[9]==$canditate28){
				$count28+=8;	
			}else if($epilogh[9]==$canditate29){
				$count29+=8;	
			}else if($epilogh[9]==$canditate30){
				$count30+=8;	
			}else if($epilogh[9]==$canditate31){
				$count31+=8;
			}else if($epilogh[9]==$canditate32){
				$count32+=8;
			}else if($epilogh[9]==$canditate33){
				$count33+=8;
			}else if($epilogh[9]==$canditate34){
				$count34+=8;
			}else if($epilogh[9]==$canditate35){
				$count35+=8;
			}else if($epilogh[9]==$canditate36){
				$count36+=8;
			}else if($epilogh[9]==$canditate37){
				$count37+=8;	
			}else if($epilogh[9]==$canditate38){
				$count38+=8;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=7;
			}else if($epilogh[10]==$canditate22){
				$count22+=7;
			}else if($epilogh[10]==$canditate23){
				$count23+=7;
			}else if($epilogh[10]==$canditate24){
				$count24+=7;
			}else if($epilogh[10]==$canditate25){
				$count25+=7;	
			}else if($epilogh[10]==$canditate26){
				$count26+=7;	
			}else if($epilogh[10]==$canditate27){
				$count27+=7;	
			}else if($epilogh[10]==$canditate28){
				$count28+=7;	
			}else if($epilogh[10]==$canditate29){
				$count29+=7;	
			}else if($epilogh[10]==$canditate30){
				$count30+=7;	
			}else if($epilogh[10]==$canditate31){
				$count31+=7;	
			}else if($epilogh[10]==$canditate32){
				$count32+=7;
			}else if($epilogh[10]==$canditate33){
				$count33+=7;
			}else if($epilogh[10]==$canditate34){
				$count34+=7;
			}else if($epilogh[10]==$canditate35){
				$count35+=7;
			}else if($epilogh[10]==$canditate36){
				$count36+=7;
			}else if($epilogh[10]==$canditate37){
				$count37+=7;	
			}else if($epilogh[10]==$canditate38){
				$count38+=7;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=6;
			}else if($epilogh[11]==$canditate22){
				$count22+=6;
			}else if($epilogh[11]==$canditate23){
				$count23+=6;
			}else if($epilogh[11]==$canditate24){
				$count24+=6;
			}else if($epilogh[11]==$canditate25){
				$count25+=6;	
			}else if($epilogh[11]==$canditate26){
				$count26+=6;	
			}else if($epilogh[11]==$canditate27){
				$count27+=6;	
			}else if($epilogh[11]==$canditate28){
				$count28+=6;	
			}else if($epilogh[11]==$canditate29){
				$count29+=6;	
			}else if($epilogh[11]==$canditate30){
				$count30+=6;	
			}else if($epilogh[11]==$canditate31){
				$count31+=6;	
			}else if($epilogh[11]==$canditate32){
				$count32+=6;	
			}else if($epilogh[11]==$canditate33){
				$count33+=6;
			}else if($epilogh[11]==$canditate34){
				$count34+=6;
			}else if($epilogh[11]==$canditate35){
				$count35+=6;
			}else if($epilogh[11]==$canditate36){
				$count36+=6;
			}else if($epilogh[11]==$canditate37){
				$count37+=6;	
			}else if($epilogh[11]==$canditate38){
				$count38+=6;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=5;
			}else if($epilogh[12]==$canditate22){
				$count22+=5;
			}else if($epilogh[12]==$canditate23){
				$count23+=5;
			}else if($epilogh[12]==$canditate24){
				$count24+=5;
			}else if($epilogh[12]==$canditate25){
				$count25+=5;	
			}else if($epilogh[12]==$canditate26){
				$count26+=5;	
			}else if($epilogh[12]==$canditate27){
				$count27+=5;	
			}else if($epilogh[12]==$canditate28){
				$count28+=5;	
			}else if($epilogh[12]==$canditate29){
				$count29+=5;	
			}else if($epilogh[12]==$canditate30){
				$count30+=5;	
			}else if($epilogh[12]==$canditate31){
				$count31+=5;	
			}else if($epilogh[12]==$canditate32){
				$count32+=5;	
			}else if($epilogh[12]==$canditate33){
				$count33+=5;	
			}else if($epilogh[12]==$canditate34){
				$count34+=5;
			}else if($epilogh[12]==$canditate35){
				$count35+=5;
			}else if($epilogh[12]==$canditate36){
				$count36+=5;
			}else if($epilogh[12]==$canditate37){
				$count37+=5;	
			}else if($epilogh[12]==$canditate38){
				$count38+=5;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate21){
				$count21+=4;
			}else if($epilogh[13]==$canditate22){
				$count22+=4;
			}else if($epilogh[13]==$canditate23){
				$count23+=4;
			}else if($epilogh[13]==$canditate24){
				$count24+=4;
			}else if($epilogh[13]==$canditate25){
				$count25+=4;	
			}else if($epilogh[13]==$canditate26){
				$count26+=4;	
			}else if($epilogh[13]==$canditate27){
				$count27+=4;	
			}else if($epilogh[13]==$canditate28){
				$count28+=4;	
			}else if($epilogh[13]==$canditate29){
				$count29+=4;	
			}else if($epilogh[13]==$canditate30){
				$count30+=4;	
			}else if($epilogh[13]==$canditate31){
				$count31+=4;	
			}else if($epilogh[13]==$canditate32){
				$count32+=4;	
			}else if($epilogh[13]==$canditate33){
				$count33+=4;	
			}else if($epilogh[13]==$canditate34){
				$count34+=4;	
			}else if($epilogh[13]==$canditate35){
				$count35+=4;
			}else if($epilogh[13]==$canditate36){
				$count36+=4;
			}else if($epilogh[13]==$canditate37){
				$count37+=4;	
			}else if($epilogh[13]==$canditate38){
				$count38+=4;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate21){
				$count21+=3;
			}else if($epilogh[14]==$canditate22){
				$count22+=3;
			}else if($epilogh[14]==$canditate23){
				$count23+=3;
			}else if($epilogh[14]==$canditate24){
				$count24+=3;
			}else if($epilogh[14]==$canditate25){
				$count25+=3;	
			}else if($epilogh[14]==$canditate26){
				$count26+=3;	
			}else if($epilogh[14]==$canditate27){
				$count27+=3;	
			}else if($epilogh[14]==$canditate28){
				$count28+=3;	
			}else if($epilogh[14]==$canditate29){
				$count29+=3;	
			}else if($epilogh[14]==$canditate30){
				$count30+=3;	
			}else if($epilogh[14]==$canditate31){
				$count31+=3;	
			}else if($epilogh[14]==$canditate32){
				$count32+=3;	
			}else if($epilogh[14]==$canditate33){
				$count33+=3;	
			}else if($epilogh[14]==$canditate34){
				$count34+=3;	
			}else if($epilogh[14]==$canditate35){
				$count35+=3;	
			}else if($epilogh[14]==$canditate36){
				$count36+=3;
			}else if($epilogh[14]==$canditate37){
				$count37+=3;	
			}else if($epilogh[14]==$canditate38){
				$count38+=3;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate21){
				$count21+=2;
			}else if($epilogh[15]==$canditate22){
				$count22+=2;
			}else if($epilogh[15]==$canditate23){
				$count23+=2;
			}else if($epilogh[15]==$canditate24){
				$count24+=2;
			}else if($epilogh[15]==$canditate25){
				$count25+=2;	
			}else if($epilogh[15]==$canditate26){
				$count26+=2;	
			}else if($epilogh[15]==$canditate27){
				$count27+=2;	
			}else if($epilogh[15]==$canditate28){
				$count28+=2;	
			}else if($epilogh[15]==$canditate29){
				$count29+=2;	
			}else if($epilogh[15]==$canditate30){
				$count30+=2;	
			}else if($epilogh[15]==$canditate31){
				$count31+=2;	
			}else if($epilogh[15]==$canditate32){
				$count32+=2;	
			}else if($epilogh[15]==$canditate33){
				$count33+=2;	
			}else if($epilogh[15]==$canditate34){
				$count34+=2;	
			}else if($epilogh[15]==$canditate35){
				$count35+=2;	
			}else if($epilogh[15]==$canditate36){
				$count36+=2;	
			}else if($epilogh[15]==$canditate37){
				$count37+=2;	
			}else if($epilogh[15]==$canditate38){
				$count38+=2;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate21){
				$count21+=1;
			}else if($epilogh[16]==$canditate22){
				$count22+=1;
			}else if($epilogh[16]==$canditate23){
				$count23+=1;
			}else if($epilogh[16]==$canditate24){
				$count24+=1;
			}else if($epilogh[16]==$canditate25){
				$count25+=1;	
			}else if($epilogh[16]==$canditate26){
				$count26+=1;	
			}else if($epilogh[16]==$canditate27){
				$count27+=1;	
			}else if($epilogh[16]==$canditate28){
				$count28+=1;	
			}else if($epilogh[16]==$canditate29){
				$count29+=1;	
			}else if($epilogh[16]==$canditate30){
				$count30+=1;	
			}else if($epilogh[16]==$canditate31){
				$count31+=1;	
			}else if($epilogh[16]==$canditate32){
				$count32+=1;	
			}else if($epilogh[16]==$canditate33){
				$count33+=1;	
			}else if($epilogh[16]==$canditate34){
				$count34+=1;	
			}else if($epilogh[16]==$canditate35){
				$count35+=1;	
			}else if($epilogh[16]==$canditate36){
				$count36+=1;	
			}else if($epilogh[16]==$canditate37){
				$count37+=1;	
			}else if($epilogh[16]==$canditate38){
				$count38+=1;	
			}
		}
		if ($arrlen>=18){	
			if($epilogh[17]==$canditate21){
				$count21+=0;
			}else if($epilogh[17]==$canditate22){
				$count22+=0;
			}else if($epilogh[17]==$canditate23){
				$count23+=0;
			}else if($epilogh[17]==$canditate24){
				$count24+=0;
			}else if($epilogh[17]==$canditate25){
				$count25+=0;	
			}else if($epilogh[17]==$canditate26){
				$count26+=0;	
			}else if($epilogh[17]==$canditate27){
				$count27+=0;	
			}else if($epilogh[17]==$canditate28){
				$count28+=0;	
			}else if($epilogh[17]==$canditate29){
				$count29+=0;	
			}else if($epilogh[17]==$canditate30){
				$count30+=0;	
			}else if($epilogh[17]==$canditate31){
				$count31+=0;	
			}else if($epilogh[17]==$canditate32){
				$count32+=0;	
			}else if($epilogh[17]==$canditate33){
				$count33+=0;	
			}else if($epilogh[17]==$canditate34){
				$count34+=0;	
			}else if($epilogh[17]==$canditate35){
				$count35+=0;	
			}else if($epilogh[17]==$canditate36){
				$count36+=0;	
			}else if($epilogh[17]==$canditate37){
				$count37+=0;	
			}else if($epilogh[17]==$canditate38){
				$count38+=0;	
			}
		}
	}
	if ($i2==19){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=18;
			}else if($epilogh[0]==$canditate22){
				$count22+=18;
			}else if($epilogh[0]==$canditate23){
				$count23+=18;
			}else if($epilogh[0]==$canditate24){
				$count24+=18;
			}else if($epilogh[0]==$canditate25){
				$count25+=18;
			}else if($epilogh[0]==$canditate26){
				$count26+=18;
			}else if($epilogh[0]==$canditate27){
				$count27+=18;
			}else if($epilogh[0]==$canditate28){
				$count28+=18;
			}else if($epilogh[0]==$canditate29){
				$count29+=18;
			}else if($epilogh[0]==$canditate30){
				$count30+=18;
			}else if($epilogh[0]==$canditate31){
				$count31+=18;
			}else if($epilogh[0]==$canditate32){
				$count32+=18;
			}else if($epilogh[0]==$canditate33){
				$count33+=18;
			}else if($epilogh[0]==$canditate34){
				$count34+=18;
			}else if($epilogh[0]==$canditate35){
				$count35+=18;
			}else if($epilogh[0]==$canditate36){
				$count36+=18;
			}else if($epilogh[0]==$canditate37){
				$count37+=18;	
			}else if($epilogh[0]==$canditate38){
				$count38+=18;	
			}else if($epilogh[0]==$canditate39){
				$count39+=18;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=17;
			}else if($epilogh[1]==$canditate22){
				$count22+=17;
			}else if($epilogh[1]==$canditate23){
				$count23+=17;
			}else if($epilogh[1]==$canditate24){
				$count24+=17;
			}else if($epilogh[1]==$canditate25){
				$count25+=17;
			}else if($epilogh[1]==$canditate26){
				$count26+=17;
			}else if($epilogh[1]==$canditate27){
				$count27+=17;
			}else if($epilogh[1]==$canditate28){
				$count28+=17;
			}else if($epilogh[1]==$canditate29){
				$count29+=17;
			}else if($epilogh[1]==$canditate30){
				$count30+=17;
			}else if($epilogh[1]==$canditate31){
				$count31+=17;
			}else if($epilogh[1]==$canditate32){
				$count32+=17;
			}else if($epilogh[1]==$canditate33){
				$count33+=17;
			}else if($epilogh[1]==$canditate34){
				$count34+=17;
			}else if($epilogh[1]==$canditate35){
				$count35+=17;
			}else if($epilogh[1]==$canditate36){
				$count36+=17;
			}else if($epilogh[1]==$canditate37){
				$count37+=17;	
			}else if($epilogh[1]==$canditate38){
				$count38+=17;	
			}else if($epilogh[1]==$canditate39){
				$count39+=17;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=16;
			}else if($epilogh[2]==$canditate22){
				$count22+=16;
			}else if($epilogh[2]==$canditate23){
				$count23+=16;
			}else if($epilogh[2]==$canditate24){
				$count24+=16;
			}else if($epilogh[2]==$canditate25){
				$count25+=16;
			}else if($epilogh[2]==$canditate26){
				$count26+=16;
			}else if($epilogh[2]==$canditate27){
				$count27+=16;
			}else if($epilogh[2]==$canditate28){
				$count28+=16;
			}else if($epilogh[2]==$canditate29){
				$count29+=16;
			}else if($epilogh[2]==$canditate30){
				$count30+=16;
			}else if($epilogh[2]==$canditate31){
				$count31+=16;
			}else if($epilogh[2]==$canditate32){
				$count32+=16;
			}else if($epilogh[2]==$canditate33){
				$count33+=16;
			}else if($epilogh[2]==$canditate34){
				$count34+=16;
			}else if($epilogh[2]==$canditate35){
				$count35+=16;
			}else if($epilogh[2]==$canditate36){
				$count36+=16;
			}else if($epilogh[2]==$canditate37){
				$count37+=16;	
			}else if($epilogh[2]==$canditate38){
				$count38+=16;	
			}else if($epilogh[2]==$canditate39){
				$count39+=16;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=15;
			}else if($epilogh[3]==$canditate22){
				$count22+=15;
			}else if($epilogh[3]==$canditate23){
				$count23+=15;
			}else if($epilogh[3]==$canditate24){
				$count24+=15;
			}else if($epilogh[3]==$canditate25){
				$count25+=15;
			}else if($epilogh[3]==$canditate26){
				$count26+=15;
			}else if($epilogh[3]==$canditate27){
				$count27+=15;
			}else if($epilogh[3]==$canditate28){
				$count28+=15;
			}else if($epilogh[3]==$canditate29){
				$count29+=15;
			}else if($epilogh[3]==$canditate30){
				$count30+=15;
			}else if($epilogh[3]==$canditate31){
				$count31+=15;
			}else if($epilogh[3]==$canditate32){
				$count32+=15;
			}else if($epilogh[3]==$canditate33){
				$count33+=15;
			}else if($epilogh[3]==$canditate34){
				$count34+=15;
			}else if($epilogh[3]==$canditate35){
				$count35+=15;
			}else if($epilogh[3]==$canditate36){
				$count36+=15;
			}else if($epilogh[3]==$canditate37){
				$count37+=15;	
			}else if($epilogh[3]==$canditate38){
				$count38+=15;	
			}else if($epilogh[3]==$canditate39){
				$count39+=15;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=14;
			}else if($epilogh[4]==$canditate22){
				$count22+=14;
			}else if($epilogh[4]==$canditate23){
				$count23+=14;
			}else if($epilogh[4]==$canditate24){
				$count24+=14;
			}else if($epilogh[4]==$canditate25){
				$count25+=14;	
			}else if($epilogh[4]==$canditate26){
				$count26+=14;
			}else if($epilogh[4]==$canditate27){
				$count27+=14;
			}else if($epilogh[4]==$canditate28){
				$count28+=14;
			}else if($epilogh[4]==$canditate29){
				$count29+=14;
			}else if($epilogh[4]==$canditate30){
				$count30+=14;
			}else if($epilogh[4]==$canditate31){
				$count31+=14;
			}else if($epilogh[4]==$canditate32){
				$count32+=14;
			}else if($epilogh[4]==$canditate33){
				$count33+=14;
			}else if($epilogh[4]==$canditate34){
				$count34+=14;
			}else if($epilogh[4]==$canditate35){
				$count35+=14;
			}else if($epilogh[4]==$canditate36){
				$count36+=14;
			}else if($epilogh[4]==$canditate37){
				$count37+=14;	
			}else if($epilogh[4]==$canditate38){
				$count38+=14;	
			}else if($epilogh[4]==$canditate39){
				$count39+=14;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=13;
			}else if($epilogh[5]==$canditate22){
				$count22+=13;
			}else if($epilogh[5]==$canditate23){
				$count23+=13;
			}else if($epilogh[5]==$canditate24){
				$count24+=13;
			}else if($epilogh[5]==$canditate25){
				$count25+=13;	
			}else if($epilogh[5]==$canditate26){
				$count26+=13;	
			}else if($epilogh[5]==$canditate27){
				$count27+=13;
			}else if($epilogh[5]==$canditate28){
				$count28+=13;
			}else if($epilogh[5]==$canditate29){
				$count29+=13;
			}else if($epilogh[5]==$canditate30){
				$count30+=13;
			}else if($epilogh[5]==$canditate31){
				$count31+=13;
			}else if($epilogh[5]==$canditate32){
				$count32+=13;
			}else if($epilogh[5]==$canditate33){
				$count33+=13;
			}else if($epilogh[5]==$canditate34){
				$count34+=13;
			}else if($epilogh[5]==$canditate35){
				$count35+=13;
			}else if($epilogh[5]==$canditate36){
				$count36+=13;
			}else if($epilogh[5]==$canditate37){
				$count37+=13;	
			}else if($epilogh[5]==$canditate38){
				$count38+=13;	
			}else if($epilogh[5]==$canditate39){
				$count39+=13;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=12;
			}else if($epilogh[6]==$canditate22){
				$count22+=12;
			}else if($epilogh[6]==$canditate23){
				$count23+=12;
			}else if($epilogh[6]==$canditate24){
				$count24+=12;
			}else if($epilogh[6]==$canditate25){
				$count25+=12;	
			}else if($epilogh[6]==$canditate26){
				$count26+=12;	
			}else if($epilogh[6]==$canditate27){
				$count27+=12;	
			}else if($epilogh[6]==$canditate28){
				$count28+=12;
			}else if($epilogh[6]==$canditate29){
				$count29+=12;
			}else if($epilogh[6]==$canditate30){
				$count30+=12;
			}else if($epilogh[6]==$canditate31){
				$count31+=12;
			}else if($epilogh[6]==$canditate32){
				$count32+=12;
			}else if($epilogh[6]==$canditate33){
				$count33+=12;
			}else if($epilogh[6]==$canditate34){
				$count34+=12;
			}else if($epilogh[6]==$canditate35){
				$count35+=12;
			}else if($epilogh[6]==$canditate36){
				$count36+=12;
			}else if($epilogh[6]==$canditate37){
				$count37+=12;	
			}else if($epilogh[6]==$canditate38){
				$count38+=12;	
			}else if($epilogh[6]==$canditate39){
				$count39+=12;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=11;
			}else if($epilogh[7]==$canditate22){
				$count22+=11;
			}else if($epilogh[7]==$canditate23){
				$count23+=11;
			}else if($epilogh[7]==$canditate24){
				$count24+=11;
			}else if($epilogh[7]==$canditate25){
				$count25+=11;	
			}else if($epilogh[7]==$canditate26){
				$count26+=11;	
			}else if($epilogh[7]==$canditate27){
				$count27+=11;	
			}else if($epilogh[7]==$canditate28){
				$count28+=11;	
			}else if($epilogh[7]==$canditate29){
				$count29+=11;
			}else if($epilogh[7]==$canditate30){
				$count30+=11;
			}else if($epilogh[7]==$canditate31){
				$count31+=11;
			}else if($epilogh[7]==$canditate32){
				$count32+=11;
			}else if($epilogh[7]==$canditate33){
				$count33+=11;
			}else if($epilogh[7]==$canditate34){
				$count34+=11;
			}else if($epilogh[7]==$canditate35){
				$count35+=11;
			}else if($epilogh[7]==$canditate36){
				$count36+=11;
			}else if($epilogh[7]==$canditate37){
				$count37+=11;	
			}else if($epilogh[7]==$canditate38){
				$count38+=11;	
			}else if($epilogh[7]==$canditate39){
				$count39+=11;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=10;
			}else if($epilogh[8]==$canditate22){
				$count22+=10;
			}else if($epilogh[8]==$canditate23){
				$count23+=10;
			}else if($epilogh[8]==$canditate24){
				$count24+=10;
			}else if($epilogh[8]==$canditate25){
				$count25+=10;	
			}else if($epilogh[8]==$canditate26){
				$count26+=10;	
			}else if($epilogh[8]==$canditate27){
				$count27+=10;	
			}else if($epilogh[8]==$canditate28){
				$count28+=10;	
			}else if($epilogh[8]==$canditate29){
				$count29+=10;	
			}else if($epilogh[8]==$canditate30){
				$count30+=10;
			}else if($epilogh[8]==$canditate31){
				$count31+=10;
			}else if($epilogh[8]==$canditate32){
				$count32+=10;
			}else if($epilogh[8]==$canditate33){
				$count33+=10;
			}else if($epilogh[8]==$canditate34){
				$count34+=10;
			}else if($epilogh[8]==$canditate35){
				$count35+=10;
			}else if($epilogh[8]==$canditate36){
				$count36+=10;
			}else if($epilogh[8]==$canditate37){
				$count37+=10;	
			}else if($epilogh[8]==$canditate38){
				$count38+=10;	
			}else if($epilogh[8]==$canditate39){
				$count39+=10;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=9;
			}else if($epilogh[9]==$canditate22){
				$count22+=9;
			}else if($epilogh[9]==$canditate23){
				$count23+=9;
			}else if($epilogh[9]==$canditate24){
				$count24+=9;
			}else if($epilogh[9]==$canditate25){
				$count25+=9;	
			}else if($epilogh[9]==$canditate26){
				$count26+=9;	
			}else if($epilogh[9]==$canditate27){
				$count27+=9;	
			}else if($epilogh[9]==$canditate28){
				$count28+=9;	
			}else if($epilogh[9]==$canditate29){
				$count29+=9;	
			}else if($epilogh[9]==$canditate30){
				$count30+=9;	
			}else if($epilogh[9]==$canditate31){
				$count31+=9;
			}else if($epilogh[9]==$canditate32){
				$count32+=9;
			}else if($epilogh[9]==$canditate33){
				$count33+=9;
			}else if($epilogh[9]==$canditate34){
				$count34+=9;
			}else if($epilogh[9]==$canditate35){
				$count35+=9;
			}else if($epilogh[9]==$canditate36){
				$count36+=9;
			}else if($epilogh[9]==$canditate37){
				$count37+=9;	
			}else if($epilogh[9]==$canditate38){
				$count38+=9;	
			}else if($epilogh[9]==$canditate39){
				$count39+=9;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=8;
			}else if($epilogh[10]==$canditate22){
				$count22+=8;
			}else if($epilogh[10]==$canditate23){
				$count23+=8;
			}else if($epilogh[10]==$canditate24){
				$count24+=8;
			}else if($epilogh[10]==$canditate25){
				$count25+=8;	
			}else if($epilogh[10]==$canditate26){
				$count26+=8;	
			}else if($epilogh[10]==$canditate27){
				$count27+=8;	
			}else if($epilogh[10]==$canditate28){
				$count28+=8;	
			}else if($epilogh[10]==$canditate29){
				$count29+=8;	
			}else if($epilogh[10]==$canditate30){
				$count30+=8;	
			}else if($epilogh[10]==$canditate31){
				$count31+=8;	
			}else if($epilogh[10]==$canditate32){
				$count32+=8;
			}else if($epilogh[10]==$canditate33){
				$count33+=8;
			}else if($epilogh[10]==$canditate34){
				$count34+=8;
			}else if($epilogh[10]==$canditate35){
				$count35+=8;
			}else if($epilogh[10]==$canditate36){
				$count36+=8;
			}else if($epilogh[10]==$canditate37){
				$count37+=8;	
			}else if($epilogh[10]==$canditate38){
				$count38+=8;	
			}else if($epilogh[10]==$canditate39){
				$count39+=8;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=7;
			}else if($epilogh[11]==$canditate22){
				$count22+=7;
			}else if($epilogh[11]==$canditate23){
				$count23+=7;
			}else if($epilogh[11]==$canditate24){
				$count24+=7;
			}else if($epilogh[11]==$canditate25){
				$count25+=7;	
			}else if($epilogh[11]==$canditate26){
				$count26+=7;	
			}else if($epilogh[11]==$canditate27){
				$count27+=7;	
			}else if($epilogh[11]==$canditate28){
				$count28+=7;	
			}else if($epilogh[11]==$canditate29){
				$count29+=7;	
			}else if($epilogh[11]==$canditate30){
				$count30+=7;	
			}else if($epilogh[11]==$canditate31){
				$count31+=7;	
			}else if($epilogh[11]==$canditate32){
				$count32+=7;	
			}else if($epilogh[11]==$canditate33){
				$count33+=7;
			}else if($epilogh[11]==$canditate34){
				$count34+=7;
			}else if($epilogh[11]==$canditate35){
				$count35+=7;
			}else if($epilogh[11]==$canditate36){
				$count36+=7;
			}else if($epilogh[11]==$canditate37){
				$count37+=7;	
			}else if($epilogh[11]==$canditate38){
				$count38+=7;	
			}else if($epilogh[11]==$canditate39){
				$count39+=7;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=6;
			}else if($epilogh[12]==$canditate22){
				$count22+=6;
			}else if($epilogh[12]==$canditate23){
				$count23+=6;
			}else if($epilogh[12]==$canditate24){
				$count24+=6;
			}else if($epilogh[12]==$canditate25){
				$count25+=6;	
			}else if($epilogh[12]==$canditate26){
				$count26+=6;	
			}else if($epilogh[12]==$canditate27){
				$count27+=6;	
			}else if($epilogh[12]==$canditate28){
				$count28+=6;	
			}else if($epilogh[12]==$canditate29){
				$count29+=6;	
			}else if($epilogh[12]==$canditate30){
				$count30+=6;	
			}else if($epilogh[12]==$canditate31){
				$count31+=6;	
			}else if($epilogh[12]==$canditate32){
				$count32+=6;	
			}else if($epilogh[12]==$canditate33){
				$count33+=6;	
			}else if($epilogh[12]==$canditate34){
				$count34+=6;
			}else if($epilogh[12]==$canditate35){
				$count35+=6;
			}else if($epilogh[12]==$canditate36){
				$count36+=6;
			}else if($epilogh[12]==$canditate37){
				$count37+=6;	
			}else if($epilogh[12]==$canditate38){
				$count38+=6;	
			}else if($epilogh[12]==$canditate39){
				$count39+=6;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate21){
				$count21+=5;
			}else if($epilogh[13]==$canditate22){
				$count22+=5;
			}else if($epilogh[13]==$canditate23){
				$count23+=5;
			}else if($epilogh[13]==$canditate24){
				$count24+=5;
			}else if($epilogh[13]==$canditate25){
				$count25+=5;	
			}else if($epilogh[13]==$canditate26){
				$count26+=5;	
			}else if($epilogh[13]==$canditate27){
				$count27+=5;	
			}else if($epilogh[13]==$canditate28){
				$count28+=5;	
			}else if($epilogh[13]==$canditate29){
				$count29+=5;	
			}else if($epilogh[13]==$canditate30){
				$count30+=5;	
			}else if($epilogh[13]==$canditate31){
				$count31+=5;	
			}else if($epilogh[13]==$canditate32){
				$count32+=5;	
			}else if($epilogh[13]==$canditate33){
				$count33+=5;	
			}else if($epilogh[13]==$canditate34){
				$count34+=5;	
			}else if($epilogh[13]==$canditate35){
				$count35+=5;
			}else if($epilogh[13]==$canditate36){
				$count36+=5;
			}else if($epilogh[13]==$canditate37){
				$count37+=5;	
			}else if($epilogh[13]==$canditate38){
				$count38+=5;	
			}else if($epilogh[13]==$canditate39){
				$count39+=5;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate21){
				$count21+=4;
			}else if($epilogh[14]==$canditate22){
				$count22+=4;
			}else if($epilogh[14]==$canditate23){
				$count23+=4;
			}else if($epilogh[14]==$canditate24){
				$count24+=4;
			}else if($epilogh[14]==$canditate25){
				$count25+=4;	
			}else if($epilogh[14]==$canditate26){
				$count26+=4;	
			}else if($epilogh[14]==$canditate27){
				$count27+=4;	
			}else if($epilogh[14]==$canditate28){
				$count28+=4;	
			}else if($epilogh[14]==$canditate29){
				$count29+=4;	
			}else if($epilogh[14]==$canditate30){
				$count30+=4;	
			}else if($epilogh[14]==$canditate31){
				$count31+=4;	
			}else if($epilogh[14]==$canditate32){
				$count32+=4;	
			}else if($epilogh[14]==$canditate33){
				$count33+=4;	
			}else if($epilogh[14]==$canditate34){
				$count34+=4;	
			}else if($epilogh[14]==$canditate35){
				$count35+=4;	
			}else if($epilogh[14]==$canditate36){
				$count36+=4;
			}else if($epilogh[14]==$canditate37){
				$count37+=4;	
			}else if($epilogh[14]==$canditate38){
				$count38+=4;	
			}else if($epilogh[14]==$canditate39){
				$count39+=4;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate21){
				$count21+=3;
			}else if($epilogh[15]==$canditate22){
				$count22+=3;
			}else if($epilogh[15]==$canditate23){
				$count23+=3;
			}else if($epilogh[15]==$canditate24){
				$count24+=3;
			}else if($epilogh[15]==$canditate25){
				$count25+=3;	
			}else if($epilogh[15]==$canditate26){
				$count26+=3;	
			}else if($epilogh[15]==$canditate27){
				$count27+=3;	
			}else if($epilogh[15]==$canditate28){
				$count28+=3;	
			}else if($epilogh[15]==$canditate29){
				$count29+=3;	
			}else if($epilogh[15]==$canditate30){
				$count30+=2;	
			}else if($epilogh[15]==$canditate31){
				$count31+=3;	
			}else if($epilogh[15]==$canditate32){
				$count32+=3;	
			}else if($epilogh[15]==$canditate33){
				$count33+=3;	
			}else if($epilogh[15]==$canditate34){
				$count34+=3;	
			}else if($epilogh[15]==$canditate35){
				$count35+=3;	
			}else if($epilogh[15]==$canditate36){
				$count36+=3;	
			}else if($epilogh[15]==$canditate37){
				$count37+=3;	
			}else if($epilogh[15]==$canditate38){
				$count38+=3;	
			}else if($epilogh[15]==$canditate39){
				$count39+=3;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate21){
				$count21+=2;
			}else if($epilogh[16]==$canditate22){
				$count22+=2;
			}else if($epilogh[16]==$canditate23){
				$count23+=2;
			}else if($epilogh[16]==$canditate24){
				$count24+=2;
			}else if($epilogh[16]==$canditate25){
				$count25+=2;	
			}else if($epilogh[16]==$canditate26){
				$count26+=2;	
			}else if($epilogh[16]==$canditate27){
				$count27+=2;	
			}else if($epilogh[16]==$canditate28){
				$count28+=2;	
			}else if($epilogh[16]==$canditate29){
				$count29+=2;	
			}else if($epilogh[16]==$canditate30){
				$count30+=2;	
			}else if($epilogh[16]==$canditate31){
				$count31+=2;	
			}else if($epilogh[16]==$canditate32){
				$count32+=2;	
			}else if($epilogh[16]==$canditate33){
				$count33+=2;	
			}else if($epilogh[16]==$canditate34){
				$count34+=2;	
			}else if($epilogh[16]==$canditate35){
				$count35+=2;	
			}else if($epilogh[16]==$canditate36){
				$count36+=2;	
			}else if($epilogh[16]==$canditate37){
				$count37+=2;	
			}else if($epilogh[16]==$canditate38){
				$count38+=2;	
			}else if($epilogh[16]==$canditate39){
				$count39+=2;	
			}
		}
		if ($arrlen>=18){	
			if($epilogh[17]==$canditate21){
				$count21+=1;
			}else if($epilogh[17]==$canditate22){
				$count22+=1;
			}else if($epilogh[17]==$canditate23){
				$count23+=1;
			}else if($epilogh[17]==$canditate24){
				$count24+=1;
			}else if($epilogh[17]==$canditate25){
				$count25+=1;	
			}else if($epilogh[17]==$canditate26){
				$count26+=1;	
			}else if($epilogh[17]==$canditate27){
				$count27+=1;	
			}else if($epilogh[17]==$canditate28){
				$count28+=1;	
			}else if($epilogh[17]==$canditate29){
				$count29+=1;	
			}else if($epilogh[17]==$canditate30){
				$count30+=1;	
			}else if($epilogh[17]==$canditate31){
				$count31+=1;	
			}else if($epilogh[17]==$canditate32){
				$count32+=1;	
			}else if($epilogh[17]==$canditate33){
				$count33+=1;	
			}else if($epilogh[17]==$canditate34){
				$count34+=1;	
			}else if($epilogh[17]==$canditate35){
				$count35+=1;	
			}else if($epilogh[17]==$canditate36){
				$count36+=1;	
			}else if($epilogh[17]==$canditate37){
				$count37+=1;	
			}else if($epilogh[17]==$canditate38){
				$count38+=1;	
			}else if($epilogh[17]==$canditate39){
				$count39+=1;	
			}
		}
		if ($arrlen>=19){	
			if($epilogh[18]==$canditate21){
				$count21+=0;
			}else if($epilogh[18]==$canditate22){
				$count22+=0;
			}else if($epilogh[18]==$canditate23){
				$count23+=0;
			}else if($epilogh[18]==$canditate24){
				$count24+=0;
			}else if($epilogh[18]==$canditate25){
				$count25+=0;	
			}else if($epilogh[18]==$canditate26){
				$count26+=0;	
			}else if($epilogh[18]==$canditate27){
				$count27+=0;	
			}else if($epilogh[18]==$canditate28){
				$count28+=0;	
			}else if($epilogh[18]==$canditate29){
				$count29+=0;	
			}else if($epilogh[18]==$canditate30){
				$count30+=0;	
			}else if($epilogh[18]==$canditate31){
				$count31+=0;	
			}else if($epilogh[18]==$canditate32){
				$count32+=0;	
			}else if($epilogh[18]==$canditate33){
				$count33+=0;	
			}else if($epilogh[18]==$canditate34){
				$count34+=0;	
			}else if($epilogh[18]==$canditate35){
				$count35+=0;	
			}else if($epilogh[18]==$canditate36){
				$count36+=0;	
			}else if($epilogh[18]==$canditate37){
				$count37+=0;	
			}else if($epilogh[18]==$canditate38){
				$count38+=0;	
			}else if($epilogh[18]==$canditate39){
				$count39+=0;	
			}
		}
	}
	if ($i2==20){
		if ($arrlen>=1){
			if($epilogh[0]==$canditate21){
				$count21+=19;
			}else if($epilogh[0]==$canditate22){
				$count22+=19;
			}else if($epilogh[0]==$canditate23){
				$count23+=19;
			}else if($epilogh[0]==$canditate24){
				$count24+=19;
			}else if($epilogh[0]==$canditate25){
				$count25+=19;
			}else if($epilogh[0]==$canditate26){
				$count26+=19;
			}else if($epilogh[0]==$canditate27){
				$count27+=19;
			}else if($epilogh[0]==$canditate28){
				$count28+=19;
			}else if($epilogh[0]==$canditate29){
				$count29+=19;
			}else if($epilogh[0]==$canditate30){
				$count30+=19;
			}else if($epilogh[0]==$canditate31){
				$count31+=19;
			}else if($epilogh[0]==$canditate32){
				$count32+=19;
			}else if($epilogh[0]==$canditate33){
				$count33+=19;
			}else if($epilogh[0]==$canditate34){
				$count34+=19;
			}else if($epilogh[0]==$canditate35){
				$count35+=19;
			}else if($epilogh[0]==$canditate36){
				$count36+=19;
			}else if($epilogh[0]==$canditate37){
				$count37+=19;	
			}else if($epilogh[0]==$canditate38){
				$count38+=19;	
			}else if($epilogh[0]==$canditate39){
				$count39+=19;	
			}else if($epilogh[0]==$canditate40){
				$count40+=19;	
			}
		}
		if ($arrlen>=2){
			if($epilogh[1]==$canditate21){
				$count21+=18;
			}else if($epilogh[1]==$canditate22){
				$count22+=18;
			}else if($epilogh[1]==$canditate23){
				$count23+=18;
			}else if($epilogh[1]==$canditate24){
				$count24+=18;
			}else if($epilogh[1]==$canditate25){
				$count25+=18;
			}else if($epilogh[1]==$canditate26){
				$count26+=18;
			}else if($epilogh[1]==$canditate27){
				$count27+=18;
			}else if($epilogh[1]==$canditate28){
				$count28+=18;
			}else if($epilogh[1]==$canditate29){
				$count29+=18;
			}else if($epilogh[1]==$canditate30){
				$count30+=18;
			}else if($epilogh[1]==$canditate31){
				$count31+=18;
			}else if($epilogh[1]==$canditate32){
				$count32+=18;
			}else if($epilogh[1]==$canditate33){
				$count33+=18;
			}else if($epilogh[1]==$canditate34){
				$count34+=18;
			}else if($epilogh[1]==$canditate35){
				$count35+=18;
			}else if($epilogh[1]==$canditate36){
				$count36+=18;
			}else if($epilogh[1]==$canditate37){
				$count37+=18;	
			}else if($epilogh[1]==$canditate38){
				$count38+=18;	
			}else if($epilogh[1]==$canditate39){
				$count39+=18;	
			}else if($epilogh[1]==$canditate40){
				$count40+=18;	
			}
		}
		if ($arrlen>=3){
			if($epilogh[2]==$canditate21){
				$count21+=17;
			}else if($epilogh[2]==$canditate22){
				$count22+=17;
			}else if($epilogh[2]==$canditate23){
				$count23+=17;
			}else if($epilogh[2]==$canditate24){
				$count24+=17;
			}else if($epilogh[2]==$canditate25){
				$count25+=17;
			}else if($epilogh[2]==$canditate26){
				$count26+=17;
			}else if($epilogh[2]==$canditate27){
				$count27+=17;
			}else if($epilogh[2]==$canditate28){
				$count28+=17;
			}else if($epilogh[2]==$canditate29){
				$count29+=17;
			}else if($epilogh[2]==$canditate30){
				$count30+=17;
			}else if($epilogh[2]==$canditate31){
				$count31+=17;
			}else if($epilogh[2]==$canditate32){
				$count32+=17;
			}else if($epilogh[2]==$canditate33){
				$count33+=17;
			}else if($epilogh[2]==$canditate34){
				$count34+=17;
			}else if($epilogh[2]==$canditate35){
				$count35+=17;
			}else if($epilogh[2]==$canditate36){
				$count36+=17;
			}else if($epilogh[2]==$canditate37){
				$count37+=17;	
			}else if($epilogh[2]==$canditate38){
				$count38+=17;	
			}else if($epilogh[2]==$canditate39){
				$count39+=17;	
			}else if($epilogh[2]==$canditate40){
				$count40+=17;	
			}
		}
		if ($arrlen>=4){	
			if($epilogh[3]==$canditate21){
				$count21+=16;
			}else if($epilogh[3]==$canditate22){
				$count22+=16;
			}else if($epilogh[3]==$canditate23){
				$count23+=16;
			}else if($epilogh[3]==$canditate24){
				$count24+=16;
			}else if($epilogh[3]==$canditate25){
				$count25+=16;
			}else if($epilogh[3]==$canditate26){
				$count26+=16;
			}else if($epilogh[3]==$canditate27){
				$count27+=16;
			}else if($epilogh[3]==$canditate28){
				$count28+=16;
			}else if($epilogh[3]==$canditate29){
				$count29+=16;
			}else if($epilogh[3]==$canditate30){
				$count30+=16;
			}else if($epilogh[3]==$canditate31){
				$count31+=16;
			}else if($epilogh[3]==$canditate32){
				$count32+=16;
			}else if($epilogh[3]==$canditate33){
				$count33+=16;
			}else if($epilogh[3]==$canditate34){
				$count34+=16;
			}else if($epilogh[3]==$canditate35){
				$count35+=16;
			}else if($epilogh[3]==$canditate36){
				$count36+=16;
			}else if($epilogh[3]==$canditate37){
				$count37+=16;	
			}else if($epilogh[3]==$canditate38){
				$count38+=16;	
			}else if($epilogh[3]==$canditate39){
				$count39+=16;	
			}else if($epilogh[3]==$canditate40){
				$count40+=16;	
			}
		}
		if ($arrlen>=5){	
			if($epilogh[4]==$canditate21){
				$count21+=15;
			}else if($epilogh[4]==$canditate22){
				$count22+=15;
			}else if($epilogh[4]==$canditate23){
				$count23+=15;
			}else if($epilogh[4]==$canditate24){
				$count24+=15;
			}else if($epilogh[4]==$canditate25){
				$count25+=15;	
			}else if($epilogh[4]==$canditate26){
				$count26+=15;
			}else if($epilogh[4]==$canditate27){
				$count27+=15;
			}else if($epilogh[4]==$canditate28){
				$count28+=15;
			}else if($epilogh[4]==$canditate29){
				$count29+=15;
			}else if($epilogh[4]==$canditate30){
				$count30+=15;
			}else if($epilogh[4]==$canditate31){
				$count31+=15;
			}else if($epilogh[4]==$canditate32){
				$count32+=15;
			}else if($epilogh[4]==$canditate33){
				$count33+=15;
			}else if($epilogh[4]==$canditate34){
				$count34+=15;
			}else if($epilogh[4]==$canditate35){
				$count35+=15;
			}else if($epilogh[4]==$canditate36){
				$count36+=15;
			}else if($epilogh[4]==$canditate37){
				$count37+=15;	
			}else if($epilogh[4]==$canditate38){
				$count38+=15;	
			}else if($epilogh[4]==$canditate39){
				$count39+=15;	
			}else if($epilogh[4]==$canditate40){
				$count40+=15;	
			}
		}
		if ($arrlen>=6){	
			if($epilogh[5]==$canditate21){
				$count21+=14;
			}else if($epilogh[5]==$canditate22){
				$count22+=14;
			}else if($epilogh[5]==$canditate23){
				$count23+=14;
			}else if($epilogh[5]==$canditate24){
				$count24+=14;
			}else if($epilogh[5]==$canditate25){
				$count25+=14;	
			}else if($epilogh[5]==$canditate26){
				$count26+=14;	
			}else if($epilogh[5]==$canditate27){
				$count27+=14;
			}else if($epilogh[5]==$canditate28){
				$count28+=14;
			}else if($epilogh[5]==$canditate29){
				$count29+=14;
			}else if($epilogh[5]==$canditate30){
				$count30+=14;
			}else if($epilogh[5]==$canditate31){
				$count31+=14;
			}else if($epilogh[5]==$canditate32){
				$count32+=14;
			}else if($epilogh[5]==$canditate33){
				$count33+=14;
			}else if($epilogh[5]==$canditate34){
				$count34+=14;
			}else if($epilogh[5]==$canditate35){
				$count35+=14;
			}else if($epilogh[5]==$canditate36){
				$count36+=14;
			}else if($epilogh[5]==$canditate37){
				$count37+=14;	
			}else if($epilogh[5]==$canditate38){
				$count38+=14;	
			}else if($epilogh[5]==$canditate39){
				$count39+=14;	
			}else if($epilogh[5]==$canditate40){
				$count40+=14;	
			}
		}
		if ($arrlen>=7){	
			if($epilogh[6]==$canditate21){
				$count21+=13;
			}else if($epilogh[6]==$canditate22){
				$count22+=13;
			}else if($epilogh[6]==$canditate23){
				$count23+=13;
			}else if($epilogh[6]==$canditate24){
				$count24+=13;
			}else if($epilogh[6]==$canditate25){
				$count25+=13;	
			}else if($epilogh[6]==$canditate26){
				$count26+=13;	
			}else if($epilogh[6]==$canditate27){
				$count27+=13;	
			}else if($epilogh[6]==$canditate28){
				$count28+=13;
			}else if($epilogh[6]==$canditate29){
				$count29+=13;
			}else if($epilogh[6]==$canditate30){
				$count30+=13;
			}else if($epilogh[6]==$canditate31){
				$count31+=13;
			}else if($epilogh[6]==$canditate32){
				$count32+=13;
			}else if($epilogh[6]==$canditate33){
				$count33+=13;
			}else if($epilogh[6]==$canditate34){
				$count34+=13;
			}else if($epilogh[6]==$canditate35){
				$count35+=13;
			}else if($epilogh[6]==$canditate36){
				$count36+=13;
			}else if($epilogh[6]==$canditate37){
				$count37+=13;	
			}else if($epilogh[6]==$canditate38){
				$count38+=13;	
			}else if($epilogh[6]==$canditate39){
				$count39+=13;	
			}else if($epilogh[6]==$canditate40){
				$count40+=13;	
			}
		}
		if ($arrlen>=8){	
			if($epilogh[7]==$canditate21){
				$count21+=12;
			}else if($epilogh[7]==$canditate22){
				$count22+=12;
			}else if($epilogh[7]==$canditate23){
				$count23+=12;
			}else if($epilogh[7]==$canditate24){
				$count24+=12;
			}else if($epilogh[7]==$canditate25){
				$count25+=12;	
			}else if($epilogh[7]==$canditate26){
				$count26+=12;	
			}else if($epilogh[7]==$canditate27){
				$count27+=12;	
			}else if($epilogh[7]==$canditate28){
				$count28+=12;	
			}else if($epilogh[7]==$canditate29){
				$count29+=12;
			}else if($epilogh[7]==$canditate30){
				$count30+=12;
			}else if($epilogh[7]==$canditate31){
				$count31+=12;
			}else if($epilogh[7]==$canditate32){
				$count32+=12;
			}else if($epilogh[7]==$canditate33){
				$count33+=12;
			}else if($epilogh[7]==$canditate34){
				$count34+=12;
			}else if($epilogh[7]==$canditate35){
				$count35+=12;
			}else if($epilogh[7]==$canditate36){
				$count36+=12;
			}else if($epilogh[7]==$canditate37){
				$count37+=12;	
			}else if($epilogh[7]==$canditate38){
				$count38+=12;	
			}else if($epilogh[7]==$canditate39){
				$count39+=12;	
			}else if($epilogh[7]==$canditate40){
				$count40+=12;	
			}
		}
		if ($arrlen>=9){	
			if($epilogh[8]==$canditate21){
				$count21+=11;
			}else if($epilogh[8]==$canditate22){
				$count22+=11;
			}else if($epilogh[8]==$canditate23){
				$count23+=11;
			}else if($epilogh[8]==$canditate24){
				$count24+=11;
			}else if($epilogh[8]==$canditate25){
				$count25+=11;	
			}else if($epilogh[8]==$canditate26){
				$count26+=11;	
			}else if($epilogh[8]==$canditate27){
				$count27+=11;	
			}else if($epilogh[8]==$canditate28){
				$count28+=11;	
			}else if($epilogh[8]==$canditate29){
				$count29+=11;	
			}else if($epilogh[8]==$canditate30){
				$count30+=11;
			}else if($epilogh[8]==$canditate31){
				$count31+=11;
			}else if($epilogh[8]==$canditate32){
				$count32+=11;
			}else if($epilogh[8]==$canditate33){
				$count33+=11;
			}else if($epilogh[8]==$canditate34){
				$count34+=11;
			}else if($epilogh[8]==$canditate35){
				$count35+=11;
			}else if($epilogh[8]==$canditate36){
				$count36+=11;
			}else if($epilogh[8]==$canditate37){
				$count37+=11;	
			}else if($epilogh[8]==$canditate38){
				$count38+=11;	
			}else if($epilogh[8]==$canditate39){
				$count39+=11;	
			}else if($epilogh[8]==$canditate40){
				$count40+=11;	
			}
		}
		if ($arrlen>=10){	
			if($epilogh[9]==$canditate21){
				$count21+=10;
			}else if($epilogh[9]==$canditate22){
				$count22+=10;
			}else if($epilogh[9]==$canditate23){
				$count23+=10;
			}else if($epilogh[9]==$canditate24){
				$count24+=10;
			}else if($epilogh[9]==$canditate25){
				$count25+=10;	
			}else if($epilogh[9]==$canditate26){
				$count26+=10;	
			}else if($epilogh[9]==$canditate27){
				$count27+=10;	
			}else if($epilogh[9]==$canditate28){
				$count28+=10;	
			}else if($epilogh[9]==$canditate29){
				$count29+=10;	
			}else if($epilogh[9]==$canditate30){
				$count30+=10;	
			}else if($epilogh[9]==$canditate31){
				$count31+=10;
			}else if($epilogh[9]==$canditate32){
				$count32+=10;
			}else if($epilogh[9]==$canditate33){
				$count33+=10;
			}else if($epilogh[9]==$canditate34){
				$count34+=10;
			}else if($epilogh[9]==$canditate35){
				$count35+=10;
			}else if($epilogh[9]==$canditate36){
				$count36+=10;
			}else if($epilogh[9]==$canditate37){
				$count37+=10;	
			}else if($epilogh[9]==$canditate38){
				$count38+=10;	
			}else if($epilogh[9]==$canditate39){
				$count39+=10;	
			}else if($epilogh[9]==$canditate40){
				$count40+=10;	
			}
		}
		if ($arrlen>=11){	
			if($epilogh[10]==$canditate21){
				$count21+=9;
			}else if($epilogh[10]==$canditate22){
				$count22+=9;
			}else if($epilogh[10]==$canditate23){
				$count23+=9;
			}else if($epilogh[10]==$canditate24){
				$count24+=9;
			}else if($epilogh[10]==$canditate25){
				$count25+=9;	
			}else if($epilogh[10]==$canditate26){
				$count26+=9;	
			}else if($epilogh[10]==$canditate27){
				$count27+=9;	
			}else if($epilogh[10]==$canditate28){
				$count28+=9;	
			}else if($epilogh[10]==$canditate29){
				$count29+=9;	
			}else if($epilogh[10]==$canditate30){
				$count30+=9;	
			}else if($epilogh[10]==$canditate31){
				$count31+=9;	
			}else if($epilogh[10]==$canditate32){
				$count32+=9;
			}else if($epilogh[10]==$canditate33){
				$count33+=9;
			}else if($epilogh[10]==$canditate34){
				$count34+=9;
			}else if($epilogh[10]==$canditate35){
				$count35+=9;
			}else if($epilogh[10]==$canditate36){
				$count36+=9;
			}else if($epilogh[10]==$canditate37){
				$count37+=9;	
			}else if($epilogh[10]==$canditate38){
				$count38+=9;	
			}else if($epilogh[10]==$canditate39){
				$count39+=9;	
			}else if($epilogh[10]==$canditate40){
				$count40+=9;	
			}
		}
		if ($arrlen>=12){	
			if($epilogh[11]==$canditate21){
				$count21+=8;
			}else if($epilogh[11]==$canditate22){
				$count22+=8;
			}else if($epilogh[11]==$canditate23){
				$count23+=8;
			}else if($epilogh[11]==$canditate24){
				$count24+=8;
			}else if($epilogh[11]==$canditate25){
				$count25+=8;	
			}else if($epilogh[11]==$canditate26){
				$count26+=8;	
			}else if($epilogh[11]==$canditate27){
				$count27+=8;	
			}else if($epilogh[11]==$canditate28){
				$count28+=8;	
			}else if($epilogh[11]==$canditate29){
				$count29+=8;	
			}else if($epilogh[11]==$canditate30){
				$count30+=8;	
			}else if($epilogh[11]==$canditate31){
				$count31+=8;	
			}else if($epilogh[11]==$canditate32){
				$count32+=8;	
			}else if($epilogh[11]==$canditate33){
				$count33+=8;
			}else if($epilogh[11]==$canditate34){
				$count34+=8;
			}else if($epilogh[11]==$canditate35){
				$count35+=8;
			}else if($epilogh[11]==$canditate36){
				$count36+=8;
			}else if($epilogh[11]==$canditate37){
				$count37+=8;	
			}else if($epilogh[11]==$canditate38){
				$count38+=8;	
			}else if($epilogh[11]==$canditate39){
				$count39+=8;	
			}else if($epilogh[11]==$canditate40){
				$count40+=8;	
			}
		}
		if ($arrlen>=13){	
			if($epilogh[12]==$canditate21){
				$count21+=7;
			}else if($epilogh[12]==$canditate22){
				$count22+=7;
			}else if($epilogh[12]==$canditate23){
				$count23+=7;
			}else if($epilogh[12]==$canditate24){
				$count24+=7;
			}else if($epilogh[12]==$canditate25){
				$count25+=7;	
			}else if($epilogh[12]==$canditate26){
				$count26+=7;	
			}else if($epilogh[12]==$canditate27){
				$count27+=7;	
			}else if($epilogh[12]==$canditate28){
				$count28+=7;	
			}else if($epilogh[12]==$canditate29){
				$count29+=7;	
			}else if($epilogh[12]==$canditate30){
				$count30+=7;	
			}else if($epilogh[12]==$canditate31){
				$count31+=7;	
			}else if($epilogh[12]==$canditate32){
				$count32+=7;	
			}else if($epilogh[12]==$canditate33){
				$count33+=7;	
			}else if($epilogh[12]==$canditate34){
				$count34+=7;
			}else if($epilogh[12]==$canditate35){
				$count35+=7;
			}else if($epilogh[12]==$canditate36){
				$count36+=7;
			}else if($epilogh[12]==$canditate37){
				$count37+=7;	
			}else if($epilogh[12]==$canditate38){
				$count38+=7;	
			}else if($epilogh[12]==$canditate39){
				$count39+=7;	
			}else if($epilogh[12]==$canditate40){
				$count40+=7;	
			}
		}
		if ($arrlen>=14){	
			if($epilogh[13]==$canditate21){
				$count21+=6;
			}else if($epilogh[13]==$canditate22){
				$count22+=6;
			}else if($epilogh[13]==$canditate23){
				$count23+=6;
			}else if($epilogh[13]==$canditate24){
				$count24+=6;
			}else if($epilogh[13]==$canditate25){
				$count25+=6;	
			}else if($epilogh[13]==$canditate26){
				$count26+=6;	
			}else if($epilogh[13]==$canditate27){
				$count27+=6;	
			}else if($epilogh[13]==$canditate28){
				$count28+=6;	
			}else if($epilogh[13]==$canditate29){
				$count29+=6;	
			}else if($epilogh[13]==$canditate30){
				$count30+=6;	
			}else if($epilogh[13]==$canditate31){
				$count31+=6;	
			}else if($epilogh[13]==$canditate32){
				$count32+=6;	
			}else if($epilogh[13]==$canditate33){
				$count33+=6;	
			}else if($epilogh[13]==$canditate34){
				$count34+=6;	
			}else if($epilogh[13]==$canditate35){
				$count35+=6;
			}else if($epilogh[13]==$canditate36){
				$count36+=6;
			}else if($epilogh[13]==$canditate37){
				$count37+=6;	
			}else if($epilogh[13]==$canditate38){
				$count38+=6;	
			}else if($epilogh[13]==$canditate39){
				$count39+=6;	
			}else if($epilogh[13]==$canditate40){
				$count40+=6;	
			}
		}
		if ($arrlen>=15){	
			if($epilogh[14]==$canditate21){
				$count21+=5;
			}else if($epilogh[14]==$canditate22){
				$count22+=5;
			}else if($epilogh[14]==$canditate23){
				$count23+=5;
			}else if($epilogh[14]==$canditate24){
				$count24+=5;
			}else if($epilogh[14]==$canditate25){
				$count25+=5;	
			}else if($epilogh[14]==$canditate26){
				$count26+=5;	
			}else if($epilogh[14]==$canditate27){
				$count27+=5;	
			}else if($epilogh[14]==$canditate28){
				$count28+=5;	
			}else if($epilogh[14]==$canditate29){
				$count29+=5;	
			}else if($epilogh[14]==$canditate30){
				$count30+=5;	
			}else if($epilogh[14]==$canditate31){
				$count31+=5;	
			}else if($epilogh[14]==$canditate32){
				$count32+=5;	
			}else if($epilogh[14]==$canditate33){
				$count33+=5;	
			}else if($epilogh[14]==$canditate34){
				$count34+=5;	
			}else if($epilogh[14]==$canditate35){
				$count35+=5;	
			}else if($epilogh[14]==$canditate36){
				$count36+=5;
			}else if($epilogh[14]==$canditate37){
				$count37+=5;	
			}else if($epilogh[14]==$canditate38){
				$count38+=5;	
			}else if($epilogh[14]==$canditate39){
				$count39+=5;	
			}else if($epilogh[14]==$canditate40){
				$count40+=5;	
			}
		}
		if ($arrlen>=16){	
			if($epilogh[15]==$canditate21){
				$count21+=4;
			}else if($epilogh[15]==$canditate22){
				$count22+=4;
			}else if($epilogh[15]==$canditate23){
				$count23+=4;
			}else if($epilogh[15]==$canditate24){
				$count24+=4;
			}else if($epilogh[15]==$canditate25){
				$count25+=4;	
			}else if($epilogh[15]==$canditate26){
				$count26+=4;	
			}else if($epilogh[15]==$canditate27){
				$count27+=4;	
			}else if($epilogh[15]==$canditate28){
				$count28+=4;	
			}else if($epilogh[15]==$canditate29){
				$count29+=4;	
			}else if($epilogh[15]==$canditate30){
				$count30+=4;	
			}else if($epilogh[15]==$canditate31){
				$count31+=4;	
			}else if($epilogh[15]==$canditate32){
				$count32+=4;	
			}else if($epilogh[15]==$canditate33){
				$count33+=4;	
			}else if($epilogh[15]==$canditate34){
				$count34+=4;	
			}else if($epilogh[15]==$canditate35){
				$count35+=4;	
			}else if($epilogh[15]==$canditate36){
				$count36+=4;	
			}else if($epilogh[15]==$canditate37){
				$count37+=4;	
			}else if($epilogh[15]==$canditate38){
				$count38+=4;	
			}else if($epilogh[15]==$canditate39){
				$count39+=4;	
			}else if($epilogh[15]==$canditate20){
				$count40+=4;	
			}
		}
		if ($arrlen>=17){	
			if($epilogh[16]==$canditate21){
				$count21+=3;
			}else if($epilogh[16]==$canditate22){
				$count22+=3;
			}else if($epilogh[16]==$canditate23){
				$count23+=3;
			}else if($epilogh[16]==$canditate24){
				$count24+=3;
			}else if($epilogh[16]==$canditate25){
				$count25+=3;	
			}else if($epilogh[16]==$canditate26){
				$count26+=3;	
			}else if($epilogh[16]==$canditate27){
				$count27+=3;	
			}else if($epilogh[16]==$canditate28){
				$count28+=3;	
			}else if($epilogh[16]==$canditate29){
				$count29+=3;	
			}else if($epilogh[16]==$canditate30){
				$count30+=3;	
			}else if($epilogh[16]==$canditate31){
				$count31+=3;	
			}else if($epilogh[16]==$canditate32){
				$count32+=3;	
			}else if($epilogh[16]==$canditate33){
				$count33+=3;	
			}else if($epilogh[16]==$canditate34){
				$count34+=3;	
			}else if($epilogh[16]==$canditate35){
				$count35+=3;	
			}else if($epilogh[16]==$canditate36){
				$count36+=3;	
			}else if($epilogh[16]==$canditate37){
				$count37+=3;	
			}else if($epilogh[16]==$canditate38){
				$count38+=3;	
			}else if($epilogh[16]==$canditate39){
				$count39+=3;	
			}else if($epilogh[16]==$canditate40){
				$count40+=3;	
			}
		}
		if ($arrlen>=18){	
			if($epilogh[17]==$canditate21){
				$count21+=2;
			}else if($epilogh[17]==$canditate22){
				$count22+=2;
			}else if($epilogh[17]==$canditate23){
				$count23+=2;
			}else if($epilogh[17]==$canditate24){
				$count24+=2;
			}else if($epilogh[17]==$canditate25){
				$count25+=2;	
			}else if($epilogh[17]==$canditate26){
				$count26+=2;	
			}else if($epilogh[17]==$canditate27){
				$count27+=2;	
			}else if($epilogh[17]==$canditate28){
				$count28+=2;	
			}else if($epilogh[17]==$canditate29){
				$count29+=2;	
			}else if($epilogh[17]==$canditate30){
				$count30+=2;	
			}else if($epilogh[17]==$canditate31){
				$count31+=2;	
			}else if($epilogh[17]==$canditate32){
				$count32+=2;	
			}else if($epilogh[17]==$canditate33){
				$count33+=2;	
			}else if($epilogh[17]==$canditate34){
				$count34+=2;	
			}else if($epilogh[17]==$canditate35){
				$count35+=2;	
			}else if($epilogh[17]==$canditate36){
				$count36+=2;	
			}else if($epilogh[17]==$canditate37){
				$count37+=2;	
			}else if($epilogh[17]==$canditate38){
				$count38+=2;	
			}else if($epilogh[17]==$canditate39){
				$count39+=2;	
			}else if($epilogh[17]==$canditate40){
				$count40+=2;	
			}
		}
		if ($arrlen>=19){	
			if($epilogh[18]==$canditate21){
				$count21+=1;
			}else if($epilogh[18]==$canditate22){
				$count22+=1;
			}else if($epilogh[18]==$canditate23){
				$count23+=1;
			}else if($epilogh[18]==$canditate24){
				$count24+=1;
			}else if($epilogh[18]==$canditate25){
				$count25+=1;	
			}else if($epilogh[18]==$canditate26){
				$count26+=1;	
			}else if($epilogh[18]==$canditate27){
				$count27+=1;	
			}else if($epilogh[18]==$canditate28){
				$count28+=1;	
			}else if($epilogh[18]==$canditate29){
				$count29+=1;	
			}else if($epilogh[18]==$canditate30){
				$count30+=1;	
			}else if($epilogh[18]==$canditate31){
				$count31+=1;	
			}else if($epilogh[18]==$canditate32){
				$count32+=1;	
			}else if($epilogh[18]==$canditate33){
				$count33+=1;	
			}else if($epilogh[18]==$canditate34){
				$count34+=1;	
			}else if($epilogh[18]==$canditate35){
				$count35+=1;	
			}else if($epilogh[18]==$canditate36){
				$count36+=1;	
			}else if($epilogh[18]==$canditate37){
				$count37+=1;	
			}else if($epilogh[18]==$canditate38){
				$count38+=1;	
			}else if($epilogh[18]==$canditate39){
				$count39+=1;	
			}else if($epilogh[18]==$canditate40){
				$count40+=1;	
			}
		}
		if ($arrlen>=20){	
			if($epilogh[19]==$canditate21){
				$count21+=0;
			}else if($epilogh[19]==$canditate22){
				$count22+=0;
			}else if($epilogh[19]==$canditate23){
				$count23+=0;
			}else if($epilogh[19]==$canditate24){
				$count24+=0;
			}else if($epilogh[19]==$canditate25){
				$count25+=0;	
			}else if($epilogh[19]==$canditate26){
				$count26+=0;	
			}else if($epilogh[19]==$canditate27){
				$count27+=0;	
			}else if($epilogh[19]==$canditate28){
				$count28+=0;	
			}else if($epilogh[19]==$canditate29){
				$count29+=0;	
			}else if($epilogh[19]==$canditate30){
				$count30+=0;	
			}else if($epilogh[19]==$canditate31){
				$count31+=0;	
			}else if($epilogh[19]==$canditate32){
				$count32+=0;	
			}else if($epilogh[19]==$canditate33){
				$count33+=0;	
			}else if($epilogh[19]==$canditate34){
				$count34+=0;	
			}else if($epilogh[19]==$canditate35){
				$count35+=0;	
			}else if($epilogh[19]==$canditate36){
				$count36+=0;	
			}else if($epilogh[19]==$canditate37){
				$count37+=0;	
			}else if($epilogh[19]==$canditate38){
				$count38+=0;	
			}else if($epilogh[19]==$canditate39){
				$count39+=0;	
			}else if($epilogh[19]==$canditate40){
				$count40+=0;	
			}
		}
	}
	$query="UPDATE ballot SET count1='{$count21}', count2='{$count22}', count3='{$count23}', count4='{$count24}', count5='{$count25}', count6='{$count26}', count7='{$count27}', count8='{$count28}', count9='{$count29}', count10='{$count30}', count11='{$count31}', count12='{$count32}', count13='{$count33}', count14='{$count34}', count15='{$count35}', count16='{$count36}', count17='{$count37}', count18='{$count38}', count19='{$count39}', count20='{$count40}' WHERE name='$name1[1]' ";
	$sql=mysqli_query($connection, $query);
	
	header('Location: ballot.php');
	}
		
	if ($count>=3){
		$array=mysqli_query($connection,"SELECT canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20 FROM ballot WHERE name='$name1[2]'");
			while ($row=mysqli_fetch_array($array)){
				$canditate41=$row['canditate1'];
				$count41=$row['count1'];
				$canditate42=$row['canditate2'];
				$count42=$row['count2'];
				$canditate43=$row['canditate3'];
				$count43=$row['count3'];
				$canditate44=$row['canditate4'];
				$count44=$row['count4'];
				$canditate45=$row['canditate5'];
				$count45=$row['count5'];
				$canditate46=$row['canditate6'];
				$count46=$row['count6'];
				$canditate47=$row['canditate7'];
				$count47=$row['count7'];
				$canditate48=$row['canditate8'];
				$count48=$row['count8'];
				$canditate49=$row['canditate9'];
				$count49=$row['count9'];
				$canditate50=$row['canditate10'];
				$count50=$row['count10'];
				$canditate51=$row['canditate11'];
				$count51=$row['count11'];
				$canditate52=$row['canditate12'];
				$count52=$row['count12'];
				$canditate53=$row['canditate13'];
				$count53=$row['count13'];
				$canditate54=$row['canditate14'];
				$count54=$row['count14'];
				$canditate55=$row['canditate15'];
				$count55=$row['count15'];
				$canditate56=$row['canditate16'];
				$count56=$row['count16'];
				$canditate57=$row['canditate17'];
				$count57=$row['count17'];
				$canditate58=$row['canditate19'];
				$count58=$row['count18'];
				$canditate59=$row['canditate19'];
				$count59=$row['count19'];
				$canditate60=$row['canditate20'];
				$count60=$row['count20'];
			}
	
	if ($arrlen>=1){
		if($epilogh[0]==$canditate41){
			$count41+=19;
		}else if($epilogh[0]==$canditate42){
			$count42+=19;
		}else if($epilogh[0]==$canditate43){
			$count43+=19;
		}else if($epilogh[0]==$canditate44){
			$count44+=19;
		}else if($epilogh[0]==$canditate45){
			$count45+=19;
		}else if($epilogh[0]==$canditate46){
			$count46+=19;
		}else if($epilogh[0]==$canditate47){
			$count47+=19;
		}else if($epilogh[0]==$canditate48){
			$count48+=19;
		}else if($epilogh[0]==$canditate49){
			$count49+=19;
		}else if($epilogh[0]==$canditate50){
			$count50+=19;
		}else if($epilogh[0]==$canditate51){
			$count51+=19;
		}else if($epilogh[0]==$canditate52){
			$count52+=19;
		}else if($epilogh[0]==$canditate53){
			$count53+=19;
		}else if($epilogh[0]==$canditate54){
			$count54+=19;
		}else if($epilogh[0]==$canditate55){
			$count55+=19;
		}else if($epilogh[0]==$canditate56){
			$count56+=19;
		}else if($epilogh[0]==$canditate57){
			$count57+=19;
		}else if($epilogh[0]==$canditate58){
			$count58+=19;
		}else if($epilogh[0]==$canditate59){
			$count59+=19;
		}else if($epilogh[0]==$canditate60){
			$count60+=19;
		}
	}
	
	if ($arrlen>=2){
		if($epilogh[1]==$canditate41){
			$count41+=18;
		}else if($epilogh[1]==$canditate42){
			$count42+=18;
		}else if($epilogh[1]==$canditate43){
			$count43+=18;
		}else if($epilogh[1]==$canditate44){
			$count44+=18;
		}else if($epilogh[1]==$canditate45){
			$count45+=18;	
		}else if($epilogh[1]==$canditate46){
			$count46+=18;	
		}else if($epilogh[1]==$canditate47){
			$count47+=18;	
		}else if($epilogh[1]==$canditate48){
			$count48+=18;	
		}else if($epilogh[1]==$canditate49){
			$count49+=18;	
		}else if($epilogh[1]==$canditate50){
			$count50+=18;	
		}else if($epilogh[1]==$canditate51){
			$count51+=18;	
		}else if($epilogh[1]==$canditate52){
			$count52+=18;	
		}else if($epilogh[1]==$canditate53){
			$count53+=18;	
		}else if($epilogh[1]==$canditate54){
			$count54+=18;	
		}else if($epilogh[1]==$canditate55){
			$count55+=18;	
		}else if($epilogh[1]==$canditate56){
			$count56+=18;	
		}else if($epilogh[1]==$canditate57){
			$count57+=18;	
		}else if($epilogh[1]==$canditate58){
			$count58+=18;	
		}else if($epilogh[1]==$canditate59){
			$count59+=18;	
		}else if($epilogh[1]==$canditate60){
			$count60+=18;	
		}
	}
	
	if ($arrlen>=3){
		if($epilogh[2]==$canditate41){
			$count41+=17;
		}else if($epilogh[2]==$canditate42){
			$count42+=17;
		}else if($epilogh[2]==$canditate43){
			$count43+=17;
		}else if($epilogh[2]==$canditate44){
			$count44+=17;
		}else if($epilogh[2]==$canditate45){
			$count45+=17;	
		}else if($epilogh[2]==$canditate46){
			$count46+=17;	
		}else if($epilogh[2]==$canditate47){
			$count47+=17;	
		}else if($epilogh[2]==$canditate48){
			$count48+=17;	
		}else if($epilogh[2]==$canditate49){
			$count49+=17;	
		}else if($epilogh[2]==$canditate50){
			$count50+=17;	
		}else if($epilogh[2]==$canditate51){
			$count51+=17;	
		}else if($epilogh[2]==$canditate52){
			$count52+=17;	
		}else if($epilogh[2]==$canditate53){
			$count53+=17;	
		}else if($epilogh[2]==$canditate54){
			$count54+=17;	
		}else if($epilogh[2]==$canditate55){
			$count55+=17;	
		}else if($epilogh[2]==$canditate56){
			$count56+=17;	
		}else if($epilogh[2]==$canditate57){
			$count57+=17;	
		}else if($epilogh[2]==$canditate58){
			$count58+=17;	
		}else if($epilogh[2]==$canditate59){
			$count59+=17;	
		}else if($epilogh[2]==$canditate60){
			$count60+=17;	
		}
	}
		
	if ($arrlen>=4){	
		if($epilogh[3]==$canditate41){
			$count41+=16;
		}else if($epilogh[3]==$canditate42){
			$count42+=16;
		}else if($epilogh[3]==$canditate43){
			$count43+=16;
		}else if($epilogh[3]==$canditate44){
			$count44+=16;
		}else if($epilogh[3]==$canditate45){
			$count45+=16;	
		}else if($epilogh[3]==$canditate46){
			$count46+=16;	
		}else if($epilogh[3]==$canditate47){
			$count47+=16;	
		}else if($epilogh[3]==$canditate48){
			$count48+=16;	
		}else if($epilogh[3]==$canditate49){
			$count49+=16;	
		}else if($epilogh[3]==$canditate50){
			$count50+=16;	
		}else if($epilogh[3]==$canditate51){
			$count51+=16;	
		}else if($epilogh[3]==$canditate52){
			$count52+=16;	
		}else if($epilogh[3]==$canditate53){
			$count53+=16;	
		}else if($epilogh[3]==$canditate54){
			$count54+=16;	
		}else if($epilogh[3]==$canditate55){
			$count55+=16;	
		}else if($epilogh[3]==$canditate56){
			$count56+=16;	
		}else if($epilogh[3]==$canditate57){
			$count57+=16;	
		}else if($epilogh[3]==$canditate58){
			$count58+=16;	
		}else if($epilogh[3]==$canditate59){
			$count59+=16;	
		}else if($epilogh[3]==$canditate60){
			$count60+=16;	
		}
	}
	
	if ($arrlen>=5){	
		if($epilogh[4]==$canditate41){
			$count41+=15;
		}else if($epilogh[4]==$canditate42){
			$count42+=15;
		}else if($epilogh[4]==$canditate43){
			$count43+=15;
		}else if($epilogh[4]==$canditate44){
			$count44+=15;
		}else if($epilogh[4]==$canditate45){
			$count45+=15;	
		}else if($epilogh[4]==$canditate46){
			$count46+=15;	
		}else if($epilogh[4]==$canditate47){
			$count47+=15;	
		}else if($epilogh[4]==$canditate48){
			$count48+=15;	
		}else if($epilogh[4]==$canditate49){
			$count49+=15;	
		}else if($epilogh[4]==$canditate50){
			$count50+=15;	
		}else if($epilogh[4]==$canditate51){
			$count51+=15;	
		}else if($epilogh[4]==$canditate52){
			$count52+=15;	
		}else if($epilogh[4]==$canditate53){
			$count53+=15;	
		}else if($epilogh[4]==$canditate54){
			$count54+=15;	
		}else if($epilogh[4]==$canditate55){
			$count55+=15;	
		}else if($epilogh[4]==$canditate56){
			$count56+=15;	
		}else if($epilogh[4]==$canditate57){
			$count57+=15;	
		}else if($epilogh[4]==$canditate58){
			$count58+=15;	
		}else if($epilogh[4]==$canditate59){
			$count59+=15;	
		}else if($epilogh[4]==$canditate60){
			$count60+=15;	
		}
	}
	
	if ($arrlen>=6){	
		if($epilogh[5]==$canditate41){
			$count41+=14;
		}else if($epilogh[5]==$canditate42){
			$count42+=14;
		}else if($epilogh[5]==$canditate43){
			$count43+=14;
		}else if($epilogh[5]==$canditate44){
			$count44+=14;
		}else if($epilogh[5]==$canditate45){
			$count45+=14;	
		}else if($epilogh[5]==$canditate46){
			$count46+=14;	
		}else if($epilogh[5]==$canditate47){
			$count47+=14;	
		}else if($epilogh[5]==$canditate48){
			$count48+=14;	
		}else if($epilogh[5]==$canditate49){
			$count49+=14;	
		}else if($epilogh[5]==$canditate50){
			$count50+=14;	
		}else if($epilogh[5]==$canditate51){
			$count51+=14;	
		}else if($epilogh[5]==$canditate52){
			$count52+=14;	
		}else if($epilogh[5]==$canditate53){
			$count53+=14;	
		}else if($epilogh[5]==$canditate54){
			$count54+=14;	
		}else if($epilogh[5]==$canditate55){
			$count55+=14;	
		}else if($epilogh[5]==$canditate56){
			$count56+=14;	
		}else if($epilogh[5]==$canditate57){
			$count57+=14;	
		}else if($epilogh[5]==$canditate58){
			$count58+=14;	
		}else if($epilogh[5]==$canditate59){
			$count59+=14;	
		}else if($epilogh[5]==$canditate60){
			$count60+=14;	
		}
	}
	
	if ($arrlen>=7){	
		if($epilogh[6]==$canditate41){
			$count41+=13;
		}else if($epilogh[6]==$canditate42){
			$count42+=13;
		}else if($epilogh[6]==$canditate43){
			$count43+=13;
		}else if($epilogh[6]==$canditate44){
			$count44+=13;
		}else if($epilogh[6]==$canditate45){
			$count45+=13;	
		}else if($epilogh[6]==$canditate46){
			$count46+=13;	
		}else if($epilogh[6]==$canditate47){
			$count47+=13;	
		}else if($epilogh[6]==$canditate48){
			$count48+=13;	
		}else if($epilogh[6]==$canditate49){
			$count49+=13;	
		}else if($epilogh[6]==$canditate50){
			$count50+=13;	
		}else if($epilogh[6]==$canditate51){
			$count51+=13;	
		}else if($epilogh[6]==$canditate52){
			$count52+=13;	
		}else if($epilogh[6]==$canditate53){
			$count53+=13;	
		}else if($epilogh[6]==$canditate54){
			$count54+=13;	
		}else if($epilogh[6]==$canditate55){
			$count55+=13;	
		}else if($epilogh[6]==$canditate56){
			$count56+=13;	
		}else if($epilogh[6]==$canditate57){
			$count57+=13;	
		}else if($epilogh[6]==$canditate58){
			$count58+=13;	
		}else if($epilogh[6]==$canditate59){
			$count59+=13;	
		}else if($epilogh[6]==$canditate60){
			$count60+=13;	
		}
	}
	
	if ($arrlen>=8){	
		if($epilogh[7]==$canditate41){
			$count41+=12;
		}else if($epilogh[7]==$canditate42){
			$count42+=12;
		}else if($epilogh[7]==$canditate43){
			$count43+=12;
		}else if($epilogh[7]==$canditate44){
			$count44+=12;
		}else if($epilogh[7]==$canditate45){
			$count45+=12;	
		}else if($epilogh[7]==$canditate46){
			$count46+=12;	
		}else if($epilogh[7]==$canditate47){
			$count47+=12;	
		}else if($epilogh[7]==$canditate48){
			$count48+=12;	
		}else if($epilogh[7]==$canditate49){
			$count49+=12;	
		}else if($epilogh[7]==$canditate50){
			$count50+=12;	
		}else if($epilogh[7]==$canditate51){
			$count51+=12;	
		}else if($epilogh[7]==$canditate52){
			$count52+=12;	
		}else if($epilogh[7]==$canditate53){
			$count53+=12;	
		}else if($epilogh[7]==$canditate54){
			$count54+=12;	
		}else if($epilogh[7]==$canditate55){
			$count55+=12;	
		}else if($epilogh[7]==$canditate56){
			$count56+=12;	
		}else if($epilogh[7]==$canditate57){
			$count57+=12;	
		}else if($epilogh[7]==$canditate58){
			$count58+=12;	
		}else if($epilogh[7]==$canditate59){
			$count59+=12;	
		}else if($epilogh[7]==$canditate60){
			$count60+=12;	
		}
	}
	
	if ($arrlen>=9){	
		if($epilogh[8]==$canditate41){
			$count41+=11;
		}else if($epilogh[8]==$canditate42){
			$count42+=11;
		}else if($epilogh[8]==$canditate43){
			$count43+=11;
		}else if($epilogh[8]==$canditate44){
			$count44+=11;
		}else if($epilogh[8]==$canditate45){
			$count45+=11;	
		}else if($epilogh[8]==$canditate46){
			$count46+=11;	
		}else if($epilogh[8]==$canditate47){
			$count47+=11;	
		}else if($epilogh[8]==$canditate48){
			$count48+=11;	
		}else if($epilogh[8]==$canditate49){
			$count49+=11;	
		}else if($epilogh[8]==$canditate50){
			$count50+=11;	
		}else if($epilogh[8]==$canditate51){
			$count51+=11;	
		}else if($epilogh[8]==$canditate52){
			$count52+=11;	
		}else if($epilogh[8]==$canditate53){
			$count53+=11;	
		}else if($epilogh[8]==$canditate54){
			$count54+=11;	
		}else if($epilogh[8]==$canditate55){
			$count55+=11;	
		}else if($epilogh[8]==$canditate56){
			$count56+=11;	
		}else if($epilogh[8]==$canditate57){
			$count57+=11;	
		}else if($epilogh[8]==$canditate58){
			$count58+=11;	
		}else if($epilogh[8]==$canditate59){
			$count59+=11;	
		}else if($epilogh[8]==$canditate60){
			$count60+=11;	
		}
	}
	
	if ($arrlen>=10){	
		if($epilogh[9]==$canditate41){
			$count41+=10;
		}else if($epilogh[9]==$canditate42){
			$count42+=10;
		}else if($epilogh[9]==$canditate43){
			$count43+=10;
		}else if($epilogh[9]==$canditate44){
			$count44+=10;
		}else if($epilogh[9]==$canditate45){
			$count45+=10;	
		}else if($epilogh[9]==$canditate46){
			$count46+=10;	
		}else if($epilogh[9]==$canditate47){
			$count47+=10;	
		}else if($epilogh[9]==$canditate48){
			$count48+=10;	
		}else if($epilogh[9]==$canditate49){
			$count49+=10;	
		}else if($epilogh[9]==$canditate50){
			$count50+=10;	
		}else if($epilogh[9]==$canditate51){
			$count51+=10;	
		}else if($epilogh[9]==$canditate52){
			$count52+=10;	
		}else if($epilogh[9]==$canditate53){
			$count53+=10;	
		}else if($epilogh[9]==$canditate54){
			$count54+=10;	
		}else if($epilogh[9]==$canditate55){
			$count55+=10;	
		}else if($epilogh[9]==$canditate56){
			$count56+=10;	
		}else if($epilogh[9]==$canditate57){
			$count57+=10;	
		}else if($epilogh[9]==$canditate58){
			$count58+=10;	
		}else if($epilogh[9]==$canditate59){
			$count59+=10;	
		}else if($epilogh[9]==$canditate60){
			$count60+=10;	
		}
	}
	
	if ($arrlen>=11){	
		if($epilogh[10]==$canditate41){
			$count41+=9;
		}else if($epilogh[10]==$canditate42){
			$count42+=9;
		}else if($epilogh[10]==$canditate43){
			$count43+=9;
		}else if($epilogh[10]==$canditate44){
			$count44+=9;
		}else if($epilogh[10]==$canditate45){
			$count45+=9;	
		}else if($epilogh[10]==$canditate46){
			$count46+=9;	
		}else if($epilogh[10]==$canditate47){
			$count47+=9;	
		}else if($epilogh[10]==$canditate48){
			$count48+=9;	
		}else if($epilogh[10]==$canditate49){
			$count49+=9;	
		}else if($epilogh[10]==$canditate50){
			$count50+=9;	
		}else if($epilogh[10]==$canditate51){
			$count51+=9;	
		}else if($epilogh[10]==$canditate52){
			$count52+=9;	
		}else if($epilogh[10]==$canditate53){
			$count53+=9;	
		}else if($epilogh[10]==$canditate54){
			$count54+=9;	
		}else if($epilogh[10]==$canditate55){
			$count55+=9;	
		}else if($epilogh[10]==$canditate56){
			$count56+=9;	
		}else if($epilogh[10]==$canditate57){
			$count57+=9;	
		}else if($epilogh[10]==$canditate58){
			$count58+=9;	
		}else if($epilogh[10]==$canditate59){
			$count59+=9;	
		}else if($epilogh[10]==$canditate60){
			$count60+=9;	
		}
	}
	
	if ($arrlen>=12){	
		if($epilogh[11]==$canditate41){
			$count41+=8;
		}else if($epilogh[11]==$canditate42){
			$count42+=8;
		}else if($epilogh[11]==$canditate43){
			$count43+=8;
		}else if($epilogh[11]==$canditate44){
			$count44+=8;
		}else if($epilogh[11]==$canditate45){
			$count45+=8;	
		}else if($epilogh[11]==$canditate46){
			$count46+=8;	
		}else if($epilogh[11]==$canditate47){
			$count47+=8;	
		}else if($epilogh[11]==$canditate48){
			$count48+=8;	
		}else if($epilogh[11]==$canditate49){
			$count49+=8;	
		}else if($epilogh[11]==$canditate50){
			$count50+=8;	
		}else if($epilogh[11]==$canditate51){
			$count51+=8;	
		}else if($epilogh[11]==$canditate52){
			$count52+=8;	
		}else if($epilogh[11]==$canditate53){
			$count53+=8;	
		}else if($epilogh[11]==$canditate54){
			$count54+=8;	
		}else if($epilogh[11]==$canditate55){
			$count55+=8;	
		}else if($epilogh[11]==$canditate56){
			$count56+=8;	
		}else if($epilogh[11]==$canditate57){
			$count57+=8;	
		}else if($epilogh[11]==$canditate58){
			$count58+=8;	
		}else if($epilogh[11]==$canditate59){
			$count59+=8;	
		}else if($epilogh[11]==$canditate60){
			$count60+=8;	
		}
	}
	
	if ($arrlen>=13){	
		if($epilogh[12]==$canditate41){
			$count41+=7;
		}else if($epilogh[12]==$canditate42){
			$count42+=7;
		}else if($epilogh[12]==$canditate43){
			$count43+=7;
		}else if($epilogh[12]==$canditate44){
			$count44+=7;
		}else if($epilogh[12]==$canditate45){
			$count45+=7;	
		}else if($epilogh[12]==$canditate46){
			$count46+=7;	
		}else if($epilogh[12]==$canditate47){
			$count47+=7;	
		}else if($epilogh[12]==$canditate48){
			$count48+=7;	
		}else if($epilogh[12]==$canditate49){
			$count49+=7;	
		}else if($epilogh[12]==$canditate50){
			$count50+=7;	
		}else if($epilogh[12]==$canditate51){
			$count51+=7;	
		}else if($epilogh[12]==$canditate52){
			$count52+=7;	
		}else if($epilogh[12]==$canditate53){
			$count53+=7;	
		}else if($epilogh[12]==$canditate54){
			$count54+=7;	
		}else if($epilogh[12]==$canditate55){
			$count55+=7;	
		}else if($epilogh[12]==$canditate56){
			$count56+=7;	
		}else if($epilogh[12]==$canditate57){
			$count57+=7;	
		}else if($epilogh[12]==$canditate58){
			$count58+=7;	
		}else if($epilogh[12]==$canditate59){
			$count59+=7;	
		}else if($epilogh[12]==$canditate60){
			$count60+=7;	
		}
	}
	
	if ($arrlen>=14){	
		if($epilogh[13]==$canditate41){
			$count41+=6;
		}else if($epilogh[13]==$canditate42){
			$count42+=6;
		}else if($epilogh[13]==$canditate43){
			$count43+=6;
		}else if($epilogh[13]==$canditate44){
			$count44+=6;
		}else if($epilogh[13]==$canditate45){
			$count45+=6;	
		}else if($epilogh[13]==$canditate46){
			$count46+=6;	
		}else if($epilogh[13]==$canditate47){
			$count47+=6;	
		}else if($epilogh[13]==$canditate48){
			$count48+=6;	
		}else if($epilogh[13]==$canditate49){
			$count49+=6;	
		}else if($epilogh[13]==$canditate50){
			$count50+=6;	
		}else if($epilogh[13]==$canditate51){
			$count51+=6;	
		}else if($epilogh[13]==$canditate52){
			$count52+=6;	
		}else if($epilogh[13]==$canditate53){
			$count53+=6;	
		}else if($epilogh[13]==$canditate54){
			$count54+=6;	
		}else if($epilogh[13]==$canditate55){
			$count55+=6;	
		}else if($epilogh[13]==$canditate56){
			$count56+=6;	
		}else if($epilogh[13]==$canditate57){
			$count57+=6;	
		}else if($epilogh[13]==$canditate58){
			$count58+=6;	
		}else if($epilogh[13]==$canditate59){
			$count59+=6;	
		}else if($epilogh[13]==$canditate60){
			$count60+=6;	
		}
	}
	
	if ($arrlen>=15){	
		if($epilogh[14]==$canditate41){
			$count41+=5;
		}else if($epilogh[14]==$canditate42){
			$count42+=5;
		}else if($epilogh[14]==$canditate43){
			$count43+=5;
		}else if($epilogh[14]==$canditate44){
			$count44+=5;
		}else if($epilogh[14]==$canditate45){
			$count45+=5;	
		}else if($epilogh[14]==$canditate46){
			$count46+=5;	
		}else if($epilogh[14]==$canditate47){
			$count47+=5;	
		}else if($epilogh[14]==$canditate48){
			$count48+=5;	
		}else if($epilogh[14]==$canditate49){
			$count49+=5;	
		}else if($epilogh[14]==$canditate50){
			$count50+=5;	
		}else if($epilogh[14]==$canditate51){
			$count51+=5;	
		}else if($epilogh[14]==$canditate52){
			$count52+=5;	
		}else if($epilogh[14]==$canditate53){
			$count53+=5;	
		}else if($epilogh[14]==$canditate54){
			$count54+=5;	
		}else if($epilogh[14]==$canditate55){
			$count55+=5;	
		}else if($epilogh[14]==$canditate56){
			$count56+=5;	
		}else if($epilogh[14]==$canditate57){
			$count57+=5;	
		}else if($epilogh[14]==$canditate58){
			$count58+=5;	
		}else if($epilogh[14]==$canditate59){
			$count59+=5;	
		}else if($epilogh[14]==$canditate60){
			$count60+=5;	
		}
	}
	
	if ($arrlen>=18){	
		if($epilogh[15]==$canditate41){
			$count41+=4;
		}else if($epilogh[15]==$canditate42){
			$count42+=4;
		}else if($epilogh[15]==$canditate43){
			$count43+=4;
		}else if($epilogh[15]==$canditate44){
			$count44+=4;
		}else if($epilogh[15]==$canditate45){
			$count45+=4;	
		}else if($epilogh[15]==$canditate46){
			$count46+=4;	
		}else if($epilogh[15]==$canditate47){
			$count47+=4;	
		}else if($epilogh[15]==$canditate48){
			$count48+=4;	
		}else if($epilogh[15]==$canditate49){
			$count49+=4;	
		}else if($epilogh[15]==$canditate50){
			$count50+=4;	
		}else if($epilogh[15]==$canditate51){
			$count51+=4;	
		}else if($epilogh[15]==$canditate52){
			$count52+=4;	
		}else if($epilogh[15]==$canditate53){
			$count53+=4;	
		}else if($epilogh[15]==$canditate54){
			$count54+=4;	
		}else if($epilogh[15]==$canditate55){
			$count55+=4;	
		}else if($epilogh[15]==$canditate56){
			$count56+=4;	
		}else if($epilogh[15]==$canditate57){
			$count57+=4;	
		}else if($epilogh[15]==$canditate58){
			$count58+=4;	
		}else if($epilogh[15]==$canditate59){
			$count59+=4;	
		}else if($epilogh[15]==$canditate60){
			$count60+=4;	
		}
	}
	
	if ($arrlen>=17){	
		if($epilogh[16]==$canditate41){
			$count41+=3;
		}else if($epilogh[16]==$canditate42){
			$count42+=3;
		}else if($epilogh[16]==$canditate43){
			$count43+=3;
		}else if($epilogh[16]==$canditate44){
			$count44+=3;
		}else if($epilogh[16]==$canditate45){
			$count45+=3;	
		}else if($epilogh[16]==$canditate46){
			$count46+=3;	
		}else if($epilogh[16]==$canditate47){
			$count47+=3;	
		}else if($epilogh[16]==$canditate48){
			$count48+=3;	
		}else if($epilogh[16]==$canditate49){
			$count49+=3;	
		}else if($epilogh[16]==$canditate50){
			$count50+=3;	
		}else if($epilogh[16]==$canditate51){
			$count51+=3;	
		}else if($epilogh[16]==$canditate52){
			$count52+=3;	
		}else if($epilogh[16]==$canditate53){
			$count53+=3;	
		}else if($epilogh[16]==$canditate54){
			$count54+=3;	
		}else if($epilogh[16]==$canditate55){
			$count55+=3;	
		}else if($epilogh[16]==$canditate56){
			$count56+=3;	
		}else if($epilogh[16]==$canditate57){
			$count57+=3;	
		}else if($epilogh[16]==$canditate58){
			$count58+=3;	
		}else if($epilogh[16]==$canditate59){
			$count59+=3;	
		}else if($epilogh[16]==$canditate60){
			$count60+=3;	
		}
	}
	
	if ($arrlen>=18){	
		if($epilogh[17]==$canditate41){
			$count41+=2;
		}else if($epilogh[17]==$canditate42){
			$count42+=2;
		}else if($epilogh[17]==$canditate43){
			$count43+=2;
		}else if($epilogh[17]==$canditate44){
			$count44+=2;
		}else if($epilogh[17]==$canditate45){
			$count45+=2;	
		}else if($epilogh[17]==$canditate46){
			$count46+=2;	
		}else if($epilogh[17]==$canditate47){
			$count47+=2;	
		}else if($epilogh[17]==$canditate48){
			$count48+=2;	
		}else if($epilogh[17]==$canditate49){
			$count49+=2;	
		}else if($epilogh[17]==$canditate50){
			$count50+=2;	
		}else if($epilogh[17]==$canditate51){
			$count51+=2;	
		}else if($epilogh[17]==$canditate52){
			$count52+=2;	
		}else if($epilogh[17]==$canditate53){
			$count53+=2;	
		}else if($epilogh[17]==$canditate54){
			$count54+=2;	
		}else if($epilogh[17]==$canditate55){
			$count55+=2;	
		}else if($epilogh[17]==$canditate56){
			$count56+=2;	
		}else if($epilogh[17]==$canditate57){
			$count57+=2;	
		}else if($epilogh[17]==$canditate58){
			$count58+=2;	
		}else if($epilogh[17]==$canditate59){
			$count59+=2;	
		}else if($epilogh[17]==$canditate60){
			$count60+=2;	
		}
	}
	
	if ($arrlen>=19){	
		if($epilogh[18]==$canditate41){
			$count41+=1;
		}else if($epilogh[18]==$canditate42){
			$count42+=1;
		}else if($epilogh[18]==$canditate43){
			$count43+=1;
		}else if($epilogh[18]==$canditate44){
			$count44+=1;
		}else if($epilogh[18]==$canditate45){
			$count45+=1;	
		}else if($epilogh[18]==$canditate46){
			$count46+=1;	
		}else if($epilogh[18]==$canditate47){
			$count47+=1;	
		}else if($epilogh[18]==$canditate48){
			$count48+=1;	
		}else if($epilogh[18]==$canditate49){
			$count49+=1;	
		}else if($epilogh[18]==$canditate50){
			$count50+=1;	
		}else if($epilogh[18]==$canditate51){
			$count51+=1;	
		}else if($epilogh[18]==$canditate52){
			$count52+=1;	
		}else if($epilogh[18]==$canditate53){
			$count53+=1;	
		}else if($epilogh[18]==$canditate54){
			$count54+=1;	
		}else if($epilogh[18]==$canditate55){
			$count55+=1;	
		}else if($epilogh[18]==$canditate56){
			$count56+=1;	
		}else if($epilogh[18]==$canditate57){
			$count57+=1;	
		}else if($epilogh[18]==$canditate58){
			$count58+=1;	
		}else if($epilogh[18]==$canditate59){
			$count59+=1;	
		}else if($epilogh[18]==$canditate60){
			$count60+=1;	
		}
	}
	
	if ($arrlen>=20){	
		if($epilogh[19]==$canditate41){
			$count41+=0;
		}else if($epilogh[19]==$canditate42){
			$count42+=0;
		}else if($epilogh[19]==$canditate43){
			$count43+=0;
		}else if($epilogh[19]==$canditate44){
			$count44+=0;
		}else if($epilogh[19]==$canditate45){
			$count45+=0;	
		}else if($epilogh[19]==$canditate46){
			$count46+=0;	
		}else if($epilogh[19]==$canditate47){
			$count47+=0;	
		}else if($epilogh[19]==$canditate48){
			$count48+=0;	
		}else if($epilogh[19]==$canditate49){
			$count49+=0;	
		}else if($epilogh[19]==$canditate50){
			$count50+=0;	
		}else if($epilogh[19]==$canditate51){
			$count51+=0;	
		}else if($epilogh[19]==$canditate52){
			$count52+=0;	
		}else if($epilogh[19]==$canditate53){
			$count53+=0;	
		}else if($epilogh[19]==$canditate54){
			$count54+=0;	
		}else if($epilogh[19]==$canditate55){
			$count55+=0;	
		}else if($epilogh[19]==$canditate56){
			$count56+=0;	
		}else if($epilogh[19]==$canditate57){
			$count57+=0;	
		}else if($epilogh[19]==$canditate58){
			$count58+=0;	
		}else if($epilogh[19]==$canditate59){
			$count59+=0;	
		}else if($epilogh[19]==$canditate60){
			$count60+=0;	
		}
	}
	$query="UPDATE ballot SET count1='{$count41}', count2='{$count42}', count3='{$count43}', count4='{$count44}', count5='{$count45}', count6='{$count46}', count7='{$count47}', count8='{$count48}', count9='{$count49}', count10='{$count50}', count11='{$count51}', count12='{$count52}', count13='{$count53}', count14='{$count54}', count15='{$count55}', count16='{$count56}', count17='{$count57}', count18='{$count58}', count19='{$count59}', count20='{$count60}' WHERE name='$name1[2]' ";
	$sql=mysqli_query($connection, $query);
	
	header('Location: ballot.php');
	}
	
	if ($count>=4){
		$array=mysqli_query($connection,"SELECT canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20 FROM ballot WHERE name='$name1[3]'");
			while ($row=mysqli_fetch_array($array)){
				$canditate61=$row['canditate1'];
				$count61=$row['count1'];
				$canditate62=$row['canditate2'];
				$count62=$row['count2'];
				$canditate63=$row['canditate3'];
				$count63=$row['count3'];
				$canditate64=$row['canditate4'];
				$count64=$row['count4'];
				$canditate65=$row['canditate5'];
				$count65=$row['count5'];
				$canditate66=$row['canditate6'];
				$count66=$row['count6'];
				$canditate67=$row['canditate7'];
				$count67=$row['count7'];
				$canditate68=$row['canditate8'];
				$count68=$row['count8'];
				$canditate69=$row['canditate9'];
				$count69=$row['count9'];
				$canditate70=$row['canditate10'];
				$count70=$row['count10'];
				$canditate71=$row['canditate11'];
				$count71=$row['count11'];
				$canditate72=$row['canditate12'];
				$count72=$row['count12'];
				$canditate73=$row['canditate13'];
				$count73=$row['count13'];
				$canditate74=$row['canditate14'];
				$count74=$row['count14'];
				$canditate75=$row['canditate15'];
				$count75=$row['count15'];
				$canditate76=$row['canditate16'];
				$count76=$row['count16'];
				$canditate77=$row['canditate17'];
				$count77=$row['count17'];
				$canditate78=$row['canditate19'];
				$count78=$row['count18'];
				$canditate79=$row['canditate19'];
				$count79=$row['count19'];
				$canditate80=$row['canditate20'];
				$count80=$row['count20'];
			}
	
	if ($arrlen>=1){
		if($epilogh[0]==$canditate61){
			$count61+=19;
		}else if($epilogh[0]==$canditate62){
			$count62+=19;
		}else if($epilogh[0]==$canditate63){
			$count63+=19;
		}else if($epilogh[0]==$canditate64){
			$count64+=19;
		}else if($epilogh[0]==$canditate65){
			$count65+=19;
		}else if($epilogh[0]==$canditate66){
			$count66+=19;
		}else if($epilogh[0]==$canditate67){
			$count67+=19;
		}else if($epilogh[0]==$canditate68){
			$count68+=19;
		}else if($epilogh[0]==$canditate69){
			$count69+=19;
		}else if($epilogh[0]==$canditate70){
			$count70+=19;
		}else if($epilogh[0]==$canditate71){
			$count71+=19;
		}else if($epilogh[0]==$canditate72){
			$count72+=19;
		}else if($epilogh[0]==$canditate73){
			$count73+=19;
		}else if($epilogh[0]==$canditate74){
			$count74+=19;
		}else if($epilogh[0]==$canditate75){
			$count75+=19;
		}else if($epilogh[0]==$canditate76){
			$count76+=19;
		}else if($epilogh[0]==$canditate77){
			$count77+=19;
		}else if($epilogh[0]==$canditate78){
			$count78+=19;
		}else if($epilogh[0]==$canditate79){
			$count79+=19;
		}else if($epilogh[0]==$canditate80){
			$count80+=19;
		}
	}
	
	if ($arrlen>=2){
		if($epilogh[1]==$canditate61){
			$count61+=18;
		}else if($epilogh[1]==$canditate62){
			$count62+=18;
		}else if($epilogh[1]==$canditate63){
			$count63+=18;
		}else if($epilogh[1]==$canditate64){
			$count64+=18;
		}else if($epilogh[1]==$canditate65){
			$count65+=18;	
		}else if($epilogh[1]==$canditate66){
			$count66+=18;	
		}else if($epilogh[1]==$canditate67){
			$count67+=18;	
		}else if($epilogh[1]==$canditate68){
			$count68+=18;	
		}else if($epilogh[1]==$canditate69){
			$count69+=18;	
		}else if($epilogh[1]==$canditate70){
			$count70+=18;	
		}else if($epilogh[1]==$canditate71){
			$count71+=18;	
		}else if($epilogh[1]==$canditate72){
			$count72+=18;	
		}else if($epilogh[1]==$canditate73){
			$count73+=18;	
		}else if($epilogh[1]==$canditate74){
			$count74+=18;	
		}else if($epilogh[1]==$canditate75){
			$count75+=18;	
		}else if($epilogh[1]==$canditate76){
			$count76+=18;	
		}else if($epilogh[1]==$canditate77){
			$count77+=18;	
		}else if($epilogh[1]==$canditate78){
			$count78+=18;	
		}else if($epilogh[1]==$canditate79){
			$count79+=18;	
		}else if($epilogh[1]==$canditate80){
			$count80+=18;	
		}
	}
	
	if ($arrlen>=3){
		if($epilogh[2]==$canditate61){
			$count61+=17;
		}else if($epilogh[2]==$canditate62){
			$count62+=17;
		}else if($epilogh[2]==$canditate63){
			$count63+=17;
		}else if($epilogh[2]==$canditate64){
			$count64+=17;
		}else if($epilogh[2]==$canditate65){
			$count65+=17;	
		}else if($epilogh[2]==$canditate66){
			$count66+=17;	
		}else if($epilogh[2]==$canditate67){
			$count67+=17;	
		}else if($epilogh[2]==$canditate68){
			$count68+=17;	
		}else if($epilogh[2]==$canditate69){
			$count69+=17;	
		}else if($epilogh[2]==$canditate70){
			$count70+=17;	
		}else if($epilogh[2]==$canditate71){
			$count71+=17;	
		}else if($epilogh[2]==$canditate72){
			$count72+=17;	
		}else if($epilogh[2]==$canditate73){
			$count73+=17;	
		}else if($epilogh[2]==$canditate74){
			$count74+=17;	
		}else if($epilogh[2]==$canditate75){
			$count75+=17;	
		}else if($epilogh[2]==$canditate76){
			$count76+=17;	
		}else if($epilogh[2]==$canditate77){
			$count77+=17;	
		}else if($epilogh[2]==$canditate78){
			$count78+=17;	
		}else if($epilogh[2]==$canditate79){
			$count79+=17;	
		}else if($epilogh[2]==$canditate80){
			$count80+=17;	
		}
	}
		
	if ($arrlen>=4){	
		if($epilogh[3]==$canditate61){
			$count61+=16;
		}else if($epilogh[3]==$canditate62){
			$count62+=16;
		}else if($epilogh[3]==$canditate63){
			$count63+=16;
		}else if($epilogh[3]==$canditate64){
			$count64+=16;
		}else if($epilogh[3]==$canditate65){
			$count65+=16;	
		}else if($epilogh[3]==$canditate66){
			$count66+=16;	
		}else if($epilogh[3]==$canditate67){
			$count67+=16;	
		}else if($epilogh[3]==$canditate68){
			$count68+=16;	
		}else if($epilogh[3]==$canditate69){
			$count69+=16;	
		}else if($epilogh[3]==$canditate70){
			$count70+=16;	
		}else if($epilogh[3]==$canditate71){
			$count71+=16;	
		}else if($epilogh[3]==$canditate72){
			$count72+=16;	
		}else if($epilogh[3]==$canditate73){
			$count73+=16;	
		}else if($epilogh[3]==$canditate74){
			$count74+=16;	
		}else if($epilogh[3]==$canditate75){
			$count75+=16;	
		}else if($epilogh[3]==$canditate76){
			$count76+=16;	
		}else if($epilogh[3]==$canditate77){
			$count77+=16;	
		}else if($epilogh[3]==$canditate78){
			$count78+=16;	
		}else if($epilogh[3]==$canditate79){
			$count79+=16;	
		}else if($epilogh[3]==$canditate80){
			$count80+=16;	
		}
	}
	
	if ($arrlen>=5){	
		if($epilogh[4]==$canditate61){
			$count61+=15;
		}else if($epilogh[4]==$canditate62){
			$count62+=15;
		}else if($epilogh[4]==$canditate63){
			$count63+=15;
		}else if($epilogh[4]==$canditate64){
			$count64+=15;
		}else if($epilogh[4]==$canditate65){
			$count65+=15;	
		}else if($epilogh[4]==$canditate66){
			$count66+=15;	
		}else if($epilogh[4]==$canditate67){
			$count67+=15;	
		}else if($epilogh[4]==$canditate68){
			$count68+=15;	
		}else if($epilogh[4]==$canditate69){
			$count69+=15;	
		}else if($epilogh[4]==$canditate70){
			$count70+=15;	
		}else if($epilogh[4]==$canditate71){
			$count71+=15;	
		}else if($epilogh[4]==$canditate72){
			$count72+=15;	
		}else if($epilogh[4]==$canditate73){
			$count73+=15;	
		}else if($epilogh[4]==$canditate74){
			$count74+=15;	
		}else if($epilogh[4]==$canditate75){
			$count75+=15;	
		}else if($epilogh[4]==$canditate76){
			$count76+=15;	
		}else if($epilogh[4]==$canditate77){
			$count77+=15;	
		}else if($epilogh[4]==$canditate78){
			$count78+=15;	
		}else if($epilogh[4]==$canditate79){
			$count79+=15;	
		}else if($epilogh[4]==$canditate80){
			$count80+=15;	
		}
	}
	
	if ($arrlen>=6){	
		if($epilogh[5]==$canditate61){
			$count61+=14;
		}else if($epilogh[5]==$canditate62){
			$count62+=14;
		}else if($epilogh[5]==$canditate63){
			$count63+=14;
		}else if($epilogh[5]==$canditate64){
			$count64+=14;
		}else if($epilogh[5]==$canditate65){
			$count65+=14;	
		}else if($epilogh[5]==$canditate66){
			$count66+=14;	
		}else if($epilogh[5]==$canditate67){
			$count67+=14;	
		}else if($epilogh[5]==$canditate68){
			$count68+=14;	
		}else if($epilogh[5]==$canditate69){
			$count69+=14;	
		}else if($epilogh[5]==$canditate70){
			$count70+=14;	
		}else if($epilogh[5]==$canditate71){
			$count71+=14;	
		}else if($epilogh[5]==$canditate72){
			$count72+=14;	
		}else if($epilogh[5]==$canditate73){
			$count73+=14;	
		}else if($epilogh[5]==$canditate74){
			$count74+=14;	
		}else if($epilogh[5]==$canditate75){
			$count75+=14;	
		}else if($epilogh[5]==$canditate76){
			$count76+=14;	
		}else if($epilogh[5]==$canditate77){
			$count77+=14;	
		}else if($epilogh[5]==$canditate78){
			$count78+=14;	
		}else if($epilogh[5]==$canditate79){
			$count79+=14;	
		}else if($epilogh[5]==$canditate80){
			$count80+=14;	
		}
	}
	
	if ($arrlen>=7){	
		if($epilogh[6]==$canditate61){
			$count61+=13;
		}else if($epilogh[6]==$canditate62){
			$count62+=13;
		}else if($epilogh[6]==$canditate63){
			$count63+=13;
		}else if($epilogh[6]==$canditate64){
			$count64+=13;
		}else if($epilogh[6]==$canditate65){
			$count65+=13;	
		}else if($epilogh[6]==$canditate66){
			$count66+=13;	
		}else if($epilogh[6]==$canditate67){
			$count67+=13;	
		}else if($epilogh[6]==$canditate68){
			$count68+=13;	
		}else if($epilogh[6]==$canditate69){
			$count69+=13;	
		}else if($epilogh[6]==$canditate70){
			$count70+=13;	
		}else if($epilogh[6]==$canditate71){
			$count71+=13;	
		}else if($epilogh[6]==$canditate72){
			$count72+=13;	
		}else if($epilogh[6]==$canditate73){
			$count73+=13;	
		}else if($epilogh[6]==$canditate74){
			$count74+=13;	
		}else if($epilogh[6]==$canditate75){
			$count75+=13;	
		}else if($epilogh[6]==$canditate76){
			$count76+=13;	
		}else if($epilogh[6]==$canditate77){
			$count77+=13;	
		}else if($epilogh[6]==$canditate78){
			$count78+=13;	
		}else if($epilogh[6]==$canditate79){
			$count79+=13;	
		}else if($epilogh[6]==$canditate80){
			$count80+=13;	
		}
	}
	
	if ($arrlen>=8){	
		if($epilogh[7]==$canditate61){
			$count61+=12;
		}else if($epilogh[7]==$canditate62){
			$count62+=12;
		}else if($epilogh[7]==$canditate63){
			$count63+=12;
		}else if($epilogh[7]==$canditate64){
			$count64+=12;
		}else if($epilogh[7]==$canditate65){
			$count65+=12;	
		}else if($epilogh[7]==$canditate66){
			$count66+=12;	
		}else if($epilogh[7]==$canditate67){
			$count67+=12;	
		}else if($epilogh[7]==$canditate68){
			$count68+=12;	
		}else if($epilogh[7]==$canditate69){
			$count69+=12;	
		}else if($epilogh[7]==$canditate70){
			$count70+=12;	
		}else if($epilogh[7]==$canditate71){
			$count71+=12;	
		}else if($epilogh[7]==$canditate72){
			$count72+=12;	
		}else if($epilogh[7]==$canditate73){
			$count73+=12;	
		}else if($epilogh[7]==$canditate74){
			$count74+=12;	
		}else if($epilogh[7]==$canditate75){
			$count75+=12;	
		}else if($epilogh[7]==$canditate76){
			$count76+=12;	
		}else if($epilogh[7]==$canditate77){
			$count77+=12;	
		}else if($epilogh[7]==$canditate78){
			$count78+=12;	
		}else if($epilogh[7]==$canditate79){
			$count79+=12;	
		}else if($epilogh[7]==$canditate80){
			$count80+=12;	
		}
	}
	
	if ($arrlen>=9){	
		if($epilogh[8]==$canditate61){
			$count61+=11;
		}else if($epilogh[8]==$canditate62){
			$count62+=11;
		}else if($epilogh[8]==$canditate63){
			$count63+=11;
		}else if($epilogh[8]==$canditate64){
			$count64+=11;
		}else if($epilogh[8]==$canditate65){
			$count65+=11;	
		}else if($epilogh[8]==$canditate66){
			$count66+=11;	
		}else if($epilogh[8]==$canditate67){
			$count67+=11;	
		}else if($epilogh[8]==$canditate68){
			$count68+=11;	
		}else if($epilogh[8]==$canditate69){
			$count69+=11;	
		}else if($epilogh[8]==$canditate70){
			$count70+=11;	
		}else if($epilogh[8]==$canditate71){
			$count71+=11;	
		}else if($epilogh[8]==$canditate72){
			$count72+=11;	
		}else if($epilogh[8]==$canditate73){
			$count73+=11;	
		}else if($epilogh[8]==$canditate74){
			$count74+=11;	
		}else if($epilogh[8]==$canditate75){
			$count75+=11;	
		}else if($epilogh[8]==$canditate76){
			$count76+=11;	
		}else if($epilogh[8]==$canditate77){
			$count77+=11;	
		}else if($epilogh[8]==$canditate78){
			$count78+=11;	
		}else if($epilogh[8]==$canditate79){
			$count79+=11;	
		}else if($epilogh[8]==$canditate80){
			$count80+=11;	
		}
	}
	
	if ($arrlen>=10){	
		if($epilogh[9]==$canditate61){
			$count61+=10;
		}else if($epilogh[9]==$canditate62){
			$count62+=10;
		}else if($epilogh[9]==$canditate63){
			$count63+=10;
		}else if($epilogh[9]==$canditate64){
			$count64+=10;
		}else if($epilogh[9]==$canditate65){
			$count65+=10;	
		}else if($epilogh[9]==$canditate66){
			$count66+=10;	
		}else if($epilogh[9]==$canditate67){
			$count67+=10;	
		}else if($epilogh[9]==$canditate68){
			$count68+=10;	
		}else if($epilogh[9]==$canditate69){
			$count69+=10;	
		}else if($epilogh[9]==$canditate70){
			$count70+=10;	
		}else if($epilogh[9]==$canditate71){
			$count71+=10;	
		}else if($epilogh[9]==$canditate72){
			$count72+=10;	
		}else if($epilogh[9]==$canditate73){
			$count73+=10;	
		}else if($epilogh[9]==$canditate74){
			$count74+=10;	
		}else if($epilogh[9]==$canditate75){
			$count75+=10;	
		}else if($epilogh[9]==$canditate76){
			$count76+=10;	
		}else if($epilogh[9]==$canditate77){
			$count77+=10;	
		}else if($epilogh[9]==$canditate78){
			$count78+=10;	
		}else if($epilogh[9]==$canditate79){
			$count79+=10;	
		}else if($epilogh[9]==$canditate80){
			$count80+=10;	
		}
	}
	
	if ($arrlen>=11){	
		if($epilogh[10]==$canditate61){
			$count61+=9;
		}else if($epilogh[10]==$canditate62){
			$count62+=9;
		}else if($epilogh[10]==$canditate63){
			$count63+=9;
		}else if($epilogh[10]==$canditate64){
			$count64+=9;
		}else if($epilogh[10]==$canditate65){
			$count65+=9;	
		}else if($epilogh[10]==$canditate66){
			$count66+=9;	
		}else if($epilogh[10]==$canditate67){
			$count67+=9;	
		}else if($epilogh[10]==$canditate68){
			$count68+=9;	
		}else if($epilogh[10]==$canditate69){
			$count69+=9;	
		}else if($epilogh[10]==$canditate70){
			$count70+=9;	
		}else if($epilogh[10]==$canditate71){
			$count71+=9;	
		}else if($epilogh[10]==$canditate72){
			$count72+=9;	
		}else if($epilogh[10]==$canditate73){
			$count73+=9;	
		}else if($epilogh[10]==$canditate74){
			$count74+=9;	
		}else if($epilogh[10]==$canditate75){
			$count75+=9;	
		}else if($epilogh[10]==$canditate76){
			$count76+=9;	
		}else if($epilogh[10]==$canditate77){
			$count77+=9;	
		}else if($epilogh[10]==$canditate78){
			$count78+=9;	
		}else if($epilogh[10]==$canditate79){
			$count79+=9;	
		}else if($epilogh[10]==$canditate80){
			$count80+=9;	
		}
	}
	
	if ($arrlen>=12){	
		if($epilogh[11]==$canditate61){
			$count61+=8;
		}else if($epilogh[11]==$canditate62){
			$count62+=8;
		}else if($epilogh[11]==$canditate63){
			$count63+=8;
		}else if($epilogh[11]==$canditate64){
			$count64+=8;
		}else if($epilogh[11]==$canditate65){
			$count65+=8;	
		}else if($epilogh[11]==$canditate66){
			$count66+=8;	
		}else if($epilogh[11]==$canditate67){
			$count67+=8;	
		}else if($epilogh[11]==$canditate68){
			$count68+=8;	
		}else if($epilogh[11]==$canditate69){
			$count69+=8;	
		}else if($epilogh[11]==$canditate70){
			$count70+=8;	
		}else if($epilogh[11]==$canditate71){
			$count71+=8;	
		}else if($epilogh[11]==$canditate72){
			$count72+=8;	
		}else if($epilogh[11]==$canditate73){
			$count73+=8;	
		}else if($epilogh[11]==$canditate74){
			$count74+=8;	
		}else if($epilogh[11]==$canditate75){
			$count75+=8;	
		}else if($epilogh[11]==$canditate76){
			$count76+=8;	
		}else if($epilogh[11]==$canditate77){
			$count77+=8;	
		}else if($epilogh[11]==$canditate78){
			$count78+=8;	
		}else if($epilogh[11]==$canditate79){
			$count79+=8;	
		}else if($epilogh[11]==$canditate80){
			$count80+=8;	
		}
	}
	
	if ($arrlen>=13){	
		if($epilogh[12]==$canditate61){
			$count61+=7;
		}else if($epilogh[12]==$canditate62){
			$count62+=7;
		}else if($epilogh[12]==$canditate63){
			$count63+=7;
		}else if($epilogh[12]==$canditate64){
			$count64+=7;
		}else if($epilogh[12]==$canditate65){
			$count65+=7;	
		}else if($epilogh[12]==$canditate66){
			$count66+=7;	
		}else if($epilogh[12]==$canditate67){
			$count67+=7;	
		}else if($epilogh[12]==$canditate68){
			$count68+=7;	
		}else if($epilogh[12]==$canditate69){
			$count69+=7;	
		}else if($epilogh[12]==$canditate70){
			$count70+=7;	
		}else if($epilogh[12]==$canditate71){
			$count71+=7;	
		}else if($epilogh[12]==$canditate72){
			$count72+=7;	
		}else if($epilogh[12]==$canditate73){
			$count73+=7;	
		}else if($epilogh[12]==$canditate74){
			$count74+=7;	
		}else if($epilogh[12]==$canditate75){
			$count75+=7;	
		}else if($epilogh[12]==$canditate76){
			$count76+=7;	
		}else if($epilogh[12]==$canditate77){
			$count77+=7;	
		}else if($epilogh[12]==$canditate78){
			$count78+=7;	
		}else if($epilogh[12]==$canditate79){
			$count79+=7;	
		}else if($epilogh[12]==$canditate80){
			$count80+=7;	
		}
	}

	if ($arrlen>=14){	
		if($epilogh[13]==$canditate61){
			$count61+=6;
		}else if($epilogh[13]==$canditate62){
			$count62+=6;
		}else if($epilogh[13]==$canditate63){
			$count63+=6;
		}else if($epilogh[13]==$canditate64){
			$count64+=6;
		}else if($epilogh[13]==$canditate65){
			$count65+=6;	
		}else if($epilogh[13]==$canditate66){
			$count66+=6;	
		}else if($epilogh[13]==$canditate67){
			$count67+=6;	
		}else if($epilogh[13]==$canditate68){
			$count68+=6;	
		}else if($epilogh[13]==$canditate69){
			$count69+=6;	
		}else if($epilogh[13]==$canditate70){
			$count70+=6;	
		}else if($epilogh[13]==$canditate71){
			$count71+=6;	
		}else if($epilogh[13]==$canditate72){
			$count72+=6;	
		}else if($epilogh[13]==$canditate73){
			$count73+=6;	
		}else if($epilogh[13]==$canditate74){
			$count74+=6;	
		}else if($epilogh[13]==$canditate75){
			$count75+=6;	
		}else if($epilogh[13]==$canditate76){
			$count76+=6;	
		}else if($epilogh[13]==$canditate77){
			$count77+=6;	
		}else if($epilogh[13]==$canditate78){
			$count78+=6;	
		}else if($epilogh[13]==$canditate79){
			$count79+=6;	
		}else if($epilogh[13]==$canditate80){
			$count80+=6;	
		}
	}
	
	if ($arrlen>=15){	
		if($epilogh[14]==$canditate61){
			$count61+=5;
		}else if($epilogh[14]==$canditate62){
			$count62+=5;
		}else if($epilogh[14]==$canditate63){
			$count63+=5;
		}else if($epilogh[14]==$canditate64){
			$count64+=5;
		}else if($epilogh[14]==$canditate65){
			$count65+=5;	
		}else if($epilogh[14]==$canditate66){
			$count66+=5;	
		}else if($epilogh[14]==$canditate67){
			$count67+=5;	
		}else if($epilogh[14]==$canditate68){
			$count68+=5;	
		}else if($epilogh[14]==$canditate69){
			$count69+=5;	
		}else if($epilogh[14]==$canditate70){
			$count70+=5;	
		}else if($epilogh[14]==$canditate71){
			$count71+=5;	
		}else if($epilogh[14]==$canditate72){
			$count72+=5;	
		}else if($epilogh[14]==$canditate73){
			$count73+=5;	
		}else if($epilogh[14]==$canditate74){
			$count74+=5;	
		}else if($epilogh[14]==$canditate75){
			$count75+=5;	
		}else if($epilogh[14]==$canditate76){
			$count76+=5;	
		}else if($epilogh[14]==$canditate77){
			$count77+=5;	
		}else if($epilogh[14]==$canditate78){
			$count78+=5;	
		}else if($epilogh[14]==$canditate79){
			$count79+=5;	
		}else if($epilogh[14]==$canditate80){
			$count80+=5;	
		}
	}
	
	if ($arrlen>=18){	
		if($epilogh[15]==$canditate61){
			$count61+=4;
		}else if($epilogh[15]==$canditate62){
			$count62+=4;
		}else if($epilogh[15]==$canditate63){
			$count63+=4;
		}else if($epilogh[15]==$canditate64){
			$count64+=4;
		}else if($epilogh[15]==$canditate65){
			$count65+=4;	
		}else if($epilogh[15]==$canditate66){
			$count66+=4;	
		}else if($epilogh[15]==$canditate67){
			$count67+=4;	
		}else if($epilogh[15]==$canditate68){
			$count68+=4;	
		}else if($epilogh[15]==$canditate69){
			$count69+=4;	
		}else if($epilogh[15]==$canditate70){
			$count70+=4;	
		}else if($epilogh[15]==$canditate71){
			$count71+=4;	
		}else if($epilogh[15]==$canditate72){
			$count72+=4;	
		}else if($epilogh[15]==$canditate73){
			$count73+=4;	
		}else if($epilogh[15]==$canditate74){
			$count74+=4;	
		}else if($epilogh[15]==$canditate75){
			$count75+=4;	
		}else if($epilogh[15]==$canditate76){
			$count76+=4;	
		}else if($epilogh[15]==$canditate77){
			$count77+=4;	
		}else if($epilogh[15]==$canditate78){
			$count78+=4;	
		}else if($epilogh[15]==$canditate79){
			$count79+=4;	
		}else if($epilogh[15]==$canditate80){
			$count80+=4;	
		}
	}
	
	if ($arrlen>=17){	
		if($epilogh[16]==$canditate61){
			$count61+=3;
		}else if($epilogh[16]==$canditate62){
			$count62+=3;
		}else if($epilogh[16]==$canditate63){
			$count63+=3;
		}else if($epilogh[16]==$canditate64){
			$count64+=3;
		}else if($epilogh[16]==$canditate65){
			$count65+=3;	
		}else if($epilogh[16]==$canditate66){
			$count66+=3;	
		}else if($epilogh[16]==$canditate67){
			$count67+=3;	
		}else if($epilogh[16]==$canditate68){
			$count68+=3;	
		}else if($epilogh[16]==$canditate69){
			$count69+=3;	
		}else if($epilogh[16]==$canditate70){
			$count70+=3;	
		}else if($epilogh[16]==$canditate71){
			$count71+=3;	
		}else if($epilogh[16]==$canditate72){
			$count72+=3;	
		}else if($epilogh[16]==$canditate73){
			$count73+=3;	
		}else if($epilogh[16]==$canditate74){
			$count74+=3;	
		}else if($epilogh[16]==$canditate75){
			$count75+=3;	
		}else if($epilogh[16]==$canditate76){
			$count76+=3;	
		}else if($epilogh[16]==$canditate77){
			$count77+=3;	
		}else if($epilogh[16]==$canditate78){
			$count78+=3;	
		}else if($epilogh[16]==$canditate79){
			$count79+=3;	
		}else if($epilogh[16]==$canditate80){
			$count80+=3;	
		}
	}
	
	if ($arrlen>=18){	
		if($epilogh[17]==$canditate61){
			$count61+=2;
		}else if($epilogh[17]==$canditate62){
			$count62+=2;
		}else if($epilogh[17]==$canditate63){
			$count63+=2;
		}else if($epilogh[17]==$canditate64){
			$count64+=2;
		}else if($epilogh[17]==$canditate65){
			$count65+=2;	
		}else if($epilogh[17]==$canditate66){
			$count66+=2;	
		}else if($epilogh[17]==$canditate67){
			$count67+=2;	
		}else if($epilogh[17]==$canditate68){
			$count68+=2;	
		}else if($epilogh[17]==$canditate69){
			$count69+=2;	
		}else if($epilogh[17]==$canditate70){
			$count70+=2;	
		}else if($epilogh[17]==$canditate71){
			$count71+=2;	
		}else if($epilogh[17]==$canditate72){
			$count72+=2;	
		}else if($epilogh[17]==$canditate73){
			$count73+=2;	
		}else if($epilogh[17]==$canditate74){
			$count74+=2;	
		}else if($epilogh[17]==$canditate75){
			$count75+=2;	
		}else if($epilogh[17]==$canditate76){
			$count76+=2;	
		}else if($epilogh[17]==$canditate77){
			$count77+=2;	
		}else if($epilogh[17]==$canditate78){
			$count78+=2;	
		}else if($epilogh[17]==$canditate79){
			$count79+=2;	
		}else if($epilogh[17]==$canditate80){
			$count80+=2;	
		}
	}
	
	if ($arrlen>=19){	
		if($epilogh[18]==$canditate61){
			$count61+=1;
		}else if($epilogh[18]==$canditate62){
			$count62+=1;
		}else if($epilogh[18]==$canditate63){
			$count63+=1;
		}else if($epilogh[18]==$canditate64){
			$count64+=1;
		}else if($epilogh[18]==$canditate65){
			$count65+=1;	
		}else if($epilogh[18]==$canditate66){
			$count66+=1;	
		}else if($epilogh[18]==$canditate67){
			$count67+=1;	
		}else if($epilogh[18]==$canditate68){
			$count68+=1;	
		}else if($epilogh[18]==$canditate69){
			$count69+=1;	
		}else if($epilogh[18]==$canditate70){
			$count70+=1;	
		}else if($epilogh[18]==$canditate71){
			$count71+=1;	
		}else if($epilogh[18]==$canditate72){
			$count72+=1;	
		}else if($epilogh[18]==$canditate73){
			$count73+=1;	
		}else if($epilogh[18]==$canditate74){
			$count74+=1;	
		}else if($epilogh[18]==$canditate75){
			$count75+=1;	
		}else if($epilogh[18]==$canditate76){
			$count76+=1;	
		}else if($epilogh[18]==$canditate77){
			$count77+=1;	
		}else if($epilogh[18]==$canditate78){
			$count78+=1;	
		}else if($epilogh[18]==$canditate79){
			$count79+=1;	
		}else if($epilogh[18]==$canditate80){
			$count80+=1;	
		}
	}
	
	if ($arrlen>=20){	
		if($epilogh[19]==$canditate61){
			$count61+=0;
		}else if($epilogh[19]==$canditate62){
			$count62+=0;
		}else if($epilogh[19]==$canditate63){
			$count63+=0;
		}else if($epilogh[19]==$canditate64){
			$count64+=0;
		}else if($epilogh[19]==$canditate65){
			$count65+=0;	
		}else if($epilogh[19]==$canditate66){
			$count66+=0;	
		}else if($epilogh[19]==$canditate67){
			$count67+=0;	
		}else if($epilogh[19]==$canditate68){
			$count68+=0;	
		}else if($epilogh[19]==$canditate69){
			$count69+=0;	
		}else if($epilogh[19]==$canditate70){
			$count70+=0;	
		}else if($epilogh[19]==$canditate71){
			$count71+=0;	
		}else if($epilogh[19]==$canditate72){
			$count72+=0;	
		}else if($epilogh[19]==$canditate73){
			$count73+=0;	
		}else if($epilogh[19]==$canditate74){
			$count74+=0;	
		}else if($epilogh[19]==$canditate75){
			$count75+=0;	
		}else if($epilogh[19]==$canditate76){
			$count76+=0;	
		}else if($epilogh[19]==$canditate77){
			$count77+=0;	
		}else if($epilogh[19]==$canditate78){
			$count78+=0;	
		}else if($epilogh[19]==$canditate79){
			$count79+=0;	
		}else if($epilogh[19]==$canditate80){
			$count80+=0;	
		}
	}
	$query="UPDATE ballot SET count1='{$count61}', count2='{$count62}', count3='{$count63}', count4='{$count64}', count5='{$count65}', count6='{$count66}', count7='{$count67}', count8='{$count68}', count9='{$count69}', count10='{$count70}', count11='{$count71}', count12='{$count72}', count13='{$count73}', count14='{$count74}', count15='{$count75}', count16='{$count76}', count17='{$count77}', count18='{$count78}', count19='{$count79}', count20='{$count80}' WHERE name='$name1[3]' ";
	$sql=mysqli_query($connection, $query);
	
	header('Location: ballot.php');
	}
	
	if ($count>=5){
		$array=mysqli_query($connection,"SELECT canditate1, count1, canditate2, count2, canditate3, count3, canditate4, count4, canditate5, count5, canditate6, count6, canditate7, count7, canditate8, count8, canditate9, count9, canditate10, count10, canditate11, count11, canditate12, count12, canditate13, count13, canditate14, count14, canditate15, count15, canditate16, count16, canditate17, count17, canditate18, count18, canditate19, count19, canditate20, count20 FROM ballot WHERE name='$name1[4]'");
			while ($row=mysqli_fetch_array($array)){
				$canditate81=$row['canditate1'];
				$count81=$row['count1'];
				$canditate82=$row['canditate2'];
				$count82=$row['count2'];
				$canditate83=$row['canditate3'];
				$count83=$row['count3'];
				$canditate84=$row['canditate4'];
				$count84=$row['count4'];
				$canditate85=$row['canditate5'];
				$count85=$row['count5'];
				$canditate86=$row['canditate6'];
				$count86=$row['count6'];
				$canditate87=$row['canditate7'];
				$count87=$row['count7'];
				$canditate88=$row['canditate8'];
				$count88=$row['count8'];
				$canditate89=$row['canditate9'];
				$count89=$row['count9'];
				$canditate90=$row['canditate10'];
				$count90=$row['count10'];
				$canditate91=$row['canditate11'];
				$count91=$row['count11'];
				$canditate92=$row['canditate12'];
				$count92=$row['count12'];
				$canditate93=$row['canditate13'];
				$count93=$row['count13'];
				$canditate94=$row['canditate14'];
				$count94=$row['count14'];
				$canditate95=$row['canditate15'];
				$count95=$row['count15'];
				$canditate96=$row['canditate16'];
				$count96=$row['count16'];
				$canditate97=$row['canditate17'];
				$count97=$row['count17'];
				$canditate98=$row['canditate19'];
				$count98=$row['count18'];
				$canditate99=$row['canditate19'];
				$count99=$row['count19'];
				$canditate100=$row['canditate20'];
				$count100=$row['count20'];
			}
	
	if ($arrlen>=1){
		if($epilogh[0]==$canditate81){
			$count81+=19;
		}else if($epilogh[0]==$canditate82){
			$count82+=19;
		}else if($epilogh[0]==$canditate83){
			$count83+=19;
		}else if($epilogh[0]==$canditate84){
			$count84+=19;
		}else if($epilogh[0]==$canditate85){
			$count85+=19;
		}else if($epilogh[0]==$canditate86){
			$count86+=19;
		}else if($epilogh[0]==$canditate87){
			$count87+=19;
		}else if($epilogh[0]==$canditate88){
			$count88+=19;
		}else if($epilogh[0]==$canditate89){
			$count89+=19;
		}else if($epilogh[0]==$canditate90){
			$count90+=19;
		}else if($epilogh[0]==$canditate91){
			$count91+=19;
		}else if($epilogh[0]==$canditate92){
			$count92+=19;
		}else if($epilogh[0]==$canditate93){
			$count93+=19;
		}else if($epilogh[0]==$canditate94){
			$count94+=19;
		}else if($epilogh[0]==$canditate95){
			$count95+=19;
		}else if($epilogh[0]==$canditate96){
			$count96+=19;
		}else if($epilogh[0]==$canditate97){
			$count97+=19;
		}else if($epilogh[0]==$canditate98){
			$count98+=19;
		}else if($epilogh[0]==$canditate99){
			$count99+=19;
		}else if($epilogh[0]==$canditate100){
			$count100+=19;
		}
	}
	
	if ($arrlen>=2){
		if($epilogh[1]==$canditate81){
			$count81+=18;
		}else if($epilogh[1]==$canditate82){
			$count82+=18;
		}else if($epilogh[1]==$canditate83){
			$count83+=18;
		}else if($epilogh[1]==$canditate84){
			$count84+=18;
		}else if($epilogh[1]==$canditate85){
			$count85+=18;	
		}else if($epilogh[1]==$canditate86){
			$count86+=18;	
		}else if($epilogh[1]==$canditate87){
			$count87+=18;	
		}else if($epilogh[1]==$canditate88){
			$count88+=18;	
		}else if($epilogh[1]==$canditate89){
			$count89+=18;	
		}else if($epilogh[1]==$canditate90){
			$count90+=18;	
		}else if($epilogh[1]==$canditate91){
			$count91+=18;	
		}else if($epilogh[1]==$canditate92){
			$count92+=18;	
		}else if($epilogh[1]==$canditate93){
			$count93+=18;	
		}else if($epilogh[1]==$canditate94){
			$count94+=18;	
		}else if($epilogh[1]==$canditate95){
			$count95+=18;	
		}else if($epilogh[1]==$canditate96){
			$count96+=18;	
		}else if($epilogh[1]==$canditate97){
			$count97+=18;	
		}else if($epilogh[1]==$canditate98){
			$count98+=18;	
		}else if($epilogh[1]==$canditate99){
			$count99+=18;	
		}else if($epilogh[1]==$canditate100){
			$count100+=18;	
		}
	}
	
	if ($arrlen>=3){
		if($epilogh[2]==$canditate81){
			$count81+=17;
		}else if($epilogh[2]==$canditate82){
			$count82+=17;
		}else if($epilogh[2]==$canditate83){
			$count83+=17;
		}else if($epilogh[2]==$canditate84){
			$count84+=17;
		}else if($epilogh[2]==$canditate85){
			$count85+=17;	
		}else if($epilogh[2]==$canditate86){
			$count86+=17;	
		}else if($epilogh[2]==$canditate87){
			$count87+=17;	
		}else if($epilogh[2]==$canditate88){
			$count88+=17;	
		}else if($epilogh[2]==$canditate89){
			$count89+=17;	
		}else if($epilogh[2]==$canditate90){
			$count90+=17;	
		}else if($epilogh[2]==$canditate91){
			$count91+=17;	
		}else if($epilogh[2]==$canditate92){
			$count92+=17;	
		}else if($epilogh[2]==$canditate93){
			$count93+=17;	
		}else if($epilogh[2]==$canditate94){
			$count94+=17;	
		}else if($epilogh[2]==$canditate95){
			$count95+=17;	
		}else if($epilogh[2]==$canditate96){
			$count96+=17;	
		}else if($epilogh[2]==$canditate97){
			$count97+=17;	
		}else if($epilogh[2]==$canditate98){
			$count98+=17;	
		}else if($epilogh[2]==$canditate99){
			$count99+=17;	
		}else if($epilogh[2]==$canditate100){
			$count100+=17;	
		}
	}
		
	if ($arrlen>=4){	
		if($epilogh[3]==$canditate81){
			$count81+=16;
		}else if($epilogh[3]==$canditate82){
			$count82+=16;
		}else if($epilogh[3]==$canditate83){
			$count83+=16;
		}else if($epilogh[3]==$canditate84){
			$count84+=16;
		}else if($epilogh[3]==$canditate85){
			$count85+=16;	
		}else if($epilogh[3]==$canditate86){
			$count86+=16;	
		}else if($epilogh[3]==$canditate87){
			$count87+=16;	
		}else if($epilogh[3]==$canditate88){
			$count88+=16;	
		}else if($epilogh[3]==$canditate89){
			$count89+=16;	
		}else if($epilogh[3]==$canditate90){
			$count90+=16;	
		}else if($epilogh[3]==$canditate91){
			$count91+=16;	
		}else if($epilogh[3]==$canditate92){
			$count92+=16;	
		}else if($epilogh[3]==$canditate93){
			$count93+=16;	
		}else if($epilogh[3]==$canditate94){
			$count94+=16;	
		}else if($epilogh[3]==$canditate95){
			$count95+=16;	
		}else if($epilogh[3]==$canditate96){
			$count96+=16;	
		}else if($epilogh[3]==$canditate97){
			$count97+=16;	
		}else if($epilogh[3]==$canditate98){
			$count98+=16;	
		}else if($epilogh[3]==$canditate99){
			$count99+=16;	
		}else if($epilogh[3]==$canditate100){
			$count100+=16;	
		}
	}
	
	if ($arrlen>=5){	
		if($epilogh[4]==$canditate81){
			$count81+=15;
		}else if($epilogh[4]==$canditate82){
			$count82+=15;
		}else if($epilogh[4]==$canditate83){
			$count83+=15;
		}else if($epilogh[4]==$canditate84){
			$count84+=15;
		}else if($epilogh[4]==$canditate85){
			$count85+=15;	
		}else if($epilogh[4]==$canditate86){
			$count86+=15;	
		}else if($epilogh[4]==$canditate87){
			$count87+=15;	
		}else if($epilogh[4]==$canditate88){
			$count88+=15;	
		}else if($epilogh[4]==$canditate89){
			$count89+=15;	
		}else if($epilogh[4]==$canditate90){
			$count90+=15;	
		}else if($epilogh[4]==$canditate91){
			$count91+=15;	
		}else if($epilogh[4]==$canditate92){
			$count92+=15;	
		}else if($epilogh[4]==$canditate93){
			$count93+=15;	
		}else if($epilogh[4]==$canditate94){
			$count94+=15;	
		}else if($epilogh[4]==$canditate95){
			$count95+=15;	
		}else if($epilogh[4]==$canditate96){
			$count96+=15;	
		}else if($epilogh[4]==$canditate97){
			$count97+=15;	
		}else if($epilogh[4]==$canditate98){
			$count98+=15;	
		}else if($epilogh[4]==$canditate99){
			$count99+=15;	
		}else if($epilogh[4]==$canditate100){
			$count100+=15;	
		}
	}
	
	if ($arrlen>=6){	
		if($epilogh[5]==$canditate81){
			$count81+=14;
		}else if($epilogh[5]==$canditate82){
			$count82+=14;
		}else if($epilogh[5]==$canditate83){
			$count83+=14;
		}else if($epilogh[5]==$canditate84){
			$count84+=14;
		}else if($epilogh[5]==$canditate85){
			$count85+=14;	
		}else if($epilogh[5]==$canditate86){
			$count86+=14;	
		}else if($epilogh[5]==$canditate87){
			$count87+=14;	
		}else if($epilogh[5]==$canditate88){
			$count88+=14;	
		}else if($epilogh[5]==$canditate89){
			$count89+=14;	
		}else if($epilogh[5]==$canditate90){
			$count90+=14;	
		}else if($epilogh[5]==$canditate91){
			$count91+=14;	
		}else if($epilogh[5]==$canditate92){
			$count92+=14;	
		}else if($epilogh[5]==$canditate93){
			$count93+=14;	
		}else if($epilogh[5]==$canditate94){
			$count94+=14;	
		}else if($epilogh[5]==$canditate95){
			$count95+=14;	
		}else if($epilogh[5]==$canditate96){
			$count96+=14;	
		}else if($epilogh[5]==$canditate97){
			$count97+=14;	
		}else if($epilogh[5]==$canditate98){
			$count98+=14;	
		}else if($epilogh[5]==$canditate99){
			$count99+=14;	
		}else if($epilogh[5]==$canditate100){
			$count100+=14;	
		}
	}
	
	if ($arrlen>=7){	
		if($epilogh[6]==$canditate81){
			$count81+=13;
		}else if($epilogh[6]==$canditate82){
			$count82+=13;
		}else if($epilogh[6]==$canditate83){
			$count83+=13;
		}else if($epilogh[6]==$canditate84){
			$count84+=13;
		}else if($epilogh[6]==$canditate85){
			$count85+=13;	
		}else if($epilogh[6]==$canditate86){
			$count86+=13;	
		}else if($epilogh[6]==$canditate87){
			$count87+=13;	
		}else if($epilogh[6]==$canditate88){
			$count88+=13;	
		}else if($epilogh[6]==$canditate89){
			$count89+=13;	
		}else if($epilogh[6]==$canditate90){
			$count90+=13;	
		}else if($epilogh[6]==$canditate91){
			$count91+=13;	
		}else if($epilogh[6]==$canditate92){
			$count92+=13;	
		}else if($epilogh[6]==$canditate93){
			$count93+=13;	
		}else if($epilogh[6]==$canditate94){
			$count94+=13;	
		}else if($epilogh[6]==$canditate95){
			$count95+=13;	
		}else if($epilogh[6]==$canditate96){
			$count96+=13;	
		}else if($epilogh[6]==$canditate97){
			$count97+=13;	
		}else if($epilogh[6]==$canditate98){
			$count98+=13;	
		}else if($epilogh[6]==$canditate99){
			$count99+=13;	
		}else if($epilogh[6]==$canditate100){
			$count100+=13;	
		}
	}
	
	if ($arrlen>=8){	
		if($epilogh[7]==$canditate81){
			$count81+=12;
		}else if($epilogh[7]==$canditate82){
			$count82+=12;
		}else if($epilogh[7]==$canditate83){
			$count83+=12;
		}else if($epilogh[7]==$canditate84){
			$count84+=12;
		}else if($epilogh[7]==$canditate85){
			$count85+=12;	
		}else if($epilogh[7]==$canditate86){
			$count86+=12;	
		}else if($epilogh[7]==$canditate87){
			$count87+=12;	
		}else if($epilogh[7]==$canditate88){
			$count88+=12;	
		}else if($epilogh[7]==$canditate89){
			$count89+=12;	
		}else if($epilogh[7]==$canditate90){
			$count90+=12;	
		}else if($epilogh[7]==$canditate91){
			$count91+=12;	
		}else if($epilogh[7]==$canditate92){
			$count92+=12;	
		}else if($epilogh[7]==$canditate93){
			$count93+=12;	
		}else if($epilogh[7]==$canditate94){
			$count94+=12;	
		}else if($epilogh[7]==$canditate95){
			$count95+=12;	
		}else if($epilogh[7]==$canditate96){
			$count96+=12;	
		}else if($epilogh[7]==$canditate97){
			$count97+=12;	
		}else if($epilogh[7]==$canditate98){
			$count98+=12;	
		}else if($epilogh[7]==$canditate99){
			$count99+=12;	
		}else if($epilogh[7]==$canditate100){
			$count100+=12;	
		}
	}
	
	if ($arrlen>=9){	
		if($epilogh[8]==$canditate81){
			$count81+=11;
		}else if($epilogh[8]==$canditate82){
			$count82+=11;
		}else if($epilogh[8]==$canditate83){
			$count83+=11;
		}else if($epilogh[8]==$canditate84){
			$count84+=11;
		}else if($epilogh[8]==$canditate85){
			$count85+=11;	
		}else if($epilogh[8]==$canditate86){
			$count86+=11;	
		}else if($epilogh[8]==$canditate87){
			$count87+=11;	
		}else if($epilogh[8]==$canditate88){
			$count88+=11;	
		}else if($epilogh[8]==$canditate89){
			$count89+=11;	
		}else if($epilogh[8]==$canditate90){
			$count90+=11;	
		}else if($epilogh[8]==$canditate91){
			$count91+=11;	
		}else if($epilogh[8]==$canditate92){
			$count92+=11;	
		}else if($epilogh[8]==$canditate93){
			$count93+=11;	
		}else if($epilogh[8]==$canditate94){
			$count94+=11;	
		}else if($epilogh[8]==$canditate95){
			$count95+=11;	
		}else if($epilogh[8]==$canditate96){
			$count96+=11;	
		}else if($epilogh[8]==$canditate97){
			$count97+=11;	
		}else if($epilogh[8]==$canditate98){
			$count98+=11;	
		}else if($epilogh[8]==$canditate99){
			$count99+=11;	
		}else if($epilogh[8]==$canditate100){
			$count100+=11;	
		}
	}
	
	if ($arrlen>=10){	
		if($epilogh[9]==$canditate81){
			$count81+=10;
		}else if($epilogh[9]==$canditate82){
			$count82+=10;
		}else if($epilogh[9]==$canditate83){
			$count83+=10;
		}else if($epilogh[9]==$canditate84){
			$count84+=10;
		}else if($epilogh[9]==$canditate85){
			$count85+=10;	
		}else if($epilogh[9]==$canditate86){
			$count86+=10;	
		}else if($epilogh[9]==$canditate87){
			$count87+=10;	
		}else if($epilogh[9]==$canditate88){
			$count88+=10;	
		}else if($epilogh[9]==$canditate89){
			$count89+=10;	
		}else if($epilogh[9]==$canditate90){
			$count90+=10;	
		}else if($epilogh[9]==$canditate91){
			$count91+=10;	
		}else if($epilogh[9]==$canditate92){
			$count92+=10;	
		}else if($epilogh[9]==$canditate93){
			$count93+=10;	
		}else if($epilogh[9]==$canditate94){
			$count94+=10;	
		}else if($epilogh[9]==$canditate95){
			$count95+=10;	
		}else if($epilogh[9]==$canditate96){
			$count96+=10;	
		}else if($epilogh[9]==$canditate97){
			$count97+=10;	
		}else if($epilogh[9]==$canditate98){
			$count98+=10;	
		}else if($epilogh[9]==$canditate99){
			$count99+=10;	
		}else if($epilogh[9]==$canditate100){
			$count100+=10;	
		}
	}
	
	if ($arrlen>=11){	
		if($epilogh[10]==$canditate81){
			$count81+=9;
		}else if($epilogh[10]==$canditate82){
			$count82+=9;
		}else if($epilogh[10]==$canditate83){
			$count83+=9;
		}else if($epilogh[10]==$canditate84){
			$count84+=9;
		}else if($epilogh[10]==$canditate85){
			$count85+=9;	
		}else if($epilogh[10]==$canditate86){
			$count86+=9;	
		}else if($epilogh[10]==$canditate87){
			$count87+=9;	
		}else if($epilogh[10]==$canditate88){
			$count88+=9;	
		}else if($epilogh[10]==$canditate89){
			$count89+=9;	
		}else if($epilogh[10]==$canditate90){
			$count90+=9;	
		}else if($epilogh[10]==$canditate91){
			$count91+=9;	
		}else if($epilogh[10]==$canditate92){
			$count92+=9;	
		}else if($epilogh[10]==$canditate93){
			$count93+=9;	
		}else if($epilogh[10]==$canditate94){
			$count94+=9;	
		}else if($epilogh[10]==$canditate95){
			$count95+=9;	
		}else if($epilogh[10]==$canditate96){
			$count96+=9;	
		}else if($epilogh[10]==$canditate97){
			$count97+=9;	
		}else if($epilogh[10]==$canditate98){
			$count98+=9;	
		}else if($epilogh[10]==$canditate99){
			$count99+=9;	
		}else if($epilogh[10]==$canditate100){
			$count100+=9;	
		}
	}
	
	if ($arrlen>=12){	
		if($epilogh[11]==$canditate81){
			$count81+=8;
		}else if($epilogh[11]==$canditate82){
			$count82+=8;
		}else if($epilogh[11]==$canditate83){
			$count83+=8;
		}else if($epilogh[11]==$canditate84){
			$count84+=8;
		}else if($epilogh[11]==$canditate85){
			$count85+=8;	
		}else if($epilogh[11]==$canditate86){
			$count86+=8;	
		}else if($epilogh[11]==$canditate87){
			$count87+=8;	
		}else if($epilogh[11]==$canditate88){
			$count88+=8;	
		}else if($epilogh[11]==$canditate89){
			$count89+=8;	
		}else if($epilogh[11]==$canditate90){
			$count90+=8;	
		}else if($epilogh[11]==$canditate91){
			$count91+=8;	
		}else if($epilogh[11]==$canditate92){
			$count92+=8;	
		}else if($epilogh[11]==$canditate93){
			$count93+=8;	
		}else if($epilogh[11]==$canditate94){
			$count94+=8;	
		}else if($epilogh[11]==$canditate95){
			$count95+=8;	
		}else if($epilogh[11]==$canditate96){
			$count96+=8;	
		}else if($epilogh[11]==$canditate97){
			$count97+=8;	
		}else if($epilogh[11]==$canditate98){
			$count98+=8;	
		}else if($epilogh[11]==$canditate99){
			$count99+=8;	
		}else if($epilogh[11]==$canditate100){
			$count100+=8;	
		}
	}
	
	if ($arrlen>=13){	
		if($epilogh[12]==$canditate81){
			$count81+=7;
		}else if($epilogh[12]==$canditate82){
			$count82+=7;
		}else if($epilogh[12]==$canditate83){
			$count83+=7;
		}else if($epilogh[12]==$canditate84){
			$count84+=7;
		}else if($epilogh[12]==$canditate85){
			$count85+=7;	
		}else if($epilogh[12]==$canditate86){
			$count86+=7;	
		}else if($epilogh[12]==$canditate87){
			$count87+=7;	
		}else if($epilogh[12]==$canditate88){
			$count88+=7;	
		}else if($epilogh[12]==$canditate89){
			$count89+=7;	
		}else if($epilogh[12]==$canditate90){
			$count90+=7;	
		}else if($epilogh[12]==$canditate91){
			$count91+=7;	
		}else if($epilogh[12]==$canditate92){
			$count92+=7;	
		}else if($epilogh[12]==$canditate93){
			$count93+=7;	
		}else if($epilogh[12]==$canditate94){
			$count94+=7;	
		}else if($epilogh[12]==$canditate95){
			$count95+=7;	
		}else if($epilogh[12]==$canditate96){
			$count96+=7;	
		}else if($epilogh[12]==$canditate97){
			$count97+=7;	
		}else if($epilogh[12]==$canditate98){
			$count98+=7;	
		}else if($epilogh[12]==$canditate99){
			$count99+=7;	
		}else if($epilogh[12]==$canditate100){
			$count100+=7;	
		}
	}

	if ($arrlen>=14){	
		if($epilogh[13]==$canditate81){
			$count81+=6;
		}else if($epilogh[13]==$canditate82){
			$count82+=6;
		}else if($epilogh[13]==$canditate83){
			$count83+=6;
		}else if($epilogh[13]==$canditate84){
			$count84+=6;
		}else if($epilogh[13]==$canditate85){
			$count85+=6;	
		}else if($epilogh[13]==$canditate86){
			$count86+=6;	
		}else if($epilogh[13]==$canditate87){
			$count87+=6;	
		}else if($epilogh[13]==$canditate88){
			$count88+=6;	
		}else if($epilogh[13]==$canditate89){
			$count89+=6;	
		}else if($epilogh[13]==$canditate90){
			$count90+=6;	
		}else if($epilogh[13]==$canditate91){
			$count91+=6;	
		}else if($epilogh[13]==$canditate92){
			$count92+=6;	
		}else if($epilogh[13]==$canditate93){
			$count93+=6;	
		}else if($epilogh[13]==$canditate94){
			$count94+=6;	
		}else if($epilogh[13]==$canditate95){
			$count95+=6;	
		}else if($epilogh[13]==$canditate96){
			$count96+=6;	
		}else if($epilogh[13]==$canditate97){
			$count97+=6;	
		}else if($epilogh[13]==$canditate98){
			$count98+=6;	
		}else if($epilogh[13]==$canditate99){
			$count99+=6;	
		}else if($epilogh[13]==$canditate100){
			$count100+=6;	
		}
	}
	
	if ($arrlen>=15){	
		if($epilogh[14]==$canditate81){
			$count81+=5;
		}else if($epilogh[14]==$canditate82){
			$count82+=5;
		}else if($epilogh[14]==$canditate83){
			$count83+=5;
		}else if($epilogh[14]==$canditate84){
			$count84+=5;
		}else if($epilogh[14]==$canditate85){
			$count85+=5;	
		}else if($epilogh[14]==$canditate86){
			$count86+=5;	
		}else if($epilogh[14]==$canditate87){
			$count87+=5;	
		}else if($epilogh[14]==$canditate88){
			$count88+=5;	
		}else if($epilogh[14]==$canditate89){
			$count89+=5;	
		}else if($epilogh[14]==$canditate90){
			$count90+=5;	
		}else if($epilogh[14]==$canditate91){
			$count91+=5;	
		}else if($epilogh[14]==$canditate92){
			$count92+=5;	
		}else if($epilogh[14]==$canditate93){
			$count93+=5;	
		}else if($epilogh[14]==$canditate94){
			$count94+=5;	
		}else if($epilogh[14]==$canditate95){
			$count95+=5;	
		}else if($epilogh[14]==$canditate96){
			$count96+=5;	
		}else if($epilogh[14]==$canditate97){
			$count97+=5;	
		}else if($epilogh[14]==$canditate98){
			$count98+=5;	
		}else if($epilogh[14]==$canditate99){
			$count99+=5;	
		}else if($epilogh[14]==$canditate100){
			$count100+=5;	
		}
	}
	
	if ($arrlen>=18){	
		if($epilogh[15]==$canditate81){
			$count81+=4;
		}else if($epilogh[15]==$canditate82){
			$count82+=4;
		}else if($epilogh[15]==$canditate83){
			$count83+=4;
		}else if($epilogh[15]==$canditate84){
			$count84+=4;
		}else if($epilogh[15]==$canditate85){
			$count85+=4;	
		}else if($epilogh[15]==$canditate86){
			$count86+=4;	
		}else if($epilogh[15]==$canditate87){
			$count87+=4;	
		}else if($epilogh[15]==$canditate88){
			$count88+=4;	
		}else if($epilogh[15]==$canditate89){
			$count89+=4;	
		}else if($epilogh[15]==$canditate90){
			$count90+=4;	
		}else if($epilogh[15]==$canditate91){
			$count91+=4;	
		}else if($epilogh[15]==$canditate92){
			$count92+=4;	
		}else if($epilogh[15]==$canditate93){
			$count93+=4;	
		}else if($epilogh[15]==$canditate94){
			$count94+=4;	
		}else if($epilogh[15]==$canditate95){
			$count95+=4;	
		}else if($epilogh[15]==$canditate96){
			$count96+=4;	
		}else if($epilogh[15]==$canditate97){
			$count97+=4;	
		}else if($epilogh[15]==$canditate98){
			$count98+=4;	
		}else if($epilogh[15]==$canditate99){
			$count99+=4;	
		}else if($epilogh[15]==$canditate100){
			$count100+=4;	
		}
	}
	
	if ($arrlen>=17){	
		if($epilogh[16]==$canditate81){
			$count91+=3;
		}else if($epilogh[16]==$canditate82){
			$count92+=3;
		}else if($epilogh[16]==$canditate83){
			$count93+=3;
		}else if($epilogh[16]==$canditate84){
			$count84+=3;
		}else if($epilogh[16]==$canditate85){
			$count85+=3;	
		}else if($epilogh[16]==$canditate86){
			$count86+=3;	
		}else if($epilogh[16]==$canditate87){
			$count87+=3;	
		}else if($epilogh[16]==$canditate88){
			$count88+=3;	
		}else if($epilogh[16]==$canditate89){
			$count89+=3;	
		}else if($epilogh[16]==$canditate90){
			$count90+=3;	
		}else if($epilogh[16]==$canditate91){
			$count91+=3;	
		}else if($epilogh[16]==$canditate92){
			$count92+=3;	
		}else if($epilogh[16]==$canditate93){
			$count93+=3;	
		}else if($epilogh[16]==$canditate94){
			$count94+=3;	
		}else if($epilogh[16]==$canditate95){
			$count95+=3;	
		}else if($epilogh[16]==$canditate96){
			$count96+=3;	
		}else if($epilogh[16]==$canditate97){
			$count97+=3;	
		}else if($epilogh[16]==$canditate98){
			$count98+=3;	
		}else if($epilogh[16]==$canditate99){
			$count99+=3;	
		}else if($epilogh[16]==$canditate100){
			$count100+=3;	
		}
	}
	
	if ($arrlen>=18){	
		if($epilogh[17]==$canditate81){
			$count81+=2;
		}else if($epilogh[17]==$canditate82){
			$count82+=2;
		}else if($epilogh[17]==$canditate83){
			$count83+=2;
		}else if($epilogh[17]==$canditate84){
			$count84+=2;
		}else if($epilogh[17]==$canditate85){
			$count85+=2;	
		}else if($epilogh[17]==$canditate86){
			$count86+=2;	
		}else if($epilogh[17]==$canditate87){
			$count87+=2;	
		}else if($epilogh[17]==$canditate88){
			$count88+=2;	
		}else if($epilogh[17]==$canditate89){
			$count89+=2;	
		}else if($epilogh[17]==$canditate90){
			$count90+=2;	
		}else if($epilogh[17]==$canditate91){
			$count91+=2;	
		}else if($epilogh[17]==$canditate92){
			$count92+=2;	
		}else if($epilogh[17]==$canditate93){
			$count93+=2;	
		}else if($epilogh[17]==$canditate94){
			$count94+=2;	
		}else if($epilogh[17]==$canditate95){
			$count95+=2;	
		}else if($epilogh[17]==$canditate96){
			$count96+=2;	
		}else if($epilogh[17]==$canditate97){
			$count97+=2;	
		}else if($epilogh[17]==$canditate98){
			$count98+=2;	
		}else if($epilogh[17]==$canditate99){
			$count99+=2;	
		}else if($epilogh[17]==$canditate100){
			$count100+=2;	
		}
	}
	
	if ($arrlen>=19){	
		if($epilogh[18]==$canditate81){
			$count81+=1;
		}else if($epilogh[18]==$canditate82){
			$count82+=1;
		}else if($epilogh[18]==$canditate83){
			$count83+=1;
		}else if($epilogh[18]==$canditate84){
			$count84+=1;
		}else if($epilogh[18]==$canditate85){
			$count85+=1;	
		}else if($epilogh[18]==$canditate86){
			$count86+=1;	
		}else if($epilogh[18]==$canditate87){
			$count87+=1;	
		}else if($epilogh[18]==$canditate88){
			$count88+=1;	
		}else if($epilogh[18]==$canditate89){
			$count89+=1;	
		}else if($epilogh[18]==$canditate90){
			$count90+=1;	
		}else if($epilogh[18]==$canditate91){
			$count91+=1;	
		}else if($epilogh[18]==$canditate92){
			$count92+=1;	
		}else if($epilogh[18]==$canditate93){
			$count93+=1;	
		}else if($epilogh[18]==$canditate94){
			$count94+=1;	
		}else if($epilogh[18]==$canditate95){
			$count95+=1;	
		}else if($epilogh[18]==$canditate96){
			$count96+=1;	
		}else if($epilogh[18]==$canditate97){
			$count97+=1;	
		}else if($epilogh[18]==$canditate98){
			$count98+=1;	
		}else if($epilogh[18]==$canditate99){
			$count99+=1;	
		}else if($epilogh[18]==$canditate100){
			$count100+=1;	
		}
	}
	
	if ($arrlen>=20){	
		if($epilogh[19]==$canditate81){
			$count81+=0;
		}else if($epilogh[19]==$canditate82){
			$count82+=0;
		}else if($epilogh[19]==$canditate83){
			$count83+=0;
		}else if($epilogh[19]==$canditate84){
			$count84+=0;
		}else if($epilogh[19]==$canditate85){
			$count85+=0;	
		}else if($epilogh[19]==$canditate86){
			$count86+=0;	
		}else if($epilogh[19]==$canditate87){
			$count87+=0;	
		}else if($epilogh[19]==$canditate88){
			$count88+=0;	
		}else if($epilogh[19]==$canditate89){
			$count89+=0;	
		}else if($epilogh[19]==$canditate90){
			$count90+=0;	
		}else if($epilogh[19]==$canditate91){
			$count91+=0;	
		}else if($epilogh[19]==$canditate92){
			$count92+=0;	
		}else if($epilogh[19]==$canditate93){
			$count93+=0;	
		}else if($epilogh[19]==$canditate94){
			$count94+=0;	
		}else if($epilogh[19]==$canditate95){
			$count95+=0;	
		}else if($epilogh[19]==$canditate96){
			$count96+=0;	
		}else if($epilogh[19]==$canditate97){
			$count97+=0;	
		}else if($epilogh[19]==$canditate98){
			$count98+=0;	
		}else if($epilogh[19]==$canditate99){
			$count99+=0;	
		}else if($epilogh[19]==$canditate100){
			$count100+=0;	
		}
	}
	$query="UPDATE ballot SET count1='{$count81}', count2='{$count82}', count3='{$count83}', count4='{$count84}', count5='{$count85}', count6='{$count86}', count7='{$count87}', count8='{$count88}', count9='{$count89}', count10='{$count90}', count11='{$count91}', count12='{$count92}', count13='{$count93}', count14='{$count94}', count15='{$count95}', count16='{$count96}', count17='{$count97}', count18='{$count98}', count19='{$count99}', count20='{$count100}' WHERE name='$name1[4]' ";
	$sql=mysqli_query($connection, $query);
	
	header('Location: ballot.php');
	}

function pshfoforia($i2,$canditate1,$canditate2,$canditate3,$canditate4,$canditate5,$canditate6,$canditate7,$canditate8,$canditate9,$canditate10,$canditate11,$canditate12,$canditate13,$canditate14,$canditate15,$canditate16,$canditate17,$canditate18,$canditate19,$canditate20,$epilogh	
	
function decRSA($E){
		$data[0]=1;
		for ($i=0;$i<=11;$i++){
			$rest[$i]=pow($E,1)%119;
			if($data[$i]>119){
				$data[$i+1]=$data[$i]*$rest[$i]%119;
			}else{
				$data[$i+1]=$data[$i]*$rest[$i];
			}
		}
		$get=$data[11]%119;
		return $get;
	}
?>