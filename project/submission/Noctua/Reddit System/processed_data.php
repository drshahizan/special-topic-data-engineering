<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Processed Data | Noctua</title>
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
                                <h4 class="card-title mb-4">Top 50 Processed Data</h4>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">Text</th>
                                                <th class="align-middle">Sentiment</th>
                                                <th class="align-middle">Timestamp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Read the content of Visualization.json file
                                            $json = file_get_contents('ProcessedData.json');

                                            // Parse the JSON data
                                            $data = json_decode($json, true);

                                            // Process and display only the first 50 rows
                                            $count = 0;
                                            foreach ($data as $row) {
                                                if ($count >= 50) {
                                                    break;
                                                }
                                                echo '<tr>';
                                                echo '<td class="text-column">' . $row['text'] . '</td>';
                                                echo '<td>' . $row['sentiment'] . '</td>';
                                                echo '<td>' . $row['timestamp'] . '</td>';
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