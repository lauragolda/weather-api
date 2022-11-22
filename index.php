<?php

require_once "vendor/autoload.php";

use App\API;

$apiKey = ' ';

$chosenLocation = readline('Enter the city: ');

$api = new API($apiKey);

$weather = $api->getWeather($chosenLocation);

echo "Temperature in {$weather->getLocationName()} is {$weather->getTemperature()}, feels like {$weather->getFeelsLike()}" . PHP_EOL;
