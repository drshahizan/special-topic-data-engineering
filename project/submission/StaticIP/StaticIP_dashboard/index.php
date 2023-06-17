<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include "global/cdn.php";
    ?>  
    <style>
        .chart-container iframe{
            width: 100%;
            height: 500px;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>

    <div class="container" style="width: 2500px;">
    <div class="row">
        <?php
            include "global/nav_bar.php";
        ?>
        <div class="col-md-9 pt-5">
            <!-- Content container -->
            <iframe title="dashboard" width="1024" height="1060" src="https://app.powerbi.com/view?r=eyJrIjoiZjJhNTdhYWQtMjZlMi00YTZkLWE3ZmEtNjcxOWFkZWJkZmIyIiwidCI6IjBlMGRiMmFkLWM0MTYtNDdjNy04OGVjLWNlYWM0ZWU3Njc2NyIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                <div class="chart-container">
                    <hr />
                    <h3>Bunker</h3>
                    <iframe src="chart/Bunker_barchart.svg"></iframe>
                    <h3>Consumption</h3>
                    <iframe src="chart/Consumption_barchart.svg"></iframe>
                    <h3>Export</h3>
                    <iframe src="chart/Exports_barchart.svg"></iframe>
                    <h3>Import</h3>
                    <iframe src="chart/Imports_barchart.svg"></iframe>
                    <h3>Production</h3>
                    <iframe src="chart/Production_barchart.svg"></iframe>
                </div>
                

        </div>
    </div>       
    </div>


    
</body>
</html>
