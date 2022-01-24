<?php

namespace DesignPatternsInPhp\Strategy\QuackBehaviour;

class Quack implements QuackBehaviour
{

    /**
     * @return string
     */
    public function quack(): string
    {
        return "i quack";
    }
}