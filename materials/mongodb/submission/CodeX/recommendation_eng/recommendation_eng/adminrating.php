<?php
include("headeradmin.php");
include("dbconnect.php");

$query = "SELECT r.rate_id, r.rate_show_id, r.rate, s.show_name FROM tb_rate r JOIN tb_show s ON r.rate_show_id = s.show_id";
$result = mysqli_query($con, $query);
?>



<style>
    .container-fluid-n {
        margin: 50px;
        margin-right: 100px;
        margin-left: 100px;
        padding: 'center';
    }
</style>



<div class="container-fluid-n">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2>Rating Table</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Rate ID</th>
                                <th>Show Name</th>
                                <th>Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $rateId = $row['rate_id'];
                                $showName = $row['show_name'];
                                $rate = $row['rate'];
                            ?>
                                <tr>
                                    <td><?php echo $rateId; ?></td>
                                    <td><?php echo $showName; ?></td>
                                    <td><?php echo $rate; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>