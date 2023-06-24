<?php
include("headeradmin.php");
include("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $showName = $_POST["show_name"];

    // Insert the new show into the database
    $query = "INSERT INTO tb_show (show_name) VALUES ('$showName')";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Show success message and redirect to a confirmation page
        echo '<div class="alert alert-success">New show added successfully.</div>';
        header("refresh:2; url=adminindex.php"); // Redirect to the confirmation page
        exit;
    } else {
        // Show error message if the insertion failed
        echo '<div class="alert alert-danger">Error adding the new show. Please try again.</div>';
    }
}
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h2>Add New Show</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="show_name">Show Name</label>
                    <input type="text" name="show_name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Show</button>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>