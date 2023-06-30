<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Raw Data | Noctua</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

<?php include 'layouts/horizontal-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- end page title -->
                <html>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Top 100 Raw Data</h4>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">Text</th>
                                                <th class="align-middle">Score</th>
                                                <th class="align-middle">Timestamp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
// Parse the CSV data
$data = array_map('str_getcsv', file('combined_data.csv'));

// Process and display only the first 50 rows without null values
$count = 0;
$isFirstRow = true;
foreach ($data as $row) {
    if ($count >= 100) {
        break;
    }
    
    // Skip the first row
    if ($isFirstRow) {
        $isFirstRow = false;
        continue;
    }
    
    // Check if the row has any null values
    if (in_array(null, $row, true)) {
        continue; // Skip the row if it has null values
    }
    
    echo '<tr>';
    echo '<td class="text-column">' . ($row[6] ?? 'null') . '</td>'; // Assuming the 'text' column is the seventh column (index 6)
    echo '<td>' . ($row[2] ?? 'null') . '</td>'; // Assuming the 'sentiment' column is the third column (index 2)
    echo '<td>' . ($row[7] ?? 'null') . '</td>'; // Assuming the 'timestamp' column is the eighth column (index 7)
    echo '</tr>';
    $count++;
}
?>




                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                </html>

                <style>
                    .text-column {
                        max-width: 600px;
                        /* Adjust the width as per your preference */
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                    }
                </style>





            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>