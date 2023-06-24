<?php
include('dbconnect.php');

if (isset($_POST['show_id']) && isset($_POST['show_rate'])) {
    $showId = $_POST['show_id'];
    $rate = $_POST['show_rate'];

    // Prepare the SQL statement
    $sql = "INSERT INTO tb_rate (rate_show_id, rate) VALUES (?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "ii", $showId, $rate);
    $result = mysqli_stmt_execute($stmt);

    // Check if the insertion was successful
    if ($result) {
        // Redirect to userindex.php or display a success message
        header('Location: userindex.php');
        exit();
    } else {
        // Handle the error, e.g., display an error message or redirect to an error page
        echo "Error: " . mysqli_error($con);
        // You can also redirect to an error page
        // header('Location: error.php');
        exit();
    }
} else {
    // Handle the case where the required fields are not present in the form data
    // Redirect to an error page or display an error message
    echo "Error: Required fields are missing.";
    // You can also redirect to an error page
    // header('Location: error.php');
    exit();
}

// Close Connection (Note: This part is not necessary as the script will exit after redirection or error handling)
mysqli_close($con);
