<?php

require_once 'vendor/autoload.php';

$city = readline("Hello and welcome to the simplest weather report! Enter city: ");

$apiClient = new App\ApiClient();
$weatherReport = $apiClient->getReport($city);

echo '********************' . PHP_EOL;
echo "The temperature is " . $weatherReport->getTemperature() . PHP_EOL;
echo "The humidity is " . $weatherReport->getHumidity() . PHP_EOL;
echo "It feels like we have " . $weatherReport->getFeelsLike() . PHP_EOL;
echo "And the weather is " . $weatherReport->getDescription() . PHP_EOL;