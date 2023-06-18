<?php

include ('dbconnect.php');

if (isset($_POST["submit"]))
{
    $mid = $_POST['mid'];
    $mperiod = $_POST['mperiod'];
    $pname = $_POST['pname'];
    $aname = $_POST['aname'];
    $mvalue = $_POST['mvalue'];
    $tdesc = $_POST['tdesc'];

    $sql="UPDATE tb_month 
          SET m_period='$mperiod', m_value='$mvalue'
          WHERE m_id = '$mid'";

    mysqli_query($con, $sql);

    echo '<script>alert("Data modified successfully")</script>';
}

mysqli_close($con);

echo "<script>window.top.location.href='../StaticIP_dashboard/month.php' </script>";
?>