<?php

namespace DesignPatternsInPhp\Factory\SimpleFactory;

class PizzaStore
{
    private SimplePizzaFactory $simplePizzaFactory;

    public function __construct()
    {
        $this->simplePizzaFactory = new SimplePizzaFactory();
    }


    /**
     * @param string $type
     * @return Pizzas\Pizza
     * @throws \Exception
     */
    public function orderPizza(string $type)
    {
        $pizza = $this->simplePizzaFactory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}