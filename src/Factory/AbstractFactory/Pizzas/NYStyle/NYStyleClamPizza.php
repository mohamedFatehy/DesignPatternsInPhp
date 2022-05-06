<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\NYStyle;

use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\PizzaIngredientFactory;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Pizza;

class NYStyleClamPizza extends Pizza
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
        $this->clam = $this->pizzaIngredientFactory->createClam();
        return $this;
    }
}