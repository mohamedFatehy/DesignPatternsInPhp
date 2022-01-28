<?php


use DesignPatternsInPhp\Decorator\Beverages\Espresso;
use DesignPatternsInPhp\Decorator\Beverages\HouseBlend;
use DesignPatternsInPhp\Decorator\CondimentDecorator\Mocha;
use DesignPatternsInPhp\Decorator\CondimentDecorator\Soy;
use DesignPatternsInPhp\Decorator\CondimentDecorator\SteamedMilk;

require __DIR__ . '/../../vendor/autoload.php';

// I need to order (1 espresso)
$firstOrder = new Espresso();
echo sprintf('First Order Is %s and Cost = %G', $firstOrder->getDescription(), $firstOrder->getCost());
echo "\n";

// I need to order (1 house blend with Mocha and Soy)
$secondOrder = new HouseBlend();
$secondOrder = new Mocha($secondOrder);
$secondOrder = new Soy($secondOrder);
echo sprintf('Second Order Is %s and Cost = %G', $secondOrder->getDescription(), $secondOrder->getCost());
echo "\n";


// I need to order (1 Espresso with double Mocha and Steamed Milk)
$thirdOrder = new Espresso();
$thirdOrder = new Mocha($thirdOrder);
$thirdOrder = new Mocha($thirdOrder);
$thirdOrder = new SteamedMilk($thirdOrder);
echo sprintf('Third Order Is %s and Cost = %G', $thirdOrder->getDescription(), $thirdOrder->getCost());
echo "\n";