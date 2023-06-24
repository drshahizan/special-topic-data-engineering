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

  $sequenceCollection = $db->sequence;

// Function to get the next sequence value
function getNextSequenceValue($sequenceCollection)
{
    // Specify the query to find and update the sequence value
    $query = ['_id' => 'Review #'];
    $update = ['$inc' => ['seq' => 1]];
    $options = [
        'projection' => ['seq' => 1],
        'upsert' => true,
        'returnDocument' => MongoDB\Operation\FindOneAndUpdate::RETURN_DOCUMENT_AFTER
    ];

    // Execute the findAndModify command to get the next sequence value
    $sequenceDoc = $sequenceCollection->findOneAndUpdate($query, $update, $options);

    // Extract the sequence value from the document
    $sequenceValue = $sequenceDoc['seq'];

    return $sequenceValue;
}

// Generate the next sequence value
$nextSequenceValue = getNextSequenceValue($sequenceCollection) + 2580;

  $ramenData = array(
    'Review #' => $nextSequenceValue,
    'Brand' => $Brand,
    'Variety' => $Variety,
    'Style' => $Style,
    'Country' => $Country,
    'Stars' => $Stars,
    'Top Ten' => $TopTen
  );

  $collection->insertOne($ramenData);
  header("Location: ramenlist.php");
} else {
  echo "Review ID already exist";

  header("Location: ramenlist.php");
}
?>