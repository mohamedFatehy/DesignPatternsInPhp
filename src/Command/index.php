<?php


use DesignPatternsInPhp\Command\RemoteControlTest;
use DesignPatternsInPhp\Command\RemoteLoader;

require __DIR__ . '/../../vendor/autoload.php';


//(new RemoteControlTest())->main();
//echo "\n===========================================\n";
(new RemoteLoader())->main();