<?php

require __DIR__.'/../../vendor/autoload.php';

use DesignPatternsInPhp\Strategy\MallardDuck;
use DesignPatternsInPhp\Strategy\ModelDuck;
use DesignPatternsInPhp\Strategy\WoodenDuck;

echo "--------------------- MallardDuck  --------------------------\n";

(new MallardDuck())->display();

echo "\n";

echo "--------------------- Model Duck  --------------------------\n";

(new ModelDuck())->display();

echo "\n";

echo "--------------------- Wooden Duck  --------------------------\n";

(new WoodenDuck())->display();

echo "\n";