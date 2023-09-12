<?php


use core\dbal\Connection;
use core\library\Request;
use core\library\Twig;
use Doctrine\DBAL\Connection as DBALConnection;

return [
    Request::class => Request::create(),
    DBALConnection::class => Connection::create(),
    Twig::class => function () {
        $twig = new Twig;
        $twig->add_functions();

        return $twig;
    },
];
