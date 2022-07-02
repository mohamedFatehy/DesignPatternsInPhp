<?php

namespace DesignPatternsInPhp\Facade;

use DesignPatternsInPhp\Facade\FacadeClasses\Amplifier;
use DesignPatternsInPhp\Facade\FacadeClasses\PopcornPopper;
use DesignPatternsInPhp\Facade\FacadeClasses\Projector;
use DesignPatternsInPhp\Facade\FacadeClasses\Screen;
use DesignPatternsInPhp\Facade\FacadeClasses\StreamingPlayer;
use DesignPatternsInPhp\Facade\FacadeClasses\TheaterLights;

class HomeTheaterFacade
{

    private Amplifier $amp;
    private StreamingPlayer $player;
    private Projector $projector;
    private Screen $screen;
    private TheaterLights $lights;
    private PopcornPopper $popper;

    public function __construct()
    {
        $this->amp = new Amplifier();
        $this->player = new StreamingPlayer();
        $this->projector = new Projector();
        $this->screen = new Screen();
        $this->lights = new TheaterLights();
        $this->popper = new PopcornPopper();
    }

    /**
     * @param string $movie
     * @return void
     */
    public function watchMovie(string $movie): void
    {
        echo "Get ready to watch a movie...\n";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setStreamingPlayer();
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->player->on();
        $this->player->play($movie);
    }

    /**
     * @return void
     */
    public function endMovie(): void
    {
        echo "Shutting movie theater down... \n";
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->player->stop();
        $this->player->off();
    }
}