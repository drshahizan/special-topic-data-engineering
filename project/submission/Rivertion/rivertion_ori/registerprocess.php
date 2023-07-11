<?php
session_start();
//Connect to DB
include ('dbconnect.php');

//Retrieve data from form
 if(isset($_POST['register'])){
 $fname = mysqli_real_escape_string($con, $_POST['fname']);
 $femail = mysqli_real_escape_string($con, $_POST['femail']);
 $fpword = mysqli_real_escape_string($con, $_POST['fpword']);
 $hashpass = password_hash($fpword, PASSWORD_DEFAULT);
 $utype = 2;

//Prepared Statements
$email_check = "SELECT * FROM tb_user WHERE u_email = ?;";
$insert_deets = "INSERT INTO tb_user (u_name, u_email, u_pwd, u_type)
                 VALUES (?,?,?,?);"; 
                 
//Initialize connection
$stmt_email = mysqli_stmt_init($con);

//Prepare connection
mysqli_stmt_prepare($stmt_email,$email_check);

mysqli_stmt_bind_param($stmt_email,"s",$femail);
mysqli_stmt_execute($stmt_email);
$result_email = mysqli_stmt_get_result($stmt_email);

//Check whether the email is registered or not
if(mysqli_num_rows($result_email) > 0)
{
    $_SESSION['emailexist'] = "That email has already been registered, please login.";
    header('Location: login.php');
    exit();
}

//Initialize connection
$stmt_insert = mysqli_stmt_init($con);

//Prepare connection
mysqli_stmt_prepare($stmt_insert,$insert_deets);

mysqli_stmt_bind_param($stmt_insert,"sssi",$fname,$femail,$hashpass,$utype);
mysqli_stmt_execute($stmt_insert);

//Redirect or successful notification
$_SESSION['success'] = "Congratulations! You've successfully registered a new account. You may now login.";
header ('Location: login.php');
}

?> 


