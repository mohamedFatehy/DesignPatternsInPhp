<?php

namespace DesignPatternsInPhp\Factory\AbstractFactory\Pizzas;

abstract class Pizza
{
    protected string $name = '';
    protected string $dough = '';
    protected string $sauce = '';
    protected string $cheese = '';
    protected string $clam = '';
    protected array $veggies = [];

    abstract public function prepare(): Pizza;

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


    public function doPrepare()
    {
        $this->prepare();
        $result = "---- " . $this->name . " ----\n";
        if ($this->dough != '') {
            $result .= $this->dough . " \n";
        }

        if ($this->sauce != '') {
            $result .= $this->sauce . " \n";
        }

        if ($this->cheese != '') {
            $result .= $this->cheese . " \n";
        }

        if ($this->clam != '') {
            $result .= $this->clam . " \n";
        }

        if (count($this->veggies)) {
            $result .= "Veggies : ( " . implode(", ", $this->veggies) . " ) \n";
        }
        $result .= "-----------------------------------------\n";
        echo $result;
    }
}