<?php

namespace DesignPatternsInPhp\Decorator\Beverages;

use DesignPatternsInPhp\Decorator\Beverage;

class Espresso extends Beverage
{
    public function getCost(): float
    {
        return 1.99;
    }

    public function getDescription(): string
    {
        return 'Espresso';
    }
}