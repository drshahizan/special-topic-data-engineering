<?php

include ('dbconnect.php');

if (isset($_POST["submit"]))
{
    $yid = $_POST['yid'];
    $yperiod = $_POST['yperiod'];
    $pname = $_POST['pname'];
    $aname = $_POST['aname'];
    $yvalue = $_POST['yvalue'];
    $tdesc = $_POST['tdesc'];

    $sql="UPDATE tb_year 
          SET y_period='$yperiod', y_value='$yvalue'
          WHERE y_id = '$yid'";

    mysqli_query($con, $sql);

    echo '<script>alert("Data modified successfully")</script>';
}

mysqli_close($con);

echo "<script>window.top.location.href='../StaticIP_dashboard/year.php' </script>";
?>