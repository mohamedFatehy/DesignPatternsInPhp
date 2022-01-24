<?php

namespace DesignPatternsInPhp\Strategy;

use DesignPatternsInPhp\Strategy\FlyBehaviour\FlyWithWings;
use DesignPatternsInPhp\Strategy\QuackBehaviour\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehaviour = new Quack();
        $this->flyBehaviour = new FlyWithWings();
    }

}