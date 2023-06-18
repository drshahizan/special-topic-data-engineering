<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title><?php echo $language["Dashboard"]; ?> | Skote - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>
<?php include 'layouts/horizontal-menu.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">
    
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">DashBoard</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <html>
                <head>
                    <title>DashBoard</title>
                    <!-- Include Plotly library -->
                    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
                </head>
                <body>
                    <h1>Visualization Example</h1>
                    <!-- Add a container for each chart -->
                    <div id="word-clouds" class="chart-container"></div>
                    <div id="example-texts" class="chart-container"></div>
                    <div id="sentiment-distribution" class="chart-container"></div>
                    <div id="time-series"><div id="distribution"></div></div>
                </body>
                </html>
            </div>
        </div>
        <?php include 'layouts/footer.php'; ?>
    </div>
</div>
<?php include 'layouts/right-sidebar.php'; ?>
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Wrap the chart rendering script in the DOMContentLoaded event -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Retrieve the chart data from the server-side script
    fetch('Visualization.json')
        .then(response => response.json()) // Parse response as JSON
        .then(data => {
            // Extract individual chart data
            const wordCloudsData = data.pop().wordClouds;
            const timeSeriesChart = data[0];
            const distributionChart = data[1];
            const sentimentDistributionChart = data[2];
            const barChartsData = data.slice(3);

            // Render word clouds
            const wordCloudsContainer = document.getElementById('word-clouds');
            wordCloudsData.forEach((wordCloudData, index) => {
                const divId = 'word-cloud-' + index;

                const card = document.createElement('div');
                card.classList.add('card');
                card.classList.add('col-md-4');

                const cardBody = document.createElement('div');
                cardBody.classList.add('card-body');
                card.appendChild(cardBody);

                const cardTitle = document.createElement('h5');
                cardTitle.classList.add('card-title');
                cardTitle.textContent = 'Word Cloud ' + index;
                cardBody.appendChild(cardTitle);

                const image = new Image();
                image.src = 'data:image/png;base64,' + wordCloudData.image;
                image.style.maxWidth = '100%';
                cardBody.appendChild(image);

                wordCloudsContainer.appendChild(card);
            });

            // Render time-series chart
            Plotly.newPlot('time-series', timeSeriesChart.data, timeSeriesChart.layout);

            // Render distribution chart
            Plotly.newPlot('distribution', distributionChart.data, distributionChart.layout);

            // Render sentiment distribution chart
            Plotly.newPlot('sentiment-distribution', sentimentDistributionChart.data, sentimentDistributionChart.layout);

            // Render bar charts
            const chartsContainer = document.getElementById('example-texts');
            const columnWidth = 4;

            barChartsData.forEach((barChart, index) => {
                const divId = 'bar-chart-' + index;

                const column = document.createElement('div');
                column.classList.add('col-md-' + columnWidth);
                column.style.marginBottom = '20px';

                const chartContainer = document.createElement('div');
                chartContainer.setAttribute('id', divId);
                column.appendChild(chartContainer);

                chartsContainer.appendChild(column);

                Plotly.newPlot(divId, barChart.data, barChart.layout);
            });
        });
});
</script>









<!-- Add CSS styles for the chart containers -->
<style>
.chart-container {
    margin-bottom: 20px;
    border: 1px solid #ddd;
    padding: 10px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
</style>                
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>
<script src="assets/js/app.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
