<?php
include 'dbconnect.php';

// Check if student ID is provided
if (isset($_GET['id'])) {
    $sid = $_GET['id'];

    // Fetch student information from the database
    $sql = "SELECT * FROM studentInfo WHERE sid = '$sid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $sname = $row['sname'];
} else {
    // Redirect if student ID is not provided
    header("Location: student-info.php");
    exit();
}

// Handle delete operation
if (isset($_POST['delete'])) {
    $deleteSql = "DELETE FROM studentInfo WHERE sid = '$sid'";
    if (mysqli_query($conn, $deleteSql)) {
        // Record deleted successfully
        echo "<script>alert('Student record deleted successfully.');</script>";
        echo "<script>window.location.href = 'student_list.php';</script>";
    } else {
        // Error in deleting record
        echo "<script>alert('Failed to delete student record.');</script>";
    }
}
?>

<?php include 'header.php'; ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Delete Student Record</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div>

  <!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Are you sure you want to delete the following student record?</h5>

      <p><strong>Student ID:</strong> <?php echo $sid; ?></p>
      <p><strong>Student Name:</strong> <?php echo $sname; ?></p>

      <form action="" method="post">
        <div class="text-center">
          <button type="submit" name="delete" class="btn btn-danger">Delete</button>
          <a href="student_list.php" class="btn btn-secondary">Cancel</a>
        </div>
      </form>

    </div>
  </div>

<?php include 'footer.php'; ?>
