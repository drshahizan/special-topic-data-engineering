<?php
include "session.php";
include "dbconnect.php"; // MySQL connection
include "mongodbconnect.php"; // MongoDB connection

$username = $_SESSION['username']; //know who is logged in

$mysqlData = [];
$sql = "SELECT * FROM customer";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $mysqlData[] = $row;
    $customerData[] = [
    'profession' => $row['profession'],
  ];
}

$id = array_column($mysqlData, 'id');
$ages = array_column($mysqlData, 'age');
$annual_income = array_column($mysqlData, 'annual_income');

$meanAge = array_sum($ages) / count($ages);
$meanIncome = array_sum($annual_income) / count($annual_income);
$total = count($id);

$stdDevAge = sqrt(array_sum(array_map(function ($age) use ($meanAge) {
    return pow($age - $meanAge, 2);
}, $ages)) / count($ages));

// Count the occurrences of each profession
$professionCounts = array_count_values(array_column($customerData, 'profession'));

// Prepare data for the chart
$labels = array_keys($professionCounts);
$data = array_values($professionCounts);

// Count the occurrences of each gender
$genderCounts = array_count_values(array_column($mysqlData, 'gender'));
// Prepare data for the pie chart
$genderLabels = array_keys($genderCounts);
$genderData = array_values($genderCounts);


// Retrieve customer data from the database
$customerData2 = [];
$sql2 = "SELECT spending_score, AVG(annual_income) AS avg_income FROM customer GROUP BY spending_score";
$result2 = mysqli_query($con, $sql2);

// Fetch data and populate the $customerData array
while ($row2 = mysqli_fetch_assoc($result2)) {
  $customerData2[] = [
    'spending_score' => $row2['spending_score'],
    'average_income' => $row2['avg_income']
  ];
}

// Sort the customer data based on spending_score in ascending order
usort($customerData2, function($a, $b) {
    return $a['spending_score'] <=> $b['spending_score'];
});

// Prepare data for the line chart
$spendingData = array_column($customerData2, 'spending_score');
$incomeData = array_column($customerData2, 'average_income');

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

  <!-- Chart -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
          </a><!-- End Profile Iamge Icon -->

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

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Age <span>| Mean</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $meanAge ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Annual Income <span>| Mean</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $meanIncome ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total ?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card" style="height: 500px;">

                <div class="card-body">

                  <!-- Line Chart -->
                  <canvas id="lineChart"></canvas>

                  <script>
                    // Get the customer data from PHP and convert it to JavaScript arrays
                    var spendingData = <?php echo json_encode($spendingData); ?>;
                    var incomeData = <?php echo json_encode($incomeData); ?>;

                    // Create the line chart
                    var ctx = document.getElementById('lineChart').getContext('2d');
                    var lineChart = new Chart(ctx, {
                      type: 'line',
                      data: {
                        labels: spendingData,
                        datasets: [{
                          label: 'Average Annual Income',
                          data: incomeData,
                          backgroundColor: 'rgba(75, 192, 192, 0.6)',
                          borderColor: 'rgba(75, 192, 192, 1)',
                          borderWidth: 1,
                          fill: false
                        }]
                      },
                      options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                          x: {
                            title: {
                              display: true,
                              text: 'Spending Score'
                            }
                          },
                          y: {
                            title: {
                              display: true,
                              text: 'Average Annual Income'
                            }
                          }
                        }
                      }
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        <!-- Gender -->
          <div class="card">

            <div class="card-body pb-0">
              

              <canvas id="pieChart"></canvas>

              <script>
                // Get the customer data from PHP and convert it to a JavaScript array
                var genderLabels = <?php echo json_encode($genderLabels); ?>;
                var genderData = <?php echo json_encode($genderData); ?>;

                // Create the pie chart
                var ctx = document.getElementById('pieChart').getContext('2d');
                var pieChart = new Chart(ctx, {
                  type: 'pie',
                  data: {
                    labels: genderLabels,
                    datasets: [{
                      data: genderData,
                      backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)'], // Customize the colors as needed
                      borderWidth: 1
                    }]
                  },
                  options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                      position: 'bottom',
                    }
                  }
                });
              </script>

            </div>
          </div><!-- End Gender -->

          <!-- Profession -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Profession <span>| Customer</span></h5>
              <canvas id="barChart"></canvas>

              <script>
              // Get the profession data from PHP and convert it to a JavaScript array
              var labels = <?php echo json_encode($labels); ?>;
              var data = <?php echo json_encode($data); ?>;

              // Create the bar chart
              var ctx = document.getElementById('barChart').getContext('2d');
              var barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: labels,
                  datasets: [{
                    label: 'Profession',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true,
                      title: {
                        display: true,
                        text: 'Count'
                      }
                    }
                  }
                }
              });
            </script>

            </div>
          </div><!-- Profession -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Regex</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by Regex Team
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>