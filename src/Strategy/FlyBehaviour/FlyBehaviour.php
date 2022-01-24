<?php

namespace DesignPatternsInPhp\Strategy\FlyBehaviour;


interface FlyBehaviour
{
    /**
     * @return string
     */
    public function fly(): string;
}