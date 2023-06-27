<?php
include 'dbconnect.php';

$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert the user data into the database
$sql = "INSERT INTO tb_user (username, name, password, role) VALUES ('$username', '$name', '$hashedPassword', 2)";

if (mysqli_query($conn, $sql)) {
    // Registration successful
    $registrationSuccess = true;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if ($_POST) {
    $insert = array(
        'username' => $_POST['username'],
        'name' => $_POST['name'],
        'password' => $hashedPassword, // Store the hashed password in the array
        'role' => 2
    );
} else {
    echo "No data to store";
}
?>

<!-- HTML code for your registration form -->

<?php
// Check if registration was successful and display success banner
if ($registrationSuccess) {
    echo '<div class="success-banner">Registration successful!</div>';
    // Redirect to the login page after a delay
    header("Refresh: 1; URL=login.php");
    exit();
}
?>
