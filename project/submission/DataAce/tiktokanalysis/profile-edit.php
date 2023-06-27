<?php
include 'dbconnect.php'; 
include 'mongodb1.php';

$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];

// Update MySQL database
$sql = "UPDATE studentInfo SET username='$username', name='$name', password='$password' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "User record updated successfully database";
} else {
    echo "Error updating record in MySQL database: " . mysqli_error($conn);
}
?>
