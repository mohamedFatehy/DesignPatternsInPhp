<?php

namespace DesignPatternsInPhp\Observer\DisplayElement;

use DesignPatternsInPhp\Observer\Subject;
use DesignPatternsInPhp\Observer\WeatherData;

class CurrentConditionDisplay implements Observer, DisplayElement
{
    public float $temperature;
    public float $humidity;

    public function __construct(WeatherData $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    /**
     * @return void
     */
    public function display(): void
    {
        echo "Current Condition Display : Temperature -> $this->temperature C, Humidity -> $this->humidity \n";
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     * @return void
     */
    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }
}