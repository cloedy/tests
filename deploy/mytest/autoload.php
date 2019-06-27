<?php

namespace mytest;


define('_ROOT', dirname(__DIR__));

require _ROOT . '/vendor/autoload.php';

if (PHP_SAPI == 'cli') {
    $_SERVER['ENV'] = 'dev';
    $_SERVER['CONF_FILE'] = '/www/conf.conf';
}

require _ROOT . '/config/main.php';
require _ROOT . '/mytest/routes.php';

function client()
{
    return new \GuzzleHttp\Client();
}
