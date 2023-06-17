<?php
include 'dbconnect.php'; 
include 'mongodb1.php';

$sid = $_POST['sid'];
$sname = $_POST['sname'];
$sage = $_POST['sage'];
$sgrade = $_POST['sgrade'];
$snumber = $_POST['snumber'];

// Update MySQL database
$sql = "UPDATE studentInfo SET sname='$sname', sage='$sage', sgrade='$sgrade', snumber='$snumber' WHERE sid='$sid'";

if (mysqli_query($conn, $sql)) {
    echo "Student record updated successfully in MySQL database";
} else {
    echo "Error updating record in MySQL database: " . mysqli_error($conn);
}

// Update MongoDB
$mongo = new MongoDB\Client("mongodb://localhost:27017");
$student = $mongo->student;
$collection = $student->studentcollection;

$update = array(
    '$set' => array(
        'sname' => $sname,
        'sage' => $sage,
        'sgrade' => $sgrade,
        'snumber' => $snumber
    )
);

$result = $collection->updateOne(['sid' => $sid], $update);

if ($result->getModifiedCount() > 0) {
    echo "Student record updated successfully in MongoDB";
} else {
    echo "Error updating record in MongoDB";
}
?>
