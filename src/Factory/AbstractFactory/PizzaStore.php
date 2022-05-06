<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory;

use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Pizza;

abstract class PizzaStore
{
    /**
     * @param string $type
     * @return Pizza
     */
    abstract public function createPizza(string $type): Pizza;

    /**
     * @param string $type
     * @return Pizzas\Pizza
     * @throws \Exception
     */
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->doPrepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}