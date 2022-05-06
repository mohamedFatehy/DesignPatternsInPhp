<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory\Pizzas;

use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\FreshClams;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\MarinaraSauce;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\ReggianoCheese;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\SlicedPepperoni;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\ThinCrustDough;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Veggies\Garlic;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Veggies\Mushroom;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Veggies\Onion;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Veggies\RedPepper;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }

    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createVeggies()
    {
        return [new Garlic(), new Mushroom(), new Onion(), new RedPepper()];
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    public function createClam()
    {
        return new FreshClams();
    }
}