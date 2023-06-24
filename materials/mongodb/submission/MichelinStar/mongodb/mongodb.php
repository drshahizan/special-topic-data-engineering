<?php
require 'vendor/autoload.php'; // Include the MongoDB PHP driver

// Connect to MongoDB
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

// Select a database
$db = $mongoClient->selectDatabase('MichelinStar');
$collection = $db->ramen;

?>