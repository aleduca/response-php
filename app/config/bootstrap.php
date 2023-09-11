<?php

use core\library\Container;

$services = base_path() . '/app/services/services.php';

$container = new Container;
$container = $container->build(['services']);

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 3));
$dotenv->load();
