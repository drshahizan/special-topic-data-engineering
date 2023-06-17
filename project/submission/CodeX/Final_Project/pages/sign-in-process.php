<?php
session_start();

//Connect to Database
include ('dbconnect.php');

//Retrieve data from form
$femail = $_POST['femail'];
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
$sql = "SELECT * FROM tb_user WHERE u_email='$femail' AND u_pwd='$fpwd'";

//Execute SQL
$result = mysqli_query($conn, $sql); //execute SQL statement
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
	$_SESSION['u_email'] = session_id();
	$_SESSION['uemail'] = $femail;


	if($row['u_type'] == 2)    //Admin
	{
		header ('Location: dashboard.php');
	}
	else //Customer
	{
		header ('Location: sign-in.php');
	}
}
else //User not found
{

	include 'head.php';

	echo 'Login Error: User not Found';

	include 'footer.php';
}


//Close Connection
mysqli_close($conn);

?>
