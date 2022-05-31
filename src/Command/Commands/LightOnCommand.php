<?php

namespace DesignPatternsInPhp\Command\Commands;

use DesignPatternsInPhp\Command\VendorClasses\Light;

class LightOnCommand implements Command
{
    private Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }
}