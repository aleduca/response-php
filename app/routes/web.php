<?php

use app\controllers\HomeController;
use app\controllers\LoginController;
use app\controllers\UserController;
use core\library\Router;

$router = $container->get(Router::class);
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/login', [LoginController::class, 'index']);
$router->add('POST', '/login', [LoginController::class, 'store']);
$router->add('GET', '/logout', [LoginController::class, 'destroy']);
$router->add('GET', '/user/create', [UserController::class, 'create']);
$router->add('GET', '/users', [UserController::class, 'index']);
$router->add('POST', '/user', [UserController::class, 'store']);

$router->run();
