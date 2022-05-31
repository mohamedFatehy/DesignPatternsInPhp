<?php

namespace DesignPatternsInPhp\Command\Commands;

use DesignPatternsInPhp\Command\VendorClasses\GarageDoor;
use DesignPatternsInPhp\Command\VendorClasses\Light;

class GarageDoorOpenedCommand implements Command
{
    private GarageDoor $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->open();
    }
}