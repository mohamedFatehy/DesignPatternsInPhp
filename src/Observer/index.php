<?php

use DesignPatternsInPhp\Observer\DisplayElement\CurrentConditionDisplay;
use DesignPatternsInPhp\Observer\DisplayElement\TempStatisticalDisplay;
use DesignPatternsInPhp\Observer\WeatherData;

require __DIR__ . '/../../vendor/autoload.php';

// the subject that holds the state
$weatherData = new WeatherData();

// register the observers that listens to subject($weatherData)
new CurrentConditionDisplay($weatherData);
new TempStatisticalDisplay($weatherData);

// simulate the state change to notify the observers
$weatherData->setMeasurements(7, 7, 2.5);
sleep(1);
$weatherData->setMeasurements(8, 8, 2.9);
sleep(1);
$weatherData->setMeasurements(10, 10, 2.1);