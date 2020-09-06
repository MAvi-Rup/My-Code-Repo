<?php

  $cityid = $_POST["cityid"];

$url = 'https://api.openweathermap.org/data/2.5/weather?id='.$cityid.'&lang=en&units=metric&APPID=a89b6a71717733c168f7c572108ab293';

$contents= file_get_contents($url);
$clima= json_decode($contents);

$temp_max = $clima->main->temp_max;
$temp_min=$clima->main->temp_min;

$today = date("F j, Y, g:i a");
$cityname = $clima->name;
echo $cityname . "-" .$today ."<br>";
echo "Temp Max:" .$temp_max. "&deg;C<br>";
echo "Temp Min: " . $temp_min . "&deg;C<br>";

?>