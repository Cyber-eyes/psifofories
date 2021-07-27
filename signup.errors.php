<!--Έλεγχος ορθότητας password-->
<?php

/*Αρχικοποίηση μεταβλητών του password*/
 $var1=0;
 $var2=0;
 $var3=0;
 $var4=0;
 $var5=0;
 $var6=0;
 $var7=0;
 $birth1="";
 
 /*Διαδικασία ελέγχου πάτημα του πλήκτρου Sign-up*/
 if (isset($_POST["signup"])) {
	  $user=$_POST['user'];
	  $surname=$_POST['surname'];
	  
	  /*Φόρτωση του username του εκάστοτε χρήστη*/
	  setcookie('surname',$surname);
	  
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $conpass=$_POST['conpass'];
	  $birth=$_POST['birthday'];
	  
	  /*Έλεγχος ύπαρξης περιεχομένου στα πεδία*/
	  if (!empty($_POST["user"])){
		  if (!empty($_POST["surname"])){
			  if (!empty($_POST["pass"])){
				  if (!empty($_POST["conpass"])){
					  if (!empty($_POST["email"])){
						  if (!empty($_POST["birthday"])){
					  
								/*Κλήση των συναρτήσεων για έλεγχο του password*/
								$var1=length($var1 , $pass);
								$var2=num($var2 , $pass);
								$var3=caps($var3 , $pass);
								$var4=special($var4 , $pass);
								$var5=identical($var5 , $pass , $conpass);
								$var6=a($var6 , $birth);
		
								/*Προσθήκη στοιχείων στη βάση δεδομένων*/
								if ($var1==1){
									if ($var2==1){
										if ($var3==1){
											if ($var4==1){
												if ($var5==1){
													if ($var6==1){
																
																$sql = "INSERT INTO userinfo (name, surname, password, email, birthday) VALUES (?,?,?,?,?)";
																$stmt= $connection->prepare($sql);
																$stmt->bind_param("sssss", $user, $surname, $pass, $email, $birth);
																$stmt->execute();
																
																/*Ανακατεύθυνση στη σελίδα home-system.php*/
																header('Location: home.php');
														
													}
												}
											} 
										}
									}
								}
							}else{
								echo "Insert your birthday";
							}
						}else{
							echo "Insert your email";
						}
					}else{
						echo "Insert your password again";
					}
				}else{
					echo "Insert your password";
				}
			}else{
				echo "Insert your surname";
			}
		}else{
			echo "Insert your name";
		}
 }
  /*Συναρτήσεις*/
  function length($var1 , $pass){
    if (strlen($pass)<8){
	  echo "Your password must be at least 8 characters long"; 
	  echo "<br>";
	} else{
		 $var1=$var1+1;
		 return $var1;
	}
}
 function num($var2 , $pass){
	 if (preg_match('#[0-9]#',$pass)){
         $var2=$var2+1;
		 return $var2;
    }else{
        echo "Your password must have at least 1 number";
		echo "<br>";
    }  
}
 function caps($var3 , $pass){
	 if(preg_match('/[A-Z]/', $pass)){
		 $var3=$var3+1;
		 return $var3;
	 }else{
		 echo "Your password must have at least 1 capital letter";
		 echo "<br>";
	 }
}
 function special($var4 , $pass){
	 if (preg_match('/[\'^$%&#*@~!?><>=+]/', $pass)){
		 $var4=$var4+1;
		 return $var4;
	  }else{
		  echo "Your password must have at least 1 special character";
		  echo "<br>";
        }
}
 function identical($var5 , $pass , $conpass){
	 if ($pass==$conpass){
		 $var5=$var5+1;
		 return $var5;
	 }else{
		 echo "Passwords don't match";
		 echo "<br>";
	 }
}
 function a($var6 , $birth){
	 $date=date("Y/m/d");
	 settype($date, "integer");
	 $birth1=$birth;
	 settype($birth1, "integer");
	 $diff=$date-$birth1;
	if ($diff<18){
		 echo "Πρέπει να είστε πάνω από 18 για να συνδεθείτε";
	}else{
		 $var6=$var6+1;
		 return $var6;
		 return $birth1;
	}
 }

?>