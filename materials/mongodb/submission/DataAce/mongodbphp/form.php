<?php
include 'dbconnect.php'; 

$sid = $_POST['sid'];
$sname = $_POST['sname'];
$sage = $_POST['sage'];
$sgrade = $_POST['sgrade'];
$snumber = $_POST['snumber'];

// SQL query to insert the student data into the database
$sql = "INSERT INTO studentInfo (sid, sname, sage, sgrade, snumber) VALUES ('$sid', '$sname', '$sage', '$sgrade', '$snumber')";

if (mysqli_query($conn, $sql)) {
    echo "Student record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

include 'mongodb1.php';

$mongo = new MongoDB\Client("mongodb://localhost:27017");
$student = $mongo->student;
$collection = $student->studentcollection;

if ($_POST) {
    $insert = array(
        'sid' => $_POST['sid'],
        'sname' => $_POST['sname'],
        'sage' => $_POST['sage'],
        'sgrade' => $_POST['sgrade'],
        'snumber' => $_POST['snumber']
    );

    if ($collection->insertOne($insert)) {
        echo "Data is inserted";
    } else {
        echo "Failed";
    }
} else {
    echo "No data to store";
}
?>
