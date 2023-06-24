<?php
include "mongodb.php";
include "session.php";
include "dbconnect.php";

$ramens = $collection->find();
$username = $_SESSION['username'];

function fetchChartData()
{
    global $con;

    // Query to fetch the popularity of ramen across countries
    $query = "SELECT Country, COUNT(*) AS Popularity FROM tb_ramen GROUP BY Country order by Popularity desc";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Prepare the data for the chart
    $chartData = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $chartData['countries'][] = $row['Country'];
        $chartData['popularity'][] = $row['Popularity'];
    }

    return $chartData;
}

function fetchTopRamenStyles()
{
    global $con;

    // Query to fetch the top 4 most preferred ramen styles
    $query = "SELECT Style, COUNT(*) AS Count FROM tb_ramen GROUP BY Style ORDER BY Count DESC LIMIT 4";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Prepare the data for the pie chart
    $ramenStyleData = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $ramenStyleData[] = [
            'style' => $row['Style'],
            'count' => $row['Count']
        ];
    }

    return $ramenStyleData;
}

function fetchMostPopularBrands()
{
    global $con;

    // Query to fetch the top 5 most popular brands
    $query = "SELECT Brand, COUNT(*) AS Count FROM tb_ramen GROUP BY Brand ORDER BY Count DESC LIMIT 10";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Prepare the data for the horizontal bar chart
    $brandData = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $brandData[] = [
            'brand' => $row['Brand'],
            'count' => $row['Count']
        ];
    }

    return $brandData;
}

include "header.php";
?>

<div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $username; ?>
                    </div>
                </nav>
            </div>
<div id="layoutSidenav_content">

<main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Most Preferred Ramen Style
                                    </div>
                                    <div class="card-body">
                                        <canvas id="ramenStyleChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Popularity of Ramens across the Countries
                                    </div>
                                    <div class="card-body">
                                        <canvas id="ramenChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4" style="height: 400px;">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Top 10 Most Popular Ramen Brand
                                    </div>
                                    <div class="card-body">
                                        <canvas id="popularBrandChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4" style="height: 400px;">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Top 10 Brands with Highest Amount of 5 Stars Ramens
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        // Query to fetch the brand with the most variety of 5-star ramen
                                        $query = "SELECT Brand, COUNT(DISTINCT Variety) AS VarietyCount FROM tb_ramen WHERE Stars = 5 GROUP BY Brand ORDER BY VarietyCount DESC LIMIT 10";

                                        // Execute the query
                                        $result = mysqli_query($con, $query);

                                        // Check if there is any result
                                        if (mysqli_num_rows($result) > 0) {
                                            // Table header
                                            echo '<table style="border-collapse: collapse; width: 100%;">';
                                            echo '<thead><tr><th>Brand</th><th>Number of Ramens Rated 5 Stars</th></tr></thead><tbody>';

                                            // Fetch the data and display it in the table
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>' . $row['Brand'] . '</td>';
                                                echo '<td>' . $row['VarietyCount'] . '</td>';
                                                echo '</tr>';
                                            }

                                            echo '</tbody></table>';
                                        } else {
                                            echo 'No data available.';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>


</div>
</main>

<!-- Fetch chart data and initialize the chart -->
<script>
    var ctx = document.getElementById('ramenChart').getContext('2d');

    // Fetch chart data using PHP
    <?php
    $chartData = fetchChartData();
    ?>

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($chartData['countries']); ?>,
            datasets: [{
                label: 'Popularity of Ramen',
                data: <?php echo json_encode($chartData['popularity']); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('ramenStyleChart').getContext('2d');
    //ctx.canvas.style.height = '50px';// Set the width of the canvas element
    //ctx.canvas.style.width = '75px';
    // Fetch top ramen styles using PHP
    <?php
    $ramenStyleData = fetchTopRamenStyles();
    ?>

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode(array_column($ramenStyleData, 'style')); ?>,
            datasets: [{
                data: <?php echo json_encode(array_column($ramenStyleData, 'count')); ?>,
            }]
        }
    });
</script>

<script>
    var ctx = document.getElementById('popularBrandChart').getContext('2d');

    // Fetch most popular brands using PHP
    <?php
    $brandData = fetchMostPopularBrands();
    ?>

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($brandData, 'brand')); ?>,
            datasets: [{
                data: <?php echo json_encode(array_column($brandData, 'count')); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>


<?php
include "footer.php";

?>