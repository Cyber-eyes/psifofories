<?php

/*Αρχικοποίηση κενού μηνύματος*/
$message="";

/*Διαδικασία ελέγχου πάτημα του πλήκτρου Login*/
if (isset($_POST["loginad"])){
	
	  /*Έλεγχος ύπαρξης περιεχομένου στα πεδία*/
	  if (!empty($_POST["name"])){
		  if (!empty($_POST["surname"])){
			if (!empty($_POST["pass"])){
			  
		  /*Έλεγχος ύπαρξης των παραπάνω στοιχείων στη βάση*/
		  $result=mysqli_query($connection,"SELECT * FROM userinfo WHERE name='" . $_POST["name"] . "' and password = '". $_POST["pass"]."' and surname ='" . $_POST["surname"] ."'");
		  $count=mysqli_num_rows($result);
		  if($count==0){
		        $message = "Invalid Username or Password!";
			    echo $message;
		    }else{
				echo $message;
				$surname=$_POST['surname'];
		     
				/*Φόρτωση του username του εκάστοτε χρήστη*/
				 setcookie('surname',$surname);
			 
				/*Ανακατεύθυνση στη σελίδα home-system.php*/
				header('Location: admin.page.php');
				}
				
			}
		}
	}
}
	  

?>