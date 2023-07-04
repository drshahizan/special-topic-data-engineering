<?php 
$yearly_data = file_get_contents('./data/yearly_data.json');

// Decode JSON data to PHP associative array
$yearly_data = json_decode($yearly_data, true);

// encode the data into json format
//$monthly_data_js = json_encode($monthly_data, JSON_PRETTY_PRINT);
?>
