<?php

namespace DesignPatternsInPhp\Command;

use DesignPatternsInPhp\Command\Commands\CeilingFanOffCommand;
use DesignPatternsInPhp\Command\Commands\CeilingFanOnCommand;
use DesignPatternsInPhp\Command\Commands\GarageDoorClosedCommand;
use DesignPatternsInPhp\Command\Commands\GarageDoorOpenedCommand;
use DesignPatternsInPhp\Command\Commands\LightOffCommand;
use DesignPatternsInPhp\Command\Commands\LightOnCommand;
use DesignPatternsInPhp\Command\VendorClasses\CeilingFan;
use DesignPatternsInPhp\Command\VendorClasses\GarageDoor;
use DesignPatternsInPhp\Command\VendorClasses\Light;

class RemoteLoader
{
    public function main()
    {
        $remote = new RemoteControl();
        $light = new Light();
        $garageDoor = new GarageDoor();
        $ceilingFan = new CeilingFan();

        $lightOnCommand = new LightOnCommand($light);
        $lightOffCommand = new LightOffCommand($light);

        $garageDoorOpenCommand = new GarageDoorOpenedCommand($garageDoor);
        $garageDoorCloseCommand = new GarageDoorClosedCommand($garageDoor);

        $ceilingFanOnCommand = new CeilingFanOnCommand($ceilingFan);
        $ceilingFanCommand = new CeilingFanOffCommand($ceilingFan);

        $remote->setCommand(0, $lightOnCommand, $lightOffCommand);
        $remote->setCommand(1, $garageDoorOpenCommand, $garageDoorCloseCommand);
        $remote->setCommand(2, $ceilingFanOnCommand, $ceilingFanCommand);

        echo $remote;

        echo "\n";
        $remote->onButtonWasPushed(0);
        $remote->offButtonWasPushed(0);
        $remote->onButtonWasPushed(1);
        $remote->offButtonWasPushed(1);
        $remote->onButtonWasPushed(2);
        $remote->offButtonWasPushed(2);
    }
}