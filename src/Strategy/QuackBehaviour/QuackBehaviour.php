<?php

namespace DesignPatternsInPhp\Strategy\QuackBehaviour;

interface QuackBehaviour
{
    /**
     * @return string
     */
    public function quack(): string;
}