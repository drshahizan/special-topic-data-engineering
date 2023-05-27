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
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if ($count == 0) {
  $sql = "INSERT INTO customer(id, gender, age, annual_income, spending_score, profession, work_experience) VALUES ('$id','$gender', '$age','$annual_income','$spending_score','$profession','$work_experience')";

  mysqli_query($con, $sql);

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
} else {
  // Update customer data in both MySQL and MongoDB
  $sql = "UPDATE customer SET gender='$gender', age='$age', annual_income='$annual_income', spending_score='$spending_score', profession='$profession', work_experience='$work_experience' WHERE id='$id'";
  mysqli_query($con, $sql);

  $customerData = array(
    'Gender' => $gender,
    'Age' => $age,
    'Annual Income ($)' => $annual_income,
    'Spending Score (1-100)' => $spending_score,
    'Profession' => $profession,
    'Work Experience' => $work_experience
  );

  // Update the customer data in the collection
  $collection->updateOne(['CustomerID' => (int)$id], ['$set' => $customerData]);

  header("Location: customerlist.php");
}
?>
