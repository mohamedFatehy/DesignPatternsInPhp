<?php

namespace DesignPatternsInPhp\Decorator\Beverages;

use DesignPatternsInPhp\Decorator\Beverage;

class HouseBlend extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description = 'HouseBlend';
    }

    public function getCost(): float
    {
        return 0.89;
    }
}