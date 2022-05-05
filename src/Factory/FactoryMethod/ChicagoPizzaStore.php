<?php

namespace DesignPatternsInPhp\Factory\FactoryMethod;


use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleCheesePizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleClamPizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStylePepperoniPizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleVeggiePizza;
use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\Pizza;

class ChicagoPizzaStore extends PizzaStore
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
                $pizza = new ChicagoStyleCheesePizza();
                break;
            case 'pepperoni':
                $pizza = new ChicagoStylePepperoniPizza();
                break;
            case 'clam':
                $pizza = new ChicagoStyleClamPizza();
                break;
            case 'veggie':
                $pizza = new ChicagoStyleVeggiePizza();
                break;
            default:
                throw new \Exception('invalid pizza type');
        }
        return $pizza;
    }
}