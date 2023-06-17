<?php include 'header.php'; ?>

<head>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
</head>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Student List</h1>
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
            <h5 class="card-title">Student Information</h5>
            <p>Add, Edit, Delete students information</p>

            <body>
              <div class="container">
                <table id="studentTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Grade</th>
                      <th>Number</th>
                      <th>Actions</th> <!-- Add Actions column -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'dbconnect.php';
                    $sql = "SELECT * FROM studentInfo";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>".$row['sid']."</td>";
                      echo "<td>".$row['sname']."</td>";
                      echo "<td>".$row['sage']."</td>";
                      echo "<td>".$row['sgrade']."</td>";
                      echo "<td>".$row['snumber']."</td>";
                      echo '<td>';
                      echo '<a href="edit_student.php?id='.$row['sid'].'"><i class="bi bi-pencil-fill"></i></a>'; // Edit icon
                      echo '<a href="delete_student.php?id='.$row['sid'].'"><i class="bi bi-trash-fill"></i></a>'; // Delete icon
                      echo '</td>';
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
                  $('#studentTable').DataTable();
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
