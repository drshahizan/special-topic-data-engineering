<?php 

// include 'session.php'; 
// if (!session_id())
// {
//     session_start();
// }

include 'admin-header.php'; 
include 'dbconnect.php';

// if(isset($_GET['id']))
// {
//     $id = $_GET['id'];
// }
   
?>


<head>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
</head>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tiktok Videos</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manage User</h5>
            <div class="d-flex justify-content-end">
                <div class="form-inline"> 
                <a href="registerbyadmin.php">+ Add User</a>
                </div>
            </div>
            <body>
              <div class="container">
                <table id="tb_user" class="table table-striped">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Username</th>
                      <th>Full Nmae</th>
                      <th>Role</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'dbconnect.php';
                    $sql = "SELECT * FROM tb_user";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['username']."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>";
                      if ($row['role'] == 1) {
                        echo "Admin";
                      } elseif ($row['role'] == 2) {
                        echo "Content Creator";
                      } elseif ($row['role'] == 3) {
                        echo "Marketing";
                      } else {
                        echo "Unknown";
                      }
                      "</td>";

                      echo "</tr>";
                    }
                    mysqli_close($conn);
                    ?>
                  </tbody>
                </table>
              </div>

              <!-- Bootstrap JS -->
              <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

              <script>
                // Initialize DataTable
                $(document).ready(function() {
                  $('#tb_user').DataTable();
                });
              </script>
            </body>
          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php include 'footer.php'; ?>

