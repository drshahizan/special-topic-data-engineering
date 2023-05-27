<?php
include "session.php";
include "dbconnect.php";
include "mongodbconnect.php";

$username = $_SESSION['username']; //know who is logged in

// Check if the customer ID is provided in the URL
if (isset($_GET['id'])) {
  $customer_id = $_GET['id'];

  // Retrieve customer data from MongoDB
  $customer = $collection->findOne(['CustomerID' => (int)$customer_id]);

  // Check if the customer exists
  if ($customer) {
    $gender = $customer['Gender'];
    $age = $customer['Age'];
    $annual_income = $customer['Annual Income ($)'];
    $spending_score = $customer['Spending Score (1-100)'];
    $profession = $customer['Profession'];
    $work_experience = $customer['Work Experience'];
  } else {
    // Redirect to the customer list page or display an error message
    header("Location: customerlist.php");
    exit();
  }
} else {
  // Redirect to the customer list page or display an error message
  header("Location: customerlist.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customer Analysis System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="admin.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Regex</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username?></span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $username?></h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admin.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="customerlist.php">
              <i class="bi bi-circle"></i><span>Customer List</span>
            </a>
          </li>
          <li>
            <a href="addcustomer.php">
              <i class="bi bi-circle"></i><span>Add Customer</span>
            </a>
          </li>
        </ul>
      </li><!-- End Customer Nav -->

    </ul>

  </aside><!-- End Sidebar-->


  <!-- ======= Main Section ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Customer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item">Customer</li>
          <li class="breadcrumb-item active">Edit Customer</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Customer Details</h5>

              <form action="update_customer.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $customer_id; ?>">

                <div class="mb-3">
                  <label for="id" class="form-label">Customer ID</label>
                  <input type="number" class="form-control" id="id" name="id" value="<?php echo $customer_id; ?>" required readonly>
                </div>

                <div class="mb-3">
                  <label for="gender" class="form-label">Gender</label>
                  <select class="form-control" id="gender" name="gender" required>
                    <option value="Male" <?php if ($gender === 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($gender === 'Female') echo 'selected'; ?>>Female</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="age" class="form-label">Age</label>
                  <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="annual_income" class="form-label">Annual Income ($)</label>
                  <input type="number" class="form-control" id="annual_income" name="annual_income" value="<?php echo $annual_income; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="spending_score" class="form-label">Spending Score (1-100)</label>
                  <input type="number" class="form-control" id="spending_score" name="spending_score" value="<?php echo $spending_score; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="profession" class="form-label">Profession</label>
                  <input type="text" class="form-control" id="profession" name="profession" value="<?php echo $profession; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="work_experience" class="form-label">Work Experience</label>
                  <input type="text" class="form-control" id="work_experience" name="work_experience" value="<?php echo $work_experience; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Customer</button>
                <a href="customerlist.php" class="btn btn-secondary">Back</a>
              </form>

            </div><!-- End Card Body -->
          </div><!-- End Card -->

        </div><!-- End Col -->
      </div><!-- End Row -->
    </section><!-- End Section -->

  </main><!-- End Main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
