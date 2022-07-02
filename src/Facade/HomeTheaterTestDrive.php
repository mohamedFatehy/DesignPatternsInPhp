<?php

namespace DesignPatternsInPhp\Facade;

class HomeTheaterTestDrive
{
    public function main(): void
    {
        $homeTheaterFacade = new HomeTheaterFacade();
        $homeTheaterFacade->watchMovie("Raiders of the Lost Ark");
        echo "------------------------------------------------  \n";
        $homeTheaterFacade->endMovie();
    }
}