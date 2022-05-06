<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory\Pizzas;

use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\FrozenClams;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\MozzarellaCheese;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\PlumTomatoSauce;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\SlicedPepperoni;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Ingredients\ThickCrustDough;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Veggies\BlackOlives;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Veggies\Eggplant;
use DesignPatternsInPhp\Factory\AbstractFactory\Pizzas\Veggies\Spinach;


class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough()
    {
        return new ThickCrustDough();
    }

    public function createSauce()
    {
        return new PlumTomatoSauce();
    }

    public function createCheese()
    {
        return new MozzarellaCheese();
    }

    public function createVeggies()
    {
        return [new BlackOlives(),
            new Spinach(),
            new Eggplant() ];
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    public function createClam()
    {
        return new FrozenClams();
    }
}