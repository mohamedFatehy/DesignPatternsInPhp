<?php

use DesignPatternsInPhp\Factory\FactoryMethod\ChicagoPizzaStore;
use DesignPatternsInPhp\Factory\FactoryMethod\NYPizzaStore;

require __DIR__ . '/../../../vendor/autoload.php';

$nyPizzaStore = new NYPizzaStore();

$nyPizzaStore->orderPizza('cheese');
echo "\n ---------------------- \n";

$chicagoPizzaStore = new ChicagoPizzaStore();
$chicagoPizzaStore->orderPizza('veggie');