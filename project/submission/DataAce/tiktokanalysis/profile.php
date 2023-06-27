<?php
if (!session_id()) {
  session_start();
}
include 'dbconnect.php';

// Identify the role of the user
$role = $_SESSION['role'];
$user = $_SESSION['username'];

// Retrieve admin details
$sql = "SELECT username, name FROM tb_user WHERE username = '$user'";

$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
} else {
    // Handle the case when no rows are returned
    // For example, display an error message or redirect the user
    echo "No user details found.";
    exit;
}

// Include the corresponding header based on the role
if ($role == 1) {
    include 'admin-header.php';
} elseif ($role == 2) {
    include 'contentcreator-header.php';
} else {
    include 'marketing-header.php';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <style>
        .form-center {
            margin: 0 auto;
            max-width: 700px;
        }
    </style>
</head>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>User Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div>

  <!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Profile Information</h5>

      <body>
        <form action="" class="row g-3 form-center" method="post"> 
            <div class="col-12">
            <label for="inputNanme4" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $row['username']; ?>" readonly>
            </div>
            <div class="col-12">
            <label for="inputEmail4" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter student name" value="<?php echo $row['name']; ?>">
            </div>
           
            <div class="text-center">
            <button type="submit" name="update" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this record?')">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <div class="text-center">
            <p><a href="forgot-password.php">Forgot password?</a></p>
            </div>
        </form>
           
      </body>
    </div>
  </div>

<?php include 'footer.php'; ?>
