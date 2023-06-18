<?php 

//connect to database
include ('dbconnect.php');

require 'mongodb.php';  
  
 

//retrieve data from form
$city = $_POST['city'];
$customer = $_POST['customer'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$total = $_POST['total'];
$sdate = $_POST['date'];
$income = $_POST['income'];
$rating = $_POST['rating'];

//SQL Insert (CREATE) booking into database
$sql= "INSERT INTO sales (City, Customer, Gender, Category, Total, Date, Gross_income, Rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

//Check SQL execution (OPTIONAL)
var_dump($sql);

$sth = $con->prepare($sql);
$sth->bind_param('ssssdsdd', $city, $customer, $gender, $category, $total, $sdate, $income, $rating);
$sth->execute();
$last_id = mysqli_insert_id($con);

$insertOneResult = $collection->insertOne([  
  'Sales_id' => int($last_id),
  'City' => $city,
  'Customer' => $customer,  
  'Gender' => $gender,  
  'Category' => $category,  
  'Total' => (double)$total,  
  'Date' => new MongoDB\BSON\UTCDatetime(($date->getTimestamp())*1000),  
  'Gross_income' => (double)$income,  
  'Rating' => (double)$rating,  
]); 
 
//Check SQL execution (OPTIONAL)  
var_dump($sth); 

//Close Connection
mysqli_close($con); 

//Redirect or successful notification
echo '<script>
alert("Sales Created Successfully!");
window.location.href="index.php";
</script>';

?>