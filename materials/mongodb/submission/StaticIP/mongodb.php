<?php
require 'vendor/autoload.php'; // Include the MongoDB PHP driver

// Connect to MongoDB
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

// Select a database
$database = $mongoClient->selectDatabase('fbc_reviewer');
$collection1 = $database->selectCollection('examproper');
$collection2 = $database->selectCollection('questions');
$collection3 = $database->selectCollection('studentdata_exams');
$collection4 = $database->selectCollection('studentresult_exams');
$collection5 = $database->selectCollection('tblexamquestion');
$collection6 = $database->selectCollection('users');
?>
