<?php

namespace DesignPatternsInPhp\Factory\SimpleFactory\Pizzas;

class PepperoniPizza extends Pizza
{

    public function __construct()
    {
        $this->setName('pepperoni');
    }
}