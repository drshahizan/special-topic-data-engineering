<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>DashBoard | Noctua</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
</head>
<html>
<body data-topbar="dark" data-layout="horizontal" data-layout-scrollable="true">

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'layouts/horizontal-menu.php'; ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h1 class="mb-sm-0 font-size-18"><b>Redditor's View Towards Anwar Ibrahim as Malaysia's 10th Prime Minister.</b></h1>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                    <div class="row">
                                        <div id="example-texts" class="chart-container"></div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Sentiment Word Cloud</h4>
                                            <div class="table-responsive">
                                                <div id="word-clouds" class="chart-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="card">
                                <div class="card-body">
                                    <p>
                                    This is the overall sentiment distribution where we put together all the sentiments along with its frequency into a single pie chart. We can see there are almost 70% of neutral comments regarding DSAI followed by 18.1% of positive comments and the rest being negative comments. Here we can verify the assumption we made earlier, most of the comments he received were neutral comments, which means the public tolerates him.
                                    </p>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4"></h4>
                                    <div class="table-responsive">
                                        <div id="distribution"></div>
                                        <div id="time-series"></div>
                                        <div id="sentiment-distribution"></div>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include 'layouts/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- JAVASCRIPT -->
    <?php include 'layouts/vendor-scripts.php'; ?>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
</body>
</html>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve the chart data from the server-side script
        fetch('Visualization.json')
            .then(response => response.text()) // Read response as text
            .then(data => {
                // Parse the chart data from JSON
                const charts = JSON.parse(data);

                // Render word clouds
                const wordCloudsData = charts[charts.length - 1].wordClouds;

                // Create a container for the row
                const rowContainer = document.createElement('div');
                rowContainer.classList.add('row');

                // Append the row container to the parent element
                const parentContainer = document.getElementById('word-clouds');
                parentContainer.appendChild(rowContainer);

                wordCloudsData.forEach((wordCloudData, index) => {
                const divId = 'word-cloud-' + index;
                // Create a card container
                const card = document.createElement('div');
                card.classList.add('card');
                card.classList.add('col-md-4');
                // Create the card body
                const cardBody = document.createElement('div');
                cardBody.classList.add('card');
                card.appendChild(cardBody);
                // Create the card title
                const cardTitle = document.createElement('h5');
                cardTitle.classList.add('card-title');
                const title = wordCloudData.file_name.replace('wordcloud_', '').replace('.png', '');
                cardTitle.textContent = `${title} Sentiment`; // Add "Sentiment" to the extracted sentiment
                cardBody.appendChild(cardTitle);
                // Create the image element
                const image = new Image();
                image.src = wordCloudData.file_name; // Set the path to the word cloud file
                image.style.maxWidth = '100%'; // Limit the image width to fit within the card
                cardBody.appendChild(image);
                // Append the card to the row container
                rowContainer.appendChild(card);
                });

                // Render time-series chart
                const timeSeriesChart = charts[0];
                Plotly.newPlot('time-series', timeSeriesChart.data, timeSeriesChart.layout);

                // Render distribution chart
                const distributionChart = charts[1];
                Plotly.newPlot('distribution', distributionChart.data, distributionChart.layout);

                // Render sentiment distribution chart
                const sentimentDistributionChart = charts[2];
                Plotly.newPlot('sentiment-distribution', sentimentDistributionChart.data, sentimentDistributionChart.layout);

                // Render bar charts
                const chartsContainer = document.getElementById('example-texts');
                const columnWidth = 12; // Set the desired column width

                for (let i = 3; i < charts.length - 1; i++) {
                const barChart = charts[i];
                const divId = 'bar-chart-' + (i - 3);

                // Create a column container
                const column = document.createElement('div');
                column.classList.add('col-md-' + columnWidth); // Set the column width class
                column.style.marginBottom = '20px'; // Add some bottom margin between columns

                // Create the chart container
                const chartContainer = document.createElement('div');
                chartContainer.setAttribute('id', divId);
                column.appendChild(chartContainer);

                // Append the column to the charts container
                chartsContainer.appendChild(column);

                // Render the chart
                Plotly.newPlot(divId, barChart.data, barChart.layout);
                }
            });
    });
</script>