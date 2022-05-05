<?php

namespace DesignPatternsInPhp\Factory\SimpleFactory\Pizzas;

abstract class Pizza
{
    private string $name;

    public function prepare() {
        echo "Preparing  $this->name Pizza \n";
        echo "Tossing dough \n";
        echo "Adding Sauce \n";
    }

    public function bake() {
        echo "Bake for 25 min at 180C \n";
    }

    public function cut() {
        echo "Cutting the pizza into diagonal slices \n";
    }

    public function box() {
        echo "Place pizza in official PizzaStore box \n";
    }


    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}