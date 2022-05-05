<?php

namespace DesignPatternsInPhp\Factory\SimpleFactory;

use DesignPatternsInPhp\Factory\SimpleFactory\Pizzas\CheesePizza;
use DesignPatternsInPhp\Factory\SimpleFactory\Pizzas\ClamPizza;
use DesignPatternsInPhp\Factory\SimpleFactory\Pizzas\PepperoniPizza;
use DesignPatternsInPhp\Factory\SimpleFactory\Pizzas\Pizza;
use DesignPatternsInPhp\Factory\SimpleFactory\Pizzas\VeggiePizza;

class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return Pizza
     * @throws \Exception
     */
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
            case 'clam':
                $pizza = new ClamPizza();
                break;
            case 'veggie':
                $pizza = new VeggiePizza();
                break;
            default:
                throw new \Exception('invalid pizza type');
        }
        return $pizza;
    }
}