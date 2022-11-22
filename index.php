<?php

require_once "vendor/autoload.php";

use App\API;

$apiKey = '0435b779b04ba3e8fce30109338d0e85';

$chosenLocation = readline('Enter the city: ');

$api = new API($apiKey);

$weather = $api->getWeather($chosenLocation);

echo "Temperature in {$weather->getLocationName()} is {$weather->getTemperature()}, feels like {$weather->getFeelsLike()}" . PHP_EOL;