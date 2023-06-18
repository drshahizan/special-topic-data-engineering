<?php 

//connect to database
include ('dbconnect.php');
require 'mongodb.php';  

$id = $_GET['id'];


$sql = "DELETE FROM sales WHERE Sales_id = '$id'";
$result = mysqli_query($con, $sql);

//Close Connection
mysqli_close($con); 

$collection->deleteOne(['Sales_id' => (int)$id]);

//Redirect or successful notification
echo '<script>
alert("Sales Deleted Successfully!");
window.location.href="index.php";
</script>';

?>