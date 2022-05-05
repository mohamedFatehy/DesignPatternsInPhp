<?php

namespace DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\NYStyle;

use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\Pizza;

class NYStyleCheesePizza extends Pizza
{

    public function __construct()
    {
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->setName('NY Style Deep Dish Cheese Pizza');
        $this->toppings = ["Grated Reggiano Cheese"];
    }
}