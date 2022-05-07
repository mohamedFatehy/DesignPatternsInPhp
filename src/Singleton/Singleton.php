<?php

namespace DesignPatternsInPhp\Singleton;

class Singleton
{
    private static ?Singleton $uniqueInstance = null;
    private string $name = 'default name';

    // define the constructor as private to prevent initializing it from outside
    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new Singleton();
        }
        return self::$uniqueInstance;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Singletons should not be cloneable.
     */
    protected function __clone() { }

    /**
     * Singletons should not be restorable from strings.
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}