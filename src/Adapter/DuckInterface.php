<?php

namespace DesignPatternsInPhp\Adapter;

interface DuckInterface
{
    public function quack(): void;

    public function fly(): void;
}