<?php

namespace DesignPatternsInPhp\Facade\FacadeClasses;

class Screen
{
    public function up():void {
        echo "Theater Screen going up \n";
    }

    public function down():void {
        echo "Theater Screen going down \n";
    }
}