<?php
session_start();

//Connect to Database
include ('dbconnect.php');

//Retrieve data from form
$fic= $_POST['fic'];
$fpwd = $_POST['fpwd'];


					      //AES Encryption
/*
					      //Define cipher 
					      $cipher = "aes-256-cbc"; 

					      //Generate a 256-bit encryption key 
					      $encryption_key = "SDVVS4D5V1S6V1SV1S546V1S61VS5DSV1"; 

					      // Generate an initialization vector 
					      $iv_size = openssl_cipher_iv_length($cipher); 
					      $iv = "SDVVS4D5VADASDAA"; 

					      //Data to encrypt  
					      $encrypted_pwd = openssl_encrypt($fpwd, $cipher, $encryption_key, 0, $iv);
*/


//Get user data based on login info (RETRIEVE) operation
$sql = "SELECT * FROM tb_user WHERE u_ic='$fic' AND u_pwd='$fpwd'";

//Execute SQL
$result = mysqli_query($con, $sql); //execute SQL statement
$row = mysqli_fetch_array($result); // Retrieve result
$count = mysqli_num_rows($result); //count result found

//Check password
/*if(password_verify($fpwd, $hashed_pwd))
{
	$login = TRUE;
}*/

//Check Login 
if($count == 1) //User found
{
	//set session 
	$_SESSION['u_name'] = session_id();
	$_SESSION['u_name'] = $fname;


	if($row['u_type'] == 1)    //Admin
	{
		header ('Location: adminindex.php');
	}
	else //Customer
	{
		header ('Location: userindex.php');
	}
}
else //User not found
{

	include 'headermain.php';

	echo 'Login Error: User not Found';

	include 'footer.php';
}


//Close Connection
mysqli_close($con);
