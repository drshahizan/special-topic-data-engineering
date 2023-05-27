<?php
include "session.php";
include "dbconnect.php";
include "mongodbconnect.php";

$id = $_POST["id"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$annual_income = $_POST["annual_income"];
$spending_score = $_POST["spending_score"];
$profession = $_POST["profession"];
$work_experience = $_POST["work_experience"];

$sql = "SELECT * FROM customer WHERE id='$id'";
$result = mysqli_query($con, $sql);  //execute sql statement
$row = mysqli_fetch_array($result);  //retrieve result
$count = mysqli_num_rows($result);   //count result found

if($count==0)
{
	$sql = "INSERT INTO customer(id, gender, age, annual_income, spending_score, profession, work_experience) VALUES ('$id','$gender', '$age','$annual_income','$spending_score','$profession','$work_experience')";

	mysqli_query($con, $sql);

	$id = (int)$id;
	$customerData = array(
		'CustomerID' => $id,
        'Gender' => $gender,
        'Age' => $age,
        'Annual Income ($)' => $annual_income,
        'Spending Score (1-100)' => $spending_score,
        'Profession' => $profession,
        'Work Experience' => $work_experience
    );

    // Insert the customer data into the collection
    $collection->insertOne($customerData);
    header("Location: customerlist.php");
}
else
{
	echo "Customer ID already exist";
}
?>