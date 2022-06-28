<?php

namespace DesignPatternsInPhp\Adapter;

class DuckTestDrive
{
    public function main(): void
    {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();

        $turkeyAdapter = new TurkeyAdapter($turkey);

        echo "The Turkey says... \n";
        $turkey->gobble();
        $turkey->fly();

        echo "\nThe Duck says... \n";
        $this->testDuck($duck);

        echo "\nThe TurkeyAdapter says... \n";
        $this->testDuck($turkeyAdapter);
    }

    private function testDuck(DuckInterface $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}