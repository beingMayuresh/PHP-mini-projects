<?php
      include_once('db.php');

 	
	 

	  $firstName = mysql_real_escape_string( $_POST["firstName"] );
	  $lastName = mysql_real_escape_string( $_POST["lastName"] );
	  $email = mysql_real_escape_string( $_POST["email"] );
	  $password = mysql_real_escape_string( md5($_POST["pwd"]) );

	  // echo "$firstName";
	  // echo "$lastName";
	  // echo "$email";
	  // echo "$password";


 
	  $sql = "INSERT INTO customers VALUES(
                                           '$firstName', 
                                           '$lastName', 
                                           '$email', 
                                           '$password')";
	  if( mysql_query($sql) )
	  	// session_start();
	  	// $_SESSION['firstName']=$firstName;
			   
	  			echo '<script>window.location.href = "welcome.php";</script>';
	   //echo "Inserted Successfully";
	  else
	   echo "Insertion Failed";
?>