<?php
include("headeruser.php");
include("dbconnect.php");

$showId = $_GET['show_id'];
$recommendations = json_decode(urldecode($_GET['recommendations']), true);

$query = "SELECT show_id, show_name FROM tb_show";
$result = mysqli_query($con, $query);

$showNames = array();
while ($row = mysqli_fetch_assoc($result)) {
    $showNames[$row['show_id']] = $row['show_name'];
}

?>

<style>
    .container {
        margin: 20px;
        padding: 20px;
    }

    .panel-default {
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .panel-body {
        padding: 15px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {

        padding-right: 5px;
        text-align: left;
    }

    .table th {
        background-color: #f5f5f5;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
    }

    .btn-primary:hover {
        background-color: #0069d9;
    }
</style>

<div class="container">
    <div class="container-fluid">
        <div class="text-right float-right">
            <button type="button" class="btn btn-outline-dark" onclick="window.location.href='recommendation.php'">Refresh</button>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>TV Shows Recommendation Table</h2>

                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Show Name</th>
                            <th>Similarity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($recommendations as $recommendedShowId => $similarities) {
                            $recommendedShowName = $showNames[$recommendedShowId];
                            if (!empty($recommendedShowName)) {
                        ?>
                                <tr>
                                    <td><?php echo $recommendedShowName; ?></td>
                                    <td>
                                        <?php
                                        foreach ($similarities as $showId => $similarity) {
                                            $showName = $showNames[$showId];
                                            // Determine the CSS class based on similarity range
                                            $colorClass = ($similarity >= 0.5) ? 'bg-success' : 'bg-danger';
                                        ?>
                                            <div class="progress" style="margin-bottom: 10px;">
                                                <div class="progress-bar progress-bar-striped <?php echo $colorClass; ?>" role="progressbar" style="width: <?php echo $similarity * 100; ?>%;" aria-valuenow="<?php echo $similarity * 100; ?>" aria-valuemin="0" aria-valuemax="100">
                                                    <?php echo $showName; ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>