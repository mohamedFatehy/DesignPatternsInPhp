<?php

namespace DesignPatternsInPhp\Command\Commands;

interface Command
{
    public function execute(): void;
}