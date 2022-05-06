<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\ChicagoStyle;

use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\PizzaIngredientFactory;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{

    private PizzaIngredientFactory $pizzaIngredientFactory;

    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->pizzaIngredientFactory =$pizzaIngredientFactory;
    }

    public function prepare(): Pizza
    {
        echo "Preparing " . $this->getName() . "\n";
        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
        return $this;
    }
}