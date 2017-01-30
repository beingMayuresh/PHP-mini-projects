<?php
      include_once('db.php');

 	 
	  $email = mysql_real_escape_string( $_POST["email"] );
	  $password = mysql_real_escape_string( md5($_POST["pwd"]) );
	  




 
	  $sql = mysql_query("select * from customers where email='".$email."' and password='".$password."'");



	  $res=mysql_fetch_row($sql);

		if($res){
			session_start();
			 $_SESSION['email']=$email;
			 $email=$_SESSION['email'];   
			 // echo "hello";
			// echo "welcome " . "$email" . "!";
			 echo '<script>window.location.href = "display.php";</script>';
		}
		else
			echo "fault";


	  
?>







