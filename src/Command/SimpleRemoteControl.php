<?php

namespace DesignPatternsInPhp\Command;

use DesignPatternsInPhp\Command\Commands\Command;

class SimpleRemoteControl
{
    private Command $slot;

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonPressed(): void
    {
        $this->slot->execute();
    }
}