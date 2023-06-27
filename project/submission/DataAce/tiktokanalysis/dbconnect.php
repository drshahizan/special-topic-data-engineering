<?php
// Set db parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiktokanalysis";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
