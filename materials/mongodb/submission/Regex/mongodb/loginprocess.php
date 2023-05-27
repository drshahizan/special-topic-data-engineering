<?php
session_start();

// Connect to the database
include('dbconnect.php');

// Retrieve data from form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare the SQL statement
$sql = "SELECT * FROM user WHERE username ='$username' AND pwd='$password'";

// Execute the SQL query
$result = mysqli_query($con, $sql);

// Check if the query was successful
if ($result) {
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    // Check login
    if ($count == 1) {
        // Set session
        $_SESSION['username'] = session_id();
        $_SESSION['username'] = $username;
        header('location: admin.php');
        exit();
    } else {
        echo 'Login Error: User not found';
    }
} else {
    // Query execution failed
    echo 'Error: ' . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
