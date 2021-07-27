<!--Έλεγχος ορθότητας εισαγώμενων στοιχείων για είσοδο του χρήστη-->
<?php

/*Αρχικοποίηση κενού μηνύματος*/
$message="";

/*Διαδικασία ελέγχου πάτημα του πλήκτρου Login*/
if (isset($_POST["login"])){
	
	  /*Έλεγχος ύπαρξης περιεχομένου στα πεδία*/
	  if (!empty($_POST["name"])){
		  if (!empty($_POST["surname"])){
			if (!empty($_POST["pass"])){
			  
		  /*Έλεγχος ύπαρξης των παραπάνω στοιχείων στη βάση*/
		  $result=mysqli_query($connection,"SELECT * FROM userinfo WHERE surname='" . $_POST["surname"] . "' and password = '". $_POST["pass"]."' and name='" . $_POST["name"] ."'");
		  $count=mysqli_num_rows($result);
		  if($count==0){
		     $message = "Invalid Username or Password!";
			 echo $message;
		  }else{
			if ($_POST["name"]!=="big"){
			 $message = "You are successfully authenticated!";
			 echo $message;
			 $surname=$_POST['surname'];
		     
			 /*Φόρτωση του username του εκάστοτε χρήστη*/
			 setcookie('surname',$surname);
			 
			 /*Ανακατεύθυνση στη σελίδα home-system.php*/
			 header('Location: home.php');
			 }else{
				 echo "Invalid Username or Password";
			 }	
			 
		  }
		 }
	  }
}
}
  		    
?>