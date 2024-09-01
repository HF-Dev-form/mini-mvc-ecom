<?php

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

define('DEBUG_MODE', true);

if (DEBUG_MODE) {
    $whoops = new Run();
    $whoops->prependHandler(new PrettyPageHandler());
    $whoops->register();
} else {
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
    ini_set('error_log', '/var/log/php-error.log');
}