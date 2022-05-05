<?php

namespace DesignPatternsInPhp\Factory\SimpleFactory\Pizzas;

class VeggiePizza extends Pizza
{

    public function __construct()
    {
        $this->setName('veggie');
    }
}