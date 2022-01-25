<?php

namespace DesignPatternsInPhp\Observer\DisplayElement;

interface Observer
{
    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     * @return void
     */
    public function update(float $temperature, float $humidity, float $pressure): void;
}