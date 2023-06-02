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
            <h1>Content goes here</h1>
            <p>Excepteur nisi magna aliqua excepteur ullamco amet tempor. Excepteur ad ullamco dolore mollit enim nisi mollit excepteur. Deserunt cupidatat deserunt ipsum duis enim. Duis labore magna dolor duis laboris nostrud ex ea proident cupidatat laborum officia. Laboris magna do enim dolore in aute eiusmod et. Excepteur velit do tempor proident esse. Qui culpa occaecat cillum sunt consequat officia velit excepteur non cillum.</p>
            <div>
                <canvas id="myChart"></canvas>
            </div>
            <script src="js/dash_chart.js"></script>
            <?php
                include "js/fetch.php";
            ?>
        </div>
    </div>       
    </div>


    
</body>
</html>