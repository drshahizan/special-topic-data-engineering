<?php 

include ('dbconnect.php');

if(isset($_GET['id']))
{
    $mid=$_GET['id'];
}

$sql="DELETE FROM tb_month WHERE m_id='$mid'";
$result = mysqli_query($con, $sql);
echo '<script>alert("Data deleted successfully")</script>';

mysqli_close($con);
echo "<script>window.top.location.href='../StaticIP_dashboard/month.php' </script>";

?>