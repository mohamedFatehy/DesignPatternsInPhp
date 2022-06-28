<?php

namespace DesignPatternsInPhp\Adapter;

class WildTurkey implements TurkeyInterface
{
    public function fly(): void
    {
        echo "I'm flying a short distance \n";
    }

    public function gobble(): void
    {
        echo "Gobble gobble \n";
    }
}