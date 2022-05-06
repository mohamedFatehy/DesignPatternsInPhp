<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\NYStyle;

use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Pizza;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\PizzaIngredientFactory;

class NYStyleVeggiePizza extends Pizza
{
    private PizzaIngredientFactory $pizzaIngredientFactory;

    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }

    public function prepare(): Pizza
    {
        echo "Preparing " . $this->getName() . "\n";
        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
        $this->veggies = $this->pizzaIngredientFactory->createVeggies();
        return $this;
    }
}