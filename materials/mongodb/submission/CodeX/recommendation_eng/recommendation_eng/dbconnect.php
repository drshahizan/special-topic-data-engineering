<?php

//Set DATABASE PARAMETER
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_rec";

//Create Connection
$con = mysqli_connect($servername, $username, $password, $dbname);


//Check Connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

//Close Connection
