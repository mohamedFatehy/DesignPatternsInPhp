<?php

namespace DesignPatternsInPhp\Factory\FactoryMethod\Pizzas;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare()
    {
        echo "Preparing  $this->name Pizza \n";
        echo "Tossing dough \n";
        echo "Adding Sauce \n";
        foreach ($this->toppings as $topping) {
            echo " $topping \n";
        }
    }

    public function bake()
    {
        echo "Bake for 25 min at 180C \n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices \n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box \n";
    }


    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}