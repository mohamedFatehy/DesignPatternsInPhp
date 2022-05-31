<?php

namespace DesignPatternsInPhp\Command\VendorClasses;

class GarageDoor
{
    public function open() {
        echo "light turned opened successfully \n";
    }

    public function close() {
        echo "light turned closed successfully \n";
    }
}