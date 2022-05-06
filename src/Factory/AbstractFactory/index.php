<?php


use DesignPatternsInPhp\Factory\AbstractFactory\ChicagoPizzaStore;
use DesignPatternsInPhp\Factory\AbstractFactory\NYPizzaStore;

require __DIR__ . '/../../../vendor/autoload.php';

$nyPizzaStore = new NYPizzaStore();

$pizza = $nyPizzaStore->orderPizza('cheese');
echo "Ethan ordered a " .  $pizza->getName() ." \n ==========================ORDER DELIVERED======================= \n";

$chicagoPizzaStore = new ChicagoPizzaStore();
$pizza = $chicagoPizzaStore->orderPizza('veggie');
echo "Joel ordered a " .  $pizza->getName() ." \n ==========================ORDER DELIVERED======================= \n";