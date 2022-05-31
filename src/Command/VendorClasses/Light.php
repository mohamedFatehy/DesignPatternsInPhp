<?php

namespace DesignPatternsInPhp\Command\VendorClasses;

class Light
{
    public function on() {
        echo "light turned on successfully \n";
    }

    public function off() {
        echo "light turned off successfully \n";
    }
}