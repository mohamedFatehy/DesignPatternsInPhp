<?php

namespace DesignPatternsInPhp\Observer\DisplayElement;

use DesignPatternsInPhp\Observer\WeatherData;

class TempStatisticalDisplay implements Observer, DisplayElement
{
    public float $temperature;

    public function __construct(WeatherData $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    /**
     * @return void
     */
    public function display(): void
    {
        echo sprintf("Temperature Statistic Display : (MIN/AVG/MAX) -> (%d / %d / %d) C, y \n", ($this->temperature - 2), $this->temperature, ($this->temperature + 2));
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
        $this->display();
    }
}