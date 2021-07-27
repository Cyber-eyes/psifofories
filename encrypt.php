<?php

$pshf="";


if (!empty($_POST["pshf"])){
	$pshf=$_POST['pshf'];
}	

$enc="";

	function encRSA($M){
		$data[0]=1;
		for ($i=0;$i<=35;$i++){
			$rest[$i]=pow($M,1)%119;
			if($data[$i]>119){
				$data[$i+1]=$data[$i]*$rest[$i]%119;
			}else{
				$data[$i+1]=$data[$i]*$rest[$i];
			}
		}
		$get=$data[35]%119;
		return $get;
	}
		
	//encrypt
	for ($i=0;$i<strlen($pshf);$i++){
		$m=ord($pshf[$i]);
		if($m<=119){
			//print_r(get_included_files()); exit();
			$enc=$enc.chr(encRSA($m));
		}else{
			$enc=$enc.$pshf[$i];
		}
	}

	$b=encRSA(101);
	
	error_reporting(0);

	
	 session_start();
		$_SESSION['enc']=$enc;
		$_SESSION['pshf']=$pshf;
		$_SESSION['b']=$b;
		
	include 'decrypt.php';
?>