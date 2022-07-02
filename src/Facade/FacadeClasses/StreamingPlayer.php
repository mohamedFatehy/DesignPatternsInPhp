<?php

namespace DesignPatternsInPhp\Facade\FacadeClasses;

class StreamingPlayer
{
    public function on(): void
    {
        echo "Streaming Player on \n";
    }

    public function off(): void
    {
        echo "Streaming Player off \n";
    }

    public function play(string $movie): void
    {
        echo "Streaming Player playing $movie \n";
    }

    public function stop(): void
    {
        echo "Streaming Player stopped \n";
    }
}