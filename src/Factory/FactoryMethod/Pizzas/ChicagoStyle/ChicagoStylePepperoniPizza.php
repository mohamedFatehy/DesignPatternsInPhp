<?php

namespace DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\ChicagoStyle;

use DesignPatternsInPhp\Factory\FactoryMethod\Pizzas\Pizza;

class ChicagoStylePepperoniPizza extends Pizza
{

    public function __construct()
    {
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
        $this->setName('Chicago Style Deep Dish pepperoni Pizza');
        $this->toppings = ["Shredded Mozzarella Cheese"];
    }
}