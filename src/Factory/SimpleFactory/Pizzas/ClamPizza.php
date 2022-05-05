<?php

namespace DesignPatternsInPhp\Factory\SimpleFactory\Pizzas;

class ClamPizza extends Pizza
{

    public function __construct()
    {
        $this->setName('Clam');
    }
}