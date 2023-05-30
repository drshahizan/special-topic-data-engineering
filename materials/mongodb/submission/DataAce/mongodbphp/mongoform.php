<?php
include 'mongodb1.php';

$mongo = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongo->student;
$collection = $db->studentcollection;

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
