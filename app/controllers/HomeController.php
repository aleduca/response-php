<?php

namespace app\controllers;

use core\library\Response;
use core\library\Twig;
use Doctrine\DBAL\Connection;

class HomeController extends AbstractController
{
    public function __construct(
        private Twig $twig,
        private Connection $connection
    ) {
    }

    public function index()
    {
        $queryBuilder = $this->connection->createQueryBuilder();

        $selected = $queryBuilder->select('id', 'firstName', 'lastName', 'email')
        ->from('users')
        ->where('id = ' . $queryBuilder->createNamedParameter(2))
        ->andWhere('firstName = ' . $queryBuilder->createNamedParameter('Alexandre'));

        var_dump($selected->fetchAssociative());


        die();
        // return new Response(
        //     $this->twig->env->render('home.twig')
        // );
    }
}
