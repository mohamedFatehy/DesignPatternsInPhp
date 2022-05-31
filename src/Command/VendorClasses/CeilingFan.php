<?php

namespace DesignPatternsInPhp\Command\VendorClasses;

use DesignPatternsInPhp\Command\Commands\Command;

class CeilingFan
{
    public function on() {
        echo "ceilingFan turned on successfully \n";
    }

    public function off() {
        echo "ceilingFan turned off successfully \n";
    }
}