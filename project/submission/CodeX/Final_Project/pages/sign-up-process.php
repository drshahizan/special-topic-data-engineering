<?php
//session_start();

//Connect to Database
include ('dbconnect.php');

//Retrieve data from form
$femail = $_POST['femail'];
$fpwd = $_POST['fpwd'];

            //$options = array("cost"=>4);
           // $hashPwd = password_hash($fpwd,PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO tb_user (u_email, u_pwd, u_type) 
                  VALUES ('".$femail."', '".$fpwd."', '2')";

/*$sql = "INSERT INTO tb_user (u_ic, u_email, u_pwd, u_name, u_phone, u_address, u_type)
      VALUES ('$fic','$femail', '$encrypted_pwd', '$fname', '$fphone', '$faddress', '2')";*/



      mysqli_query($conn, $sql);

      header ('Location: sign-in.php');

?>

<!--
//Retrive info from table and check for existing user.
/*$sqlCheck = "SELECT * FROM tb_user WHERE u_ic='$fic'";

// Execute SQL
$result = mysqli_query($con, $sqlCheck); // Execute SQL Statement
$row = mysqli_fetch_array($result); // Retrieve result
$count = mysqli_num_rows($result);  // Count result found


// Check for existing user
if($count == 1) // Found User
{

      header('Location: ExistingUser.php');

}



else // Existing user Not Found
{

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


//SQL Insert (CREATE) operation
$sql = "INSERT INTO tb_user (u_ic, u_email, u_pwd, u_name, u_phone, u_address, u_type)
	VALUES ('$fic','$femail', '$encrypted_pwd', '$fname', '$fphone', '$faddress', '2')";

//Execute SQL
mysqli_query($con, $sql);
}*/

//Close Connection
//mysqli_close($con);

//Redirect or successful notification
-->