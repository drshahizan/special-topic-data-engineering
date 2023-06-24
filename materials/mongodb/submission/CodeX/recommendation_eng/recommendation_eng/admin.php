<?php 

include 'rec_engsession.php';
if(!session_id())
{
  session_start();
}


/*
include 'headeradmin.php'; 
include 'dbconnect.php';
$uic = $_SESSION['uic'];


$sql = "SELECT * FROM tb_tvshow";

$result=mysqli_query($con,$sql);

?>


<div class="container">

    <h3>List of TV Shows</h3><br>
    <table class="table table-hover">
    <thead>
        <tr>
         <th scope="col">TV Show Name</th>
         <th scope="col">Season Status</th>
         <th scope="col">Number of Season</th>
         <th scope="col">Operation</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['show_name']."</td>";
            echo "<td>".$row['show_season_stat']."</td>";
            echo "<td>".$row['show_season']."</td>";
            echo "<td>";
              echo"<a href='admin.php?id=".$row['show_name']."' class='btn btn-warning'>Modify</a> &nbsp";
                echo"<a href='admin.php?id=".$row['show_name']."' class='btn btn-danger'>Delete</a> &nbsp";
            echo "</td>";
            echo "</tr>";
        }
        ?>

     </tbody>
    </table>
</div>
*/


include 'headeradmin.php';
include 'dbconnect.php';
$uic = $_SESSION['uic'];

$sql = "SELECT tb_tvshow.*, tb_status.s_stat
        FROM tb_tvshow
        LEFT JOIN tb_status ON tb_tvshow.show_season_stat = tb_status.s_id";

$result = mysqli_query($con, $sql);
?>

<div class="container">
    <h3>List of TV Shows</h3><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">TV Show Name</th>
                <th scope="col">Multiple Seasons</th>
                <th scope="col">Number of Season</th>
                <th scope="col">Rating</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['show_name']."</td>";
                echo "<td>".$row['s_stat']."</td>";
                echo "<td>".$row['show_season']."</td>";
                echo "<td>".$row['show_rate']."</td>";
                echo "<td>";
                echo "<a href='admin.php?id=".$row['show_name']."' class='btn btn-warning'>Modify</a> &nbsp";
                echo "<a href='admin.php?id=".$row['show_name']."' class='btn btn-danger'>Delete</a> &nbsp";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>




<?php include 'footer.php'; ?>


<script type="text/javascript">
    var elems = document.getElementsByClassName('btn btn-danger');
    var confirmIt = function (e) {
        if (!confirm('Are you sure to delete?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>