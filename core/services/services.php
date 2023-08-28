<?php


use core\library\Request;
use core\library\Twig;

return [
    Request::class => Request::create(),
    Twig::class => function () {
        $twig = new Twig;
        $twig->add_functions();

        return $twig;
    },
];
