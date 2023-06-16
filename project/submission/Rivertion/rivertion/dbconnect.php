<?php

 //Set DB Parameters
 $host= "localhost";
 $username = "root";
 $password = "";
 $dbname = "db_rivertion";

 //Create Connection
 $con = mysqli_connect($host,$username,$password,$dbname);

if(!$con)
{
    die("Connection failed: ". mysqli_connect_error());
}

//Check connection

//Close connection

 ?>