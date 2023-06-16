<?php
// api key from eia.gov
$api_key = '&api_key=VIppHxjkgK1XFRSRHUguBC3Nk73dskWjHqhjz4Bp';

// api url from eia.gov combine with api key
$api_monthly = 'https://api.eia.gov/v2/international/data/?frequency=monthly&data[0]=value&facets[activityId][]=1&facets[activityId][]=2&facets[activityId][]=3&facets[activityId][]=5&facets[productId][]=5&facets[productId][]=53&facets[productId][]=54&facets[productId][]=55&facets[productId][]=56&facets[productId][]=57&facets[productId][]=58&facets[productId][]=59&facets[productId][]=78&facets[productId][]=781&facets[productId][]=782&facets[productId][]=783&facets[productId][]=784&facets[productId][]=785&facets[productId][]=786&facets[productId][]=787&facets[productId][]=788&facets[productId][]=789&facets[countryRegionId][]=MYS&facets[unit][]=MT&facets[unit][]=TBPD&sort[0][column]=period&sort[0][direction]=desc&offset=0&length=5000'.$api_key;
$api_yearly = 'https://api.eia.gov/v2/international/data/?frequency=annual&data[0]=value&facets[activityId][]=1&facets[activityId][]=12&facets[activityId][]=13&facets[activityId][]=2&facets[activityId][]=23&facets[activityId][]=3&facets[activityId][]=33&facets[activityId][]=34&facets[activityId][]=4&facets[activityId][]=5&facets[activityId][]=6&facets[activityId][]=7&facets[activityId][]=8&facets[activityId][]=9&facets[productId][]=1&facets[productId][]=11&facets[productId][]=116&facets[productId][]=117&facets[productId][]=119&facets[productId][]=12&facets[productId][]=13&facets[productId][]=130&facets[productId][]=14&facets[productId][]=2&facets[productId][]=21&facets[productId][]=26&facets[productId][]=27&facets[productId][]=28&facets[productId][]=29&facets[productId][]=3&facets[productId][]=3002&facets[productId][]=33&facets[productId][]=34&facets[productId][]=35&facets[productId][]=36&facets[productId][]=37&facets[productId][]=38&facets[productId][]=4002&facets[productId][]=4006&facets[productId][]=4008&facets[productId][]=4010&facets[productId][]=43&facets[productId][]=44&facets[productId][]=4411&facets[productId][]=4413&facets[productId][]=4415&facets[productId][]=4417&facets[productId][]=4418&facets[productId][]=4419&facets[productId][]=47&facets[productId][]=4701&facets[productId][]=4702&facets[productId][]=48&facets[productId][]=5&facets[productId][]=53&facets[productId][]=54&facets[productId][]=55&facets[productId][]=56&facets[productId][]=57&facets[productId][]=58&facets[productId][]=59&facets[productId][]=62&facets[productId][]=63&facets[productId][]=64&facets[productId][]=65&facets[productId][]=66&facets[productId][]=67&facets[productId][]=6798&facets[productId][]=6799&facets[productId][]=68&facets[productId][]=6899&facets[productId][]=7&facets[productId][]=79&facets[productId][]=80&facets[productId][]=81&facets[productId][]=82&facets[productId][]=8399&facets[productId][]=8499&facets[countryRegionId][]=MYS&facets[unit][]=MT&facets[unit][]=TBPD&sort[0][column]=period&sort[0][direction]=desc&offset=0&length=5000'.$api_key;

// Get cURL resource
$monthly_data = file_get_contents($api_monthly);
$yearly_data = file_get_contents($api_yearly);

// Decode JSON data to PHP associative array
$monthly_data = json_decode($monthly_data, true);
$yearly_data = json_decode($yearly_data, true);

// Specify the file path where you want to save or update the JSON file

$filePath_monthly = 'monthly_data.json';
$filePath_yearly = 'yearly_data.json';

//encode the data into json format
$monthly_data = json_encode($monthly_data, JSON_PRETTY_PRINT);
$yearly_data = json_encode($yearly_data, JSON_PRETTY_PRINT);

// Write the JSON string to the file
if (file_put_contents($filePath_monthly, $monthly_data) && file_put_contents($filePath_yearly, $yearly_data)) {
    echo 'JSON file saved or updated successfully.';
} else {
    echo 'Error writing JSON file.';
}

// Redirect to the homepage
header("Location: ../index.php");
exit;
?>