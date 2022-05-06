<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory;


use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\ChicagoPizzaIngredientFactory;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\ChicagoStyle\ChicagoStyleCheesePizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\ChicagoStyle\ChicagoStyleClamPizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\ChicagoStyle\ChicagoStylePepperoniPizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\ChicagoStyle\ChicagoStyleVeggiePizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    /**
     * @param string $type
     * @return Pizza
     * @throws \Exception
     */
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza = new ChicagoStyleCheesePizza($ingredientFactory);
                $pizza->setName('Chicago Style Deep Dish Cheese Pizza');
                break;
            case 'pepperoni':
                $pizza = new ChicagoStylePepperoniPizza($ingredientFactory);
                $pizza->setName('Chicago Style Deep Dish Pepperoni Pizza');
                break;
            case 'clam':
                $pizza = new ChicagoStyleClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Deep Dish Clam Pizza');
                break;
            case 'veggie':
                $pizza = new ChicagoStyleVeggiePizza($ingredientFactory);
                $pizza->setName('Chicago Style Deep Dish Veggie Pizza');
                break;
            default:
                throw new \Exception('invalid pizza type');
        }
        return $pizza;
    }
}