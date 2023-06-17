<?php 
session_start();

//connect to DB
include('dbconnect.php');

//Retrieve data from form 
if(isset($_POST['submit'])){
	$fic = mysqli_real_escape_string($con,$_POST['fic']);
	$fwpd = mysqli_real_escape_string($con,$_POST['fwpd']);

	//Get user data based on login info (RETRIEVE) operation
	$result=mysqli_query($con,"select * from tb_user where u_ic='$fic'");

	//execute sql
	if(mysqli_num_rows($result)>0){ //execute SQL statement
		$row=mysqli_fetch_array($result); //retrieve result
		$verify=password_verify($fwpd,$row['u_pwd']);//verify result found

		//check login 
		if($verify==1)//user found
		{  
			//set session 
			$_SESSION['u_ic'] = session_id();
			$_SESSION['uic'] = $fic;
<<<<<<< Updated upstream
			header ('Location: index.php');
=======

			header ('Location: index.html');
>>>>>>> Stashed changes
		}
		
		else
		{
			include 'login.php';
			echo '<script>alert("Please enter correct password")</script>';
		}
	}
	
	else //user not found 
	{
		include 'login.php';
		echo '<script>alert("Please enter correct IC number")</script>';
	}
}

//Close connection
mysqli_close($con);

?>