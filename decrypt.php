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
	}
	
	$B=pshfoforia($i2,$canditate1,$count1,$canditate2,$count2,$canditate3,$count3,$canditate4,$count4,$canditate5,$count5,$canditate6,$count6,$canditate7,$count7,$canditate8,$count8,$canditate9,$count9,$canditate10,$count10,$canditate11,$count11,$canditate12,$count12,$canditate13,$count13,$canditate14,$count14,$canditate15,$count15,$canditate16,$count16,$canditate17,$count17,$canditate18,$count18,$canditate19,$count19,$canditate20,$count20,$epilogh,$arrlen);
	
	$query="UPDATE ballot SET count1='{$B[0]}', count2='{$B[1]}', count3='{$B[2]}', count4='{$B[3]}', count5='{$B[4]}', count6='{$B[5]}', count7='{$B[6]}', count8='{$B[7]}', count9='{$B[8]}', count10='{$B[9]}', count11='{$B[10]}', count12='{$B[11]}', count13='{$B[12]}', count14='{$B[13]}', count15='{$B[14]}', count16='{$B[15]}', count17='{$B[16]}', count18='{$B[17]}', count19='{$B[18]}', count20='{$B[19]}' WHERE name='$name1[0]' ";
	$sql=mysqli_query($connection, $query);
	
	//header('Location: ballot.php');
	
	
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
	}
	$B=pshfoforia($i2,$canditate21,$count21,$canditate22,$count22,$canditate23,$count23,$canditate24,$count24,$canditate25,$count25,$canditate26,$count26,$canditate27,$count27,$canditate28,$count28,$canditate29,$count29,$canditate30,$count30,$canditate31,$count31,$canditate32,$count32,$canditate33,$count33,$canditate34,$count34,$canditate35,$count35,$canditate36,$count36,$canditate37,$count37,$canditate38,$count38,$canditate39,$count39,$canditate40,$count40,$epilogh,$arrlen);
	
	$query="UPDATE ballot SET count1='{$B[0]}', count2='{$B[1]}', count3='{$B[2]}', count4='{$B[3]}', count5='{$B[4]}', count6='{$B[5]}', count7='{$B[6]}', count8='{$B[7]}', count9='{$B[8]}', count10='{$B[9]}', count11='{$B[10]}', count12='{$B[11]}', count13='{$B[12]}', count14='{$B[13]}', count15='{$B[14]}', count16='{$B[15]}', count17='{$B[16]}', count18='{$B[17]}', count19='{$B[18]}', count20='{$B[19]}' WHERE name='$name1[1]' ";
	$sql=mysqli_query($connection, $query);
	
	//header('Location: ballot.php');
	
		
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
		$i=0;
		if(is_null($canditate41)) {
			$i+=1;
		}
		if(is_null($canditate42)) {
			$i+=1;
		}
		if(is_null($canditate43)) {
			$i+=1;
		}
		if(is_null($canditate44)) {
			$i+=1;;
		}
		if(is_null($canditate45)) {
			$i+=1;
		}
		if(is_null($canditate46)) {
			$i+=1;
		}
		if(is_null($canditate47)) {
			$i+=1;
		}
		if(is_null($canditate48)) {
			$i+=1;
		}
		if(is_null($canditate49)) {
			$i+=1;
		}
		if(is_null($canditate50)) {
			$i+=1;
		}
		if(is_null($canditate51)) {
			$i+=1;
		}
		if(is_null($canditate52)) {
			$i+=1;
		}
		if(is_null($canditate53)) {
			$i+=1;
		}
		if(is_null($canditate54)) {
			$i+=1;
		}
		if(is_null($canditate55)) {
			$i+=1;
		}
		if(is_null($canditate56)) {
			$i+=1;
		}
		if(is_null($canditate57)) {
			$i+=1;
		}
		if(is_null($canditate58)) {
			$i+=1;
		}
		if(is_null($canditate59)) {
			$i+=1;
		}
		if(is_null($canditate60)) {
			$i+=1;
		}
		$i2=20-$i;
	}
	
		$B=pshfoforia($i2,$canditate41,$count41,$canditate42,$count42,$canditate43,$count43,$canditate44,$count44,$canditate45,$count45,$canditate46,$count46,$canditate47,$count47,$canditate48,$count48,$canditate49,$count49,$canditate50,$count50,$canditate51,$count51,$canditate52,$count52,$canditate53,$count53,$canditate54,$count54,$canditate55,$count55,$canditate56,$count56,$canditate57,$count57,$canditate58,$count58,$canditate59,$count59,$canditate60,$count60,$epilogh,$arrlen);

	
	$query="UPDATE ballot SET count1='{$B[0]}', count2='{$B[1]}', count3='{$B[2]}', count4='{$B[3]}', count5='{$B[4]}', count6='{$B[5]}', count7='{$B[6]}', count8='{$B[7]}', count9='{$B[8]}', count10='{$B[9]}', count11='{$B[10]}', count12='{$B[11]}', count13='{$B[12]}', count14='{$B[13]}', count15='{$B[14]}', count16='{$B[15]}', count17='{$B[16]}', count18='{$B[17]}', count19='{$B[18]}', count20='{$B[19]}' WHERE name='$name1[2]' ";
	$sql=mysqli_query($connection, $query);
	
		
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
		$i=0;
		if(is_null($canditate41)) {
			$i+=1;
		}
		if(is_null($canditate42)) {
			$i+=1;
		}
		if(is_null($canditate43)) {
			$i+=1;
		}
		if(is_null($canditate44)) {
			$i+=1;;
		}
		if(is_null($canditate45)) {
			$i+=1;
		}
		if(is_null($canditate46)) {
			$i+=1;
		}
		if(is_null($canditate47)) {
			$i+=1;
		}
		if(is_null($canditate48)) {
			$i+=1;
		}
		if(is_null($canditate49)) {
			$i+=1;
		}
		if(is_null($canditate50)) {
			$i+=1;
		}
		if(is_null($canditate51)) {
			$i+=1;
		}
		if(is_null($canditate52)) {
			$i+=1;
		}
		if(is_null($canditate53)) {
			$i+=1;
		}
		if(is_null($canditate54)) {
			$i+=1;
		}
		if(is_null($canditate55)) {
			$i+=1;
		}
		if(is_null($canditate56)) {
			$i+=1;
		}
		if(is_null($canditate57)) {
			$i+=1;
		}
		if(is_null($canditate58)) {
			$i+=1;
		}
		if(is_null($canditate59)) {
			$i+=1;
		}
		if(is_null($canditate60)) {
			$i+=1;
		}
		$i2=20-$i;
	}
	
		$B=pshfoforia($i2,$canditate61,$count61,$canditate62,$count62,$canditate63,$count63,$canditate64,$count64,$canditate65,$count65,$canditate66,$count66,$canditate67,$count67,$canditate68,$count68,$canditate69,$count69,$canditate70,$count70,$canditate71,$count71,$canditate72,$count72,$canditate73,$count73,$canditate74,$count74,$canditate75,$count75,$canditate76,$count76,$canditate77,$count77,$canditate78,$count78,$canditate79,$count79,$canditate80,$count80,$epilogh,$arrlen);

	
	$query="UPDATE ballot SET count1='{$B[0]}', count2='{$B[1]}', count3='{$B[2]}', count4='{$B[3]}', count5='{$B[4]}', count6='{$B[5]}', count7='{$B[6]}', count8='{$B[7]}', count9='{$B[8]}', count10='{$B[9]}', count11='{$B[10]}', count12='{$B[11]}', count13='{$B[12]}', count14='{$B[13]}', count15='{$B[14]}', count16='{$B[15]}', count17='{$B[16]}', count18='{$B[17]}', count19='{$B[18]}', count20='{$B[19]}' WHERE name='$name1[3]' ";
	$sql=mysqli_query($connection, $query);
		
	
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
		$i=0;
		if(is_null($canditate41)) {
			$i+=1;
		}
		if(is_null($canditate42)) {
			$i+=1;
		}
		if(is_null($canditate43)) {
			$i+=1;
		}
		if(is_null($canditate44)) {
			$i+=1;;
		}
		if(is_null($canditate45)) {
			$i+=1;
		}
		if(is_null($canditate46)) {
			$i+=1;
		}
		if(is_null($canditate47)) {
			$i+=1;
		}
		if(is_null($canditate48)) {
			$i+=1;
		}
		if(is_null($canditate49)) {
			$i+=1;
		}
		if(is_null($canditate50)) {
			$i+=1;
		}
		if(is_null($canditate51)) {
			$i+=1;
		}
		if(is_null($canditate52)) {
			$i+=1;
		}
		if(is_null($canditate53)) {
			$i+=1;
		}
		if(is_null($canditate54)) {
			$i+=1;
		}
		if(is_null($canditate55)) {
			$i+=1;
		}
		if(is_null($canditate56)) {
			$i+=1;
		}
		if(is_null($canditate57)) {
			$i+=1;
		}
		if(is_null($canditate58)) {
			$i+=1;
		}
		if(is_null($canditate59)) {
			$i+=1;
		}
		if(is_null($canditate60)) {
			$i+=1;
		}
		$i2=20-$i;	
	}
	
	$B=pshfoforia($i2,$canditate81,$count81,$canditate82,$count82,$canditate83,$count83,$canditate84,$count84,$canditate85,$count85,$canditate86,$count86,$canditate87,$count87,$canditate88,$count88,$canditate89,$count89,$canditate90,$count90,$canditate91,$count91,$canditate92,$count92,$canditate93,$count93,$canditate94,$count94,$canditate95,$count95,$canditate96,$count96,$canditate97,$count97,$canditate98,$count98,$canditate99,$count99,$canditate100,$count100,$epilogh,$arrlen);

	
	$query="UPDATE ballot SET count1='{$B[0]}', count2='{$B[1]}', count3='{$B[2]}', count4='{$B[3]}', count5='{$B[4]}', count6='{$B[5]}', count7='{$B[6]}', count8='{$B[7]}', count9='{$B[8]}', count10='{$B[9]}', count11='{$B[10]}', count12='{$B[11]}', count13='{$B[12]}', count14='{$B[13]}', count15='{$B[14]}', count16='{$B[15]}', count17='{$B[16]}', count18='{$B[17]}', count19='{$B[18]}', count20='{$B[19]}' WHERE name='$name1[4]' ";
	$sql=mysqli_query($connection, $query);
	
function pshfoforia($i2,$canditate1,$count1,$canditate2,$count2,$canditate3,$count3,$canditate4,$count4,$canditate5,$count5,$canditate6,$count6,$canditate7,$count7,$canditate8,$count8,$canditate9,$count9,$canditate10,$count10,$canditate11,$count11,$canditate12,$count12,$canditate13,$count13,$canditate14,$count14,$canditate15,$count15,$canditate16,$count16,$canditate17,$count17,$canditate18,$count18,$canditate19,$count19,$canditate20,$count20,$epilogh,$arrlen){
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
	if ($i2==17){
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
		$A[0]=$count1;
		$A[1]=$count2;
		$A[2]=$count3;
		$A[3]=$count4;
		$A[4]=$count5;
		$A[5]=$count6;
		$A[6]=$count7;
		$A[7]=$count8;
		$A[8]=$count9;
		$A[9]=$count10;
		$A[10]=$count11;
		$A[11]=$count12;
		$A[12]=$count13;
		$A[13]=$count14;
		$A[14]=$count15;
		$A[15]=$count16;
		$A[16]=$count17;
		$A[17]=$count18;
		$A[18]=$count19;
		$A[19]=$count20;
		return $A;
}
	
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