<?php

namespace DesignPatternsInPhp\Strategy;

use DesignPatternsInPhp\Strategy\FlyBehaviour\FlyBehaviour;
use DesignPatternsInPhp\Strategy\QuackBehaviour\QuackBehaviour;

abstract class Duck
{
    public FlyBehaviour $flyBehaviour;
    public QuackBehaviour $quackBehaviour;

    public function display(): void
    {
        echo $this->performFly();
        echo $this->newLine();
        echo $this->performQuack();
        echo $this->newLine();
        echo $this->performSwim();
    }

    /**
     * @return void
     */
    protected function performFly(): string
    {
        return $this->flyBehaviour->fly();
    }

    /**
     * @return void
     */
    protected function performQuack(): string
    {
        return $this->quackBehaviour->quack();
    }

    /**
     * @return string
     */
    private function performSwim(): string
    {
        return "all ducks can swim";
    }

    /**
     * @return string
     */
    protected function newLine(): string
    {
        return "\n";
    }
}