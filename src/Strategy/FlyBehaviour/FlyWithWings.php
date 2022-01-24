<?php

namespace DesignPatternsInPhp\Strategy\FlyBehaviour;

class FlyWithWings implements FlyBehaviour
{

    /**
     * @return string
     */
    public function fly(): string
    {
        return "I'm flying with wings";
    }
}