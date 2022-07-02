<?php

namespace DesignPatternsInPhp\Facade\FacadeClasses;

class TheaterLights
{

    public function dim(int $n):void
    {
        echo "Theater Ceiling Lights dimming to $n \n";
    }

    public function on():void
    {
        echo "Theater Ceiling Lights on \n";
    }
}