<?php

use DesignPatternsInPhp\Adapter\DuckTestDrive;

require __DIR__ . '/../../vendor/autoload.php';

// create Adapter instance
$testDuck = new DuckTestDrive();
$testDuck->main();