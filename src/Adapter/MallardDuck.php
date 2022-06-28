<?php

namespace DesignPatternsInPhp\Adapter;

class MallardDuck implements DuckInterface
{

    public function quack(): void
    {
        echo "Quack \n";
    }

    public function fly(): void
    {
        echo "I'm Flying \n";
    }
}