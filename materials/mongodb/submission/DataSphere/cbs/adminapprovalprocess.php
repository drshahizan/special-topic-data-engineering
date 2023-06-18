<?php 
include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

//Connect to DB
include 'dbconnect.php';

//Get Booking ID
If(isset($_GET['id']))
{
  $bid = $_GET['id'];
}


$fstatus = $_POST['fstatus']; 

$sqlstatus= "SELECT * FROM tb_status WHERE is_id = '$fstatus'";
$resultstatus = mysqli_query($con, $sqlstatus);
$row=mysqli_fetch_array($resultstatus);


      $sql = "UPDATE tb_booking SET b_status='$fstatus' WHERE b_id='$bid'";
      
      // Execute SQL
      mysqli_query($con, $sql);

      //Redirect Successfull notification
      echo "<script type='text/javascript'>alert(\"Booking $bid ".$row['is_desc'].".\")</script>";
      //header("location:page1.php");
      include("adminmanage.php");





//Close Connection
mysqli_close($con);



?>