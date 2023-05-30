<?php
require_once 'C:\xampp1\vendor\autoload.php'; 
$client = new MongoDB\Client("mongodb://localhost:27017");

$student = $client->student;
$collection = $student->studentcollection;

?>