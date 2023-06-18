<?php
include 'cbssessionCustomer.php'; 
if(!session_id())
{
  session_start();
}

include ('dbconnect.php');

//Retrieve data from form
//$uic = $_SESSION['uic'];
$fbid = $_POST['fbid'];
$fcar = $_POST['fcar'];
$fbdate = $_POST['fbdate'];
$frdate = $_POST['frdate'];

//Calculate num of day/s
$pickup = date('Y-m-d H:i:s', strtotime($fbdate));
$return = date('Y-m-d H:i:s', strtotime($frdate));
$daydiff = abs(strtotime($frdate)-strtotime($fbdate));
$numday = $daydiff/(60*60*24);

//Get vehicle price from DB
$sqlprice = "SELECT v_price FROM tb_vehicle WHERE v_reg = '$fcar'";
$resultprice = mysqli_query($con, $sqlprice);
$rowprice = mysqli_fetch_array($resultprice);

//Calculate total price
$totalprice = $numday*($rowprice['v_price']);

//SQL UPDATE booking into DB
$sql = "UPDATE tb_booking 
    SET b_vehicle='$fcar', b_bdate='$fbdate', b_rdate='$frdate', b_total='$totalprice', b_status='1'
    WHERE b_id='$fbid'";

//Check SQL execution
var_dump($sql);

//Exeecute SQL
$result = mysqli_query($con, $sql);

// connect mongodb
include ('mongodbConnect.php');

// Check if the booking ID is provided
if (isset($_POST['fbid'])) {
    $fbid = $_POST['fbid'];

    // Find the booking document in MongoDB
    $bookingDocument = $collection->findOne(['b_id' => (int) $fbid]);

    if ($bookingDocument) {
        // Get the ObjectId of the booking document
        $bookingObjectId = $bookingDocument->_id;

        // Update the booking document in MongoDB
        $updateResult = $collection->updateOne(
            ['_id' => $bookingObjectId],
            ['$set' => [
                'b_vehicle' => $fcar,
                'b_bdate' => $fbdate,
                'b_rdate' => $frdate,
                'b_total' => $totalprice,
                'b_status' => '1'
            ]]
        );

    } else {
        echo "Booking document not found in MongoDB.";
    }
} else {
    echo "Booking ID not provided.";
}

//Close connection
mysqli_close($con);


//Redirect or successful notification
header ('Location: customermanage.php');

?>