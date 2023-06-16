<?php
session_start();

//Connect to DB
include 'dbconnect.php';

//Retrive data from form
$femail= mysqli_real_escape_string($con,$_POST['femail']);
$fpword= mysqli_real_escape_string($con,$_POST['fpword']);

$getmail = "SELECT * FROM tb_user WHERE u_email = ?;";
$stmt = mysqli_stmt_init($con);
mysqli_stmt_prepare($stmt,$getmail);
mysqli_stmt_bind_param($stmt,"s",$femail);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);

// $hashpass = $row['u_pwd'];

// $verify = password_verify($fpword, $hashpass);

//Check login 
if($fpword == $row['u_pwd']) //User found
{
	//Set session
	$_SESSION['u_email'] = session_id();
	// $_SESSION['u_type'] = $row['u_type'];
	$_SESSION['u_name'] = $row['u_name'];
	$_SESSION['uemail'] = $femail;

	// if ($row['u_type'] == 1 ) //Admin
	// {
	// 	header('Location: admin/');
	// }
	// else //Customer
	// {
	// 	header('Location: customer.php');
	// }

	header('Location: home.php');
}
else //User not found
{
	$_SESSION['nouser'] = "Sorry, no user with those credentials found. Please try again or register a new account.";
	header('Location: index.php');
}

//Close connection
mysqli_close($con);

?>