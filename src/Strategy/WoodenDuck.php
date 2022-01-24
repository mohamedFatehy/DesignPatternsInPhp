<?php

namespace DesignPatternsInPhp\Strategy;

use DesignPatternsInPhp\Strategy\FlyBehaviour\FlyNoWay;
use DesignPatternsInPhp\Strategy\QuackBehaviour\MuteQuack;

class WoodenDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehaviour = new MuteQuack();
        $this->flyBehaviour = new FlyNoWay();
    }
}