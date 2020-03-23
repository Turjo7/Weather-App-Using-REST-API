<?php
$apiKey = "f46f08b2f6c4e7a26537ad4c58cc693b"; // API Key
$cityId = "1185241"; // City of Dhaka
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;



$ch = curl_init(); // Initialize a cURL session

curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


/*
curl_setopt-> Set an option for a cURL transfer
CURLOPT_HEADER-> Pass headers to the data stream
CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
CURLOPT_URL-> Provide the URL to use in the request
CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
CURLOPT_VERBOSE-> Set verbose mode on/off
CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate


*/


$response = curl_exec($ch); // curl_exec => Execute the given cURL session.

curl_close($ch);
$data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
$currentTime = time();
?>


<!-- Follow https://openweathermap.org/current for using the API -->
<h2>City Name: <?php echo $data->name; ?></h2>
<h2>City Id: <?php echo $data->id; ?></h2>


<h2>1. Longitude: <?php echo $data->coord->lon; ?></h2>
<h2>2. Latitude: <?php echo $data->coord->lat; ?></h2>
<h2>3. Base: <?php echo $data->base; ?></h2>
<h2>4. Temparature: <?php echo $data->main->temp; ?></h2>
<h2>5. Feels Like: <?php echo $data->main->feels_like; ?></h2>
<h2>6. Air Pressure: <?php echo $data->main->pressure; ?></h2>
<h2>7. Humidity: <?php echo $data->main->humidity; ?></h2>
<h2>8. Minumum Temparature: <?php echo $data->main->temp_min; ?></h2>
<h2>9. Maximum Temparature: <?php echo $data->main->temp_max; ?></h2>
<h2>10. Wind Speed: <?php echo $data->wind->speed; ?></h2>
<h2>11. Wind Direction: <?php echo $data->wind->deg; ?></h2>
<h2>12. Cloud: <?php echo $data->clouds->all; ?></h2>
<h2>13. Time of Data Calculation: <?php echo $data->dt; ?></h2>
<h2>14. Country : <?php echo $data->sys->country; ?></h2>
<h2>15. Sun Rise : <?php echo $data->sys->sunrise; ?></h2>
<h2>16. Sun Set : <?php echo $data->sys->sunset; ?></h2>
<h2>17. TimeZone : <?php echo $data->timezone; ?></h2>





