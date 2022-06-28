<?php

namespace DesignPatternsInPhp\Adapter;

class TurkeyAdapter implements DuckInterface
{
    private TurkeyInterface $turkey;

    public function __construct(TurkeyInterface $turkey)
    {

        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}