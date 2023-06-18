<?php
session_start();

// connect to DB
include('dbconnect.php');

// Retrieve data from form
if (isset($_POST['submit'])) {
    $fic = mysqli_real_escape_string($con, $_POST['fic']);
    $fwpd = mysqli_real_escape_string($con, $_POST['fwpd']);

    // Check if user already exists
    $check_query = "SELECT * FROM tb_user WHERE u_ic='$fic'";
    $check_result = mysqli_query($con, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        include 'register.php';
        echo '<script>alert("User already exists with this IC number")</script>';
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($fwpd, PASSWORD_DEFAULT);

    // Insert user into the database
    $insert_query = "INSERT INTO tb_user (u_ic, u_pwd) VALUES ('$fic', '$hashed_password')";
    if (mysqli_query($con, $insert_query)) {
        // Registration successful
        $_SESSION['u_ic'] = session_id();
        $_SESSION['uic'] = $fic;
        header('Location: index.php');
    } else {
        // Registration failed
        include 'register.php';
        echo '<script>alert("Registration failed. Please try again.")</script>';
    }
}

// Close connection
mysqli_close($con);
?>
