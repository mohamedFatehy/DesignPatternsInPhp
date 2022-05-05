<?php

namespace DesignPatternsInPhp\Factory\FactoryMethod;


use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\NYStyle\NYStyleCheesePizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\NYStyle\NYStyleClamPizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\NYStyle\NYStylePepperoniPizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\NYStyle\NYStyleVeggiePizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\Pizza;

class NYPizzaStore extends PizzaStore
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
                $pizza = new NYStyleCheesePizza();
                break;
            case 'pepperoni':
                $pizza = new NYStylePepperoniPizza();
                break;
            case 'clam':
                $pizza = new NYStyleClamPizza();
                break;
            case 'veggie':
                $pizza = new NYStyleVeggiePizza();
                break;
            default:
                throw new \Exception('invalid pizza type');
        }
        return $pizza;
    }
}