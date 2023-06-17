<?php 

include ('dbconnect.php');

if(isset($_GET['id']))
{
    $yid=$_GET['id'];
}

$sql="DELETE FROM tb_year WHERE y_id='$yid'";
$result = mysqli_query($con, $sql);
echo '<script>alert("Data deleted successfully")</script>';

mysqli_close($con);
echo "<script>window.top.location.href='../StaticIP_dashboard/year.php' </script>";

?>