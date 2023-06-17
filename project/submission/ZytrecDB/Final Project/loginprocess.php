<?php
session_start();

//Connect to Database
include ('dbconnect.php');

//Retrieve data from form
$fname = $_POST['fname'];
$fpwd = $_POST['fpwd'];


//Get user data based on login info (RETRIEVE) operation
$sql = "SELECT * FROM tb_user WHERE u_name='$fname' AND u_pwd='$fpwd'";

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
  $_SESSION['uname'] = $fname;


  if($row['u_type'] == 1)    //Admin
  {
    header ('Location: dashboard.php');
  }
}
else //User not found
{

  include 'headmain.php';

  echo 'Login Error: User not Found';

  include 'footermain.php';
}


//Close Connection
mysqli_close($conn);

?>