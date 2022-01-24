<?php

use DesignPatternsInPhp\Strategy\QuackBehaviour\QuackBehaviour;

class Squeak implements QuackBehaviour
{

    /**
     * @return string
     */
    public function quack(): string
    {
        return "i squeak";
    }
}