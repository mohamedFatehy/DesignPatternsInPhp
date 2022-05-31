<?php

namespace DesignPatternsInPhp\Command;

use DesignPatternsInPhp\Command\Commands\Command;
use DesignPatternsInPhp\Command\Commands\noCommand;

class RemoteControl
{
    private array $onCommands = [];
    private array $offCommands = [];

    public function __construct()
    {
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = new noCommand();
            $this->offCommands[$i] = new noCommand();
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }

    public function __toString()
    {
        $result = "\n------ Remote Control -------\n";
        for ($i = 0, $iMax = count($this->onCommands); $i < $iMax; $i++) {
            $result .= "[slot no $i] " . $this->getBaseClassName($this->onCommands[$i]) . "              " . $this->getBaseClassName($this->offCommands[$i]) . "\n";

        }

        return $result;
    }

    private function getBaseClassName($object) {
        return basename(str_replace('\\', '/', get_class($object)));
    }
}