<?php

namespace DesignPatternsInPhp\Observer;

use DesignPatternsInPhp\Observer\DisplayElement\Observer;

interface Subject
{
    /**
     * @param Observer $observer
     * @return void
     */
    public function registerObserver(Observer $observer): void;

    /**
     * @param Observer $observer
     * @return void
     */
    public function removeObserver(Observer $observer): void;

    /**
     * @return void
     */
    public function notifyObservers(): void;
}