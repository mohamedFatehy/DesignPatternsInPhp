<?php

namespace DesignPatternsInPhp\Facade\FacadeClasses;

class PopcornPopper
{
    public function on():void
    {
        echo "Popcorn Popper on \n";
    }

    public function pop():void
    {
        echo "Popcorn Popper popping popcorn! \n";
    }

    public function off():void
    {
        echo "Popcorn Popper off \n";
    }
}