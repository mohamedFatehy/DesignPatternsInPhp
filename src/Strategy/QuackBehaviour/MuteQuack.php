<?php

namespace DesignPatternsInPhp\Strategy\QuackBehaviour;


class MuteQuack implements QuackBehaviour
{

    /**
     * @return string
     */
    public function quack(): string
    {
        return "i cannot quack";
    }
}