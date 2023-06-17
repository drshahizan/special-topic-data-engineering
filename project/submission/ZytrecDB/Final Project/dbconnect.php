<?php 
//Set Db parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_spotify";
//Create DB Connection
$con = mysqli_connect($servername, $username, $password, $dbname);
//Check DB Connection

require 'vendor/autoload.php'; // Include the Composer autoloader

// Create a new MongoDB client
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

// Select the database and collection
$database = $mongoClient->selectDatabase('posts');
$result = $database->selectCollection('spotify');

// Perform MongoDB operations
// ...

?>