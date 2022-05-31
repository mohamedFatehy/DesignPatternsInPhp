<?php

namespace DesignPatternsInPhp\Command;

use DesignPatternsInPhp\Command\Commands\GarageDoorOpenedCommand;
use DesignPatternsInPhp\Command\Commands\LightOnCommand;
use DesignPatternsInPhp\Command\VendorClasses\GarageDoor;
use DesignPatternsInPhp\Command\VendorClasses\Light;

class RemoteControlTest
{
    public function main()
    {

        $remote = new SimpleRemoteControl();
        $light = new Light();
        $garageDoor = new GarageDoor();

        $lightOnCommand = new LightOnCommand($light);
        $garageDoorOpenCommand = new GarageDoorOpenedCommand($garageDoor);

        $remote->setCommand($lightOnCommand);
        echo "test turning light on \n";
        $remote->buttonPressed();

        echo "------------------------\n";
        $remote->setCommand($garageDoorOpenCommand);
        echo "test opening Garage Door \n";
        $remote->buttonPressed();

    }
}