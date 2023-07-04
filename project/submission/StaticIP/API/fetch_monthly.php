<?php 
$monthly_data = file_get_contents('./data/monthly_data.json');

// Decode JSON data to PHP associative array
$monthly_data = json_decode($monthly_data, true);

// encode the data into json format
//$monthly_data_js = json_encode($monthly_data, JSON_PRETTY_PRINT);
?>
