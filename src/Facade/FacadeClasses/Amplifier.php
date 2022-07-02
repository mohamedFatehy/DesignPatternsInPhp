<?php

namespace DesignPatternsInPhp\Facade\FacadeClasses;

class Amplifier
{
    public function on(): void
    {
        echo "Amplifier on \n";
    }

    public function off(): void
    {
        echo "Amplifier off \n";
    }

    public function setStreamingPlayer(string $player = "Streaming Player")
    {
        echo "Amplifier setting Streaming player to $player \n";
    }

    public function setSurroundSound(): void
    {
        echo "Amplifier surround sound on (5 speakers, 1 subwoofer) \n";
    }

    public function setVolume(int $volume): void
    {
        echo "Amplifier setting volume to volume \n";
    }
}