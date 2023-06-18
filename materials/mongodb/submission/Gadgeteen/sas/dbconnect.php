<?php 

//Set Database Parameter
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sales";

//Create Connection
$con = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


?>