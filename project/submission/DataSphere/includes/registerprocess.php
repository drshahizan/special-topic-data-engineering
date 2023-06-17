<?php 

//Connect to DB
include ('dbconnect.php');

//Retrieve data from form
$fusername = $_POST['fusername'];
$fpwd = $_POST['fpwd'];
$fname = $_POST['fname'];
$ftype = $_POST['ftype'];


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

      

//SQL Insert(CREATE) operation
$sql = "INSERT INTO tb_user (u_username, u_password, u_name, u_type) VALUES('$fusername','$encrypted_pwd','$fname','$ftype')";

// Execute SQL
mysqli_query($con, $sql);


session_start();


//Retrieve SQL operation [Get user data based on login info]
$sql2 = "SELECT * FROM tb_user WHERE u_username ='$fusername' AND u_password ='$encrypted_pwd'";

// Execute SQL
$result = mysqli_query($con, $sql2); // Execute SQL Statement
$row = mysqli_fetch_array($result); // Retrieve result
$count = mysqli_num_rows($result); 	// Count result found



// Check Login
if($count == 1) // Found User
{

	//set session
	$_SESSION['u_id'] = session_id();
    $_SESSION['uid'] = $row['u_id'];
	$_SESSION['u_user'] = $fusername;
    $_SESSION['u_name'] = $row['u_name'];

	if($row['u_type'] == 1) // Admin
	{
		header('Location: ../pages/admin.php');
		$_SESSION['u_type'] = session_id();
		$_SESSION['utype'] = 1;
	}

	else // User
	{
		header('Location: ../pages/user.php');
		$_SESSION['u_type'] = session_id();
		$_SESSION['utype'] = 2;
	}
}

else //Something went wrong
{
	header('Location: ../pages/loginError.php');
}

//Close Connection
mysqli_close($con);

?>