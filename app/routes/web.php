<?php

use app\controllers\HomeController;
use app\controllers\UserController;
use core\library\Router;

$admin = require base_path() . '/app/routes/admin.php';

$router = $container->get(Router::class);
$router->group('/admin', $admin);
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/users/{id:[0-9]+}/name/{name:[a-z]+}', function (int $id, string $name) {
    var_dump($id, $name);
});
// $router->add('GET', '/users', [UserController::class, 'index']);
$router->add('GET', '/user/{id:[0-9]+}', [UserController::class, 'show']);

$router->run();
