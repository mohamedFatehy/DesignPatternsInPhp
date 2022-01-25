<?php

namespace DesignPatternsInPhp\Observer;

use DesignPatternsInPhp\Observer\DisplayElement\Observer;

class WeatherData implements Subject
{
    public array $observers;
    public Observer $observer;

    public float $temperature;
    public float $humidity;
    public float $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        // TODO: Implement removeObserver() method.
    }

    /**
     * @return void
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $this->observer = $observer;
            $this->observer->update($this->temperature,$this->humidity,$this->pressure);
        }
    }

    /**
     * @return void
     */
    public function measuredChaged(): void
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     * @return void
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measuredChaged();
    }
}