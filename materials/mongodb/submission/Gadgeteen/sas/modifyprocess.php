<?php 

//connect to database
include ('dbconnect.php');

require 'mongodb.php';  
  
 

//retrieve data from form
$id = $_POST['id'];
$city = $_POST['city'];
$customer = $_POST['customer'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$total = $_POST['total'];
$sdate = $_POST['date'];
$income = $_POST['income'];
$rating = $_POST['rating'];

$sql= "UPDATE sales
		SET City=?, Customer=?, Gender=?, Category=?, Total=?, Date=?, Gross_income=?, Rating=?
		WHERE Sales_id = ?";

//Check SQL execution (OPTIONAL)
var_dump($sql);

$sth = $con->prepare($sql);
$sth->bind_param('ssssdsddi', $city, $customer, $gender, $category, $total, $sdate, $income, $rating, $id);
$sth->execute();

$date = new DateTime($sdate);
 
$collection->updateOne(  
		['Sales_id' => (int)$id],  
		['$set' => [
			'City' => $city,
			'Customer' => $customer,  
			'Gender' => $gender,  
			'Category' => $category,  
			'Total' => (double)$total,  
			'Date' => new MongoDB\BSON\UTCDatetime(($date->getTimestamp())*1000),  
			'Gross_income' => (double)$income,  
			'Rating' => (double)$rating,  
			]]  
);  

 
//Check SQL execution (OPTIONAL)  
var_dump($sth); 

//Close Connection
mysqli_close($con); 

//Redirect or successful notification
echo '<script>
alert("Sales Modified Successfully!");
window.location.href="index.php";
</script>';

// echo '<script>alert("Sale created successfully!")</script>';
// header ('Location: index.php');

?>