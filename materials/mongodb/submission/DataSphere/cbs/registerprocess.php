<?php 

//Connect to DB
include ('dbconnect.php');

//Retrieve data from form
$fic = $_POST['fic'];
$fpwd = $_POST['fpwd'];
$fname = $_POST['fname'];
$fphone = $_POST['fphone'];
$faddress = $_POST['faddress']; 


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
$sql = "INSERT INTO tb_user (u_ic, u_pwd, u_name, u_phone, u_address, u_type) VALUES('$fic','$encrypted_pwd','$fname','$fphone','$faddress','2')";

// Execute SQL
mysqli_query($con, $sql);

//Close Connection
mysqli_close($con);

//Redirect Successfull notification
header('Location: login.php'); 


?>