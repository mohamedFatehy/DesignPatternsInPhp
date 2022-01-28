<?php

namespace DesignPatternsInPhp\Decorator\CondimentDecorator;

use DesignPatternsInPhp\Decorator\Beverage;
use DesignPatternsInPhp\Decorator\CondimentDecorator;

class SteamedMilk extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getCost(): float
    {
        return $this->beverage->getCost() + 0.10;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Steamed Milk';
    }
}