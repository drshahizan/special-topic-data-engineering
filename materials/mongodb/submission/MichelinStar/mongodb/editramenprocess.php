<?php
include "session.php";
include "dbconnect.php";
include "mongodb.php";


$id = $_POST["id"];
$Brand = $_POST["Brand"];
$Variety = $_POST["Variety"];
$Style = $_POST["Style"];
$Country = $_POST["Country"];
$Stars = $_POST["Stars"];
$TopTen = $_POST["TopTen"];

$sql = "SELECT * FROM tb_ramen WHERE Review ='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if ($count == 0) {
  $sql = "INSERT INTO tb_ramen(Review , Brand, Variety, Style, Country, Stars, TopTen) VALUES ('$id','$Brand', '$Variety','$Style','$Country','$Stars','$TopTen')";

  mysqli_query($con, $sql);

  $ramenData = array(
    'Review #' => $id,
    'Brand' => $Brand,
    'Variety' => $Variety,
    'Style' => $Style,
    'Country' => $Country,
    'Stars' => $Stars,
    'Top Ten' => $TopTen
  );

  // Insert the customer data into the collection
  $collection->insertOne($ramenData);
  header("Location: ramenlist.php");
} else {
  // Update customer data in both MySQL and MongoDB
  $sql = "UPDATE tb_ramen SET Brand='$Brand', Variety='$Variety', Style='$Style', Country='$Country', Stars='$Stars', TopTen ='$TopTen' WHERE Review ='$id'";
  mysqli_query($con, $sql);

  $ramenData = array(
    'Brand' => $Brand,
    'Variety' => $Variety,
    'Style' => $Style,
    'Country' => $Country,
    'Stars' => $Stars,
    'Top Ten' => $TopTen
  );

  // Update the customer data in the collection
  $collection->updateOne(['Review #' => (int)$id], ['$set' => $ramenData]);

  header("Location: ramenlist.php");
}
?>