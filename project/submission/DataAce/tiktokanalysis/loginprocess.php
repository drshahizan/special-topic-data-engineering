<?php
session_start();
include 'dbconnect.php';

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve the hashed password from the database for the given username
    $userQuery = "SELECT * FROM tb_user WHERE username = '$username'";
    $userResult = mysqli_query($conn, $userQuery);
    $user = mysqli_fetch_assoc($userResult);

    if ($user) {
        $hashedPassword = $user['password'];
        // Verify the entered password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            if ($_SESSION['role'] == 1) // Admin
            {
                header('Location: admin.php');
                exit();
            } 
            else if ($_SESSION['role'] == 2) // Content Creator
            {
                header('Location: contentcreator.php');
                exit();
            }   
            else {
                header('Location: marketing.php');
                exit();
            }
        } else {
            // Password is incorrect
            echo '<script>alert("Incorrect password")</script>';
            header("Location: tiktok-datatable.php");
            exit();
        }
    } else {
        // User does not exist
        echo '<script>alert("User does not exist")</script>';
        header("Location: login.php");
        exit();
    }
} else {
    // No data submitted
    header("Location: login.php");
    exit();
}
?>