<?php

use DesignPatternsInPhp\Adapter\DuckTestDrive;

require __DIR__ . '/../../vendor/autoload.php';

// create Singleton instance
$testDuck = new DuckTestDrive();
$testDuck->main();