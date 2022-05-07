<?php

use DesignPatternsInPhp\Observer\DisplayElement\CurrentConditionDisplay;
use DesignPatternsInPhp\Observer\DisplayElement\TempStatisticalDisplay;
use DesignPatternsInPhp\Observer\WeatherData;
use DesignPatternsInPhp\Singleton\Singleton;

require __DIR__ . '/../../vendor/autoload.php';

// create Singleton instance
$singleton1 = Singleton::getInstance();
echo $singleton1->getName() . "\n";
$singleton1->setName('name has been set from the fist instance');

$singleton2 = Singleton::getInstance();
echo "Iam in Instance 2 But " . $singleton2->getName() . "\n";
$singleton2->setName('name has been set from the second instance');

$singleton3 = Singleton::getInstance();
echo "Iam in Instance 3 But " . $singleton3->getName() . "\n";
