<?php


use core\library\Request;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Request::class => Request::create(),
    Environment::class => function () {
        $loader = new FilesystemLoader(dirname(__FILE__, 3) . '/app/views');

        return new Environment($loader);
    },
];
