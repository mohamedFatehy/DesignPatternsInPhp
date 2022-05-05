<?php

use DesignPatternsInPhp\Factory\SimpleFactory\PizzaStore;

require __DIR__ . '/../../../vendor/autoload.php';

$pizzaStore = new PizzaStore();

$pizzaStore->orderPizza('cheese');
echo "\n ---------------------- \n";
$pizzaStore->orderPizza('veggie');