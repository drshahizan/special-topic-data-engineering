<?php
include 'header.php';
include 'dbconnect.php';

// Check if student ID is provided
if (isset($_GET['id'])) {
    $sid = $_GET['id'];

    // Fetch student information from the database
    $sql = "SELECT * FROM studentInfo WHERE sid = '$sid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $sname = $row['sname'];
    $sage = $row['sage'];
    $sgrade = $row['sgrade'];
    $snumber = $row['snumber'];
} else {
    // Redirect if student ID is not provided
    header("Location: student-info.php");
    exit();
}

// Handle update operation
if (isset($_POST['update'])) {
    // Get updated values from the form
    $newSname = $_POST['sname'];
    $newSage = $_POST['sage'];
    $newSgrade = $_POST['sgrade'];
    $newSnumber = $_POST['snumber'];

    // Update student information in the database
    $updateSql = "UPDATE studentInfo SET sname = '$newSname', sage = '$newSage', sgrade = '$newSgrade', snumber = '$newSnumber' WHERE sid = '$sid'";
    if (mysqli_query($conn, $updateSql)) {
        // Record updated successfully
        echo "<script>alert('Student record updated successfully.');</script>";
        echo "<script>window.location.href = 'student-info.php';</script>";
    } else {
        // Error in updating record
        echo "<script>alert('Failed to update student record.');</script>";
    }
}
?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Student Information Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div>

  <!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Student Information</h5>

      <!-- Vertical Form -->
      <form action="" class="row g-3 form-center" method="post"> 
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Student ID</label>
          <input type="text" class="form-control" name="sid" id="sid" value="<?php echo $sid; ?>" readonly>
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Student Name</label>
          <input type="text" class="form-control" name="sname" id="sname" placeholder="Enter student name" value="<?php echo $sname; ?>">
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Age</label>
          <input type="text" class="form-control" name="sage" id="sage" placeholder="Enter age" value="<?php echo $sage; ?>">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Grade</label>
          <input type="text" class="form-control" name="sgrade" id="sgrade" placeholder="Enter grade" value="<?php echo $sgrade; ?>">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Emergency Contact Number</label>
          <input type="text" class="form-control" name="snumber" id="snumber" placeholder="Enter contact number" value="<?php echo $snumber; ?>">
        </div>
        <div class="text-center">
          <button type="submit" name="update" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this student record?')">Update</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>

<?php include 'footer.php'; ?>
