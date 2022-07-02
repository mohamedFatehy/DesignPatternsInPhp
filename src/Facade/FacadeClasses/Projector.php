<?php

namespace DesignPatternsInPhp\Facade\FacadeClasses;

class Projector
{
    public function on():void
    {
        echo "Projector on \n";
    }

    public function wideScreenMode():void
    {
        echo "Projector in widescreen mode (16x9 aspect ratio) \n";
    }

    public function off():void
    {
        echo "Projector off \n";
    }
}