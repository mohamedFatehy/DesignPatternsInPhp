<?php

namespace DesignPatternsInPhp\Decorator;

abstract class Beverage
{
    public string $description = '';

    /**
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * @return float
     */
    abstract public function getCost(): float;
}