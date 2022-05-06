<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory;


use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\NYPizzaIngredientFactory;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\NYStyle\NYStyleCheesePizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\NYStyle\NYStyleClamPizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\NYStyle\NYStylePepperoniPizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\NYStyle\NYStyleVeggiePizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Pizza;

class NYPizzaStore extends PizzaStore
{
    /**
     * @param string $type
     * @return Pizza
     * @throws \Exception
     */
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza = new NYStyleCheesePizza($ingredientFactory);
                $pizza->setName('NY Style Deep Dish Cheese Pizza');
                break;
            case 'pepperoni':
                $pizza = new NYStylePepperoniPizza($ingredientFactory);
                $pizza->setName('NY Style Deep Dish Pepperoni Pizza');
                break;
            case 'clam':
                $pizza = new NYStyleClamPizza($ingredientFactory);
                $pizza->setName('NY Style Deep Dish Clam Pizza');
                break;
            case 'veggie':
                $pizza = new NYStyleVeggiePizza($ingredientFactory);
                $pizza->setName('NY Style Deep Dish Veggie Pizza');
                break;
            default:
                throw new \Exception('invalid pizza type');
        }
        return $pizza;
    }
}