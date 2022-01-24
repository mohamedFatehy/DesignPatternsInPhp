<?php

namespace DesignPatternsInPhp\Strategy;

use DesignPatternsInPhp\Strategy\FlyBehaviour\FlyNoWay;
use DesignPatternsInPhp\Strategy\QuackBehaviour\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehaviour = new Quack();
        $this->flyBehaviour = new FlyNoWay();
    }
}