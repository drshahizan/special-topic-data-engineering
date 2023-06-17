<?php
include 'cbssessionCustomer.php'; 
if(!session_id())
{
  session_start();
}

//Connect to DB
include ('dbconnect.php');

//Get Booking ID
If(isset($_GET['id']))
{
  $bid = $_GET['id'];
}


//SQL Delete operation
$sql = "DELETE FROM tb_booking WHERE b_id='$bid'";


// Execute SQL
$result = mysqli_query($con, $sql);

// connect mongodb
include ('mongodbConnect.php');

// Check if the booking ID is provided
if (isset($_GET['id'])) {
    $bid = $_GET['id'];

    // Find the booking document in MongoDB
    $bookingDocument = $collection->findOne(['b_id' => (int) $bid]);

    if ($bookingDocument) {
        // Get the ObjectId of the booking document
        $bookingObjectId = $bookingDocument->_id;

        // Delete the booking document in MongoDB
        $collection->deleteOne(['_id' => $bookingObjectId]);

    } else {
        echo "Booking document not found in MongoDB.";
    }
} else {
    echo "Booking ID not provided.";
}


//Close Connection
mysqli_close($con);

//Redirect Successfull notification
header('Location: customermanage.php');


?>