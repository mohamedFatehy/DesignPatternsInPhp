<?php

namespace DesignPatternsInPhp\Command\Commands;

use DesignPatternsInPhp\Command\VendorClasses\CeilingFan;

class CeilingFanOnCommand implements Command
{
    private CeilingFan $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->ceilingFan->on();
    }
}