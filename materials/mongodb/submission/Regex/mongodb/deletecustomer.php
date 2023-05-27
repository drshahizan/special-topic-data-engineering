<?php
include "session.php";
include "dbconnect.php";
include "mongodbconnect.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];}

$sql = "SELECT * FROM customer WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if ($count > 0) {
  // Delete customer data from MySQL
  $sql = "DELETE FROM customer WHERE id='$id'";
  mysqli_query($con, $sql);

  // Delete customer data from MongoDB
  $collection->deleteOne(['CustomerID' => (int)$id]);

  header("Location: customerlist.php");
} else {
  echo "Customer not found.";
}
?>
