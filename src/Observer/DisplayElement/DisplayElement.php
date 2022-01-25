<?php

namespace DesignPatternsInPhp\Observer\DisplayElement;

interface DisplayElement
{
    /**
     * @return void
     */
    public function display(): void;
}