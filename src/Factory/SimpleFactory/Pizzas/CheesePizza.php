<?php

namespace DesignPatternsInPhp\Factory\SimpleFactory\Pizzas;

class CheesePizza extends Pizza
{

    public function __construct()
    {
        $this->setName('Cheese');
    }
}