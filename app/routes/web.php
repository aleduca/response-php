<?php

use app\controllers\HomeController;
use app\controllers\UserController;
use core\library\Router;

$router = $container->get(Router::class);
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/user/create', [UserController::class, 'create']);
$router->add('POST', '/user', [UserController::class, 'store']);
$router->add('GET', '/post/{slug:[a-z\-]+}', function (string $slug) {
    var_dump($this->request);
});

$router->run();
