<?php 
session_start();

//Connect to DB
include ('dbconnect.php');

//Retrieve data from form
$fic = $_POST['fic'];
$fpwd = $_POST['fpwd'];


      //AES Encryption

      //Define cipher 
      $cipher = "aes-256-cbc"; 

      //Generate a 256-bit encryption key 
      $encryption_key = "SDVVS4D5V1S6V1SV1S546V1S61VS5DSV1"; 

      // Generate an initialization vector 
      $iv_size = openssl_cipher_iv_length($cipher); 
      $iv = "SDVVS4D5VADASDAA"; 

      //Data to encrypt  
      $encrypted_pwd = openssl_encrypt($fpwd, $cipher, $encryption_key, 0, $iv);
      

//Retrieve SQL operation [Get user data based on login info]
$sql = "SELECT * FROM tb_user WHERE u_ic='$fic' AND u_pwd='$encrypted_pwd'";

// Execute SQL
$result = mysqli_query($con, $sql); // Execute SQL Statement
$row = mysqli_fetch_array($result); // Retrieve result
$count = mysqli_num_rows($result); 	// Count result found



// Check Login
if($count == 1) // Found User
{

	//set session
	$_SESSION['u_ic'] = session_id();
	$_SESSION['uic'] = $fic;

	if($row['u_type'] == 1) // Admin
	{
		header('Location: admin.php');
		$_SESSION['u_type'] = session_id();
		$_SESSION['utype'] = 1;
	}

	else // Customer
	{
		header('Location: customer.php');
		$_SESSION['u_type'] = session_id();
		$_SESSION['utype'] = 2;
	}
}

else // User Not Found
{
	header('Location: loginError.php');
}


//Close Connection
mysqli_close($con);

?>