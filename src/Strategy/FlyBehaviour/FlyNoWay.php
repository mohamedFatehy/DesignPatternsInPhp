<?php

namespace DesignPatternsInPhp\Strategy\FlyBehaviour;


class FlyNoWay implements FlyBehaviour
{

    /**
     * @return string
     */
    public function fly(): string
    {
        return "I cannot fly";
    }
}