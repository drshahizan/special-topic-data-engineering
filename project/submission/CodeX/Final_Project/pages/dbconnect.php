<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_mso';

// Establish a connection
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Retrieve data from the database
$query = 'SELECT * FROM movies';
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}
?>
