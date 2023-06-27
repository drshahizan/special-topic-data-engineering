<?php
if (!session_id())
{
    session_start();
}
include 'dbconnect.php';

// Identify the role of the user
$role = $_SESSION['role'];

// Include the corresponding header based on the role
if ($role == 1) {
  include 'admin-header.php';
} elseif ($role == 2) {
  include 'contentcreator-header.php';
} else {
  include 'marketing-header.php';
}
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
            <h5 class="card-title">Tiktok Analytics Table</h5>
            <p>View information about</p>

            <body>
              <div class="container">
                <table id="tiktokTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Caption</th>
                      <th>Video Duration</th>
                      <th>Upload Date</th>
                      <th>Comments</th>
                      <th>Plays</th>
                      <th>Shares</th>
                      <th>Likes</th>
                      <th>Hashtags</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'dbconnect.php';
                    $sql = "SELECT * FROM tiktokdata";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>".$row['Username']."</td>";
                      echo "<td>".$row['Caption']."</td>";
                      echo "<td>".$row['Video Duration']."</td>";
                      echo "<td>".$row['Upload Date']."</td>";
                      echo "<td>".$row['Comments']."</td>";
                      echo "<td>".$row['Plays']."</td>";
                      echo "<td>".$row['Shares']."</td>";
                      echo "<td>".$row['Likes']."</td>";
                      echo "<td>".$row['hashtags']."</td>";
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
                  $('#tiktokTable').DataTable();
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
