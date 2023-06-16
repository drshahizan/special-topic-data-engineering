<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include "global/cdn.php";
    ?>  
    <title>Dashboard</title>
</head>
<body>

    <div class="container pt-3">
    <div class="row">
        <?php
            include "global/nav_bar.php";
        ?>
        <div class="col-md-9 pt-5">
            <!-- Content container -->
            <h1>Data Table</h1>
            <p>The data is separated into yearly and monthly data because there are some incomplete data</p>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="yearly.php">Yearly</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="monthly.php">Monthly</a>
                </li>
            </ul>
        </div>
    </div>       
    </div>


    
</body>
</html>