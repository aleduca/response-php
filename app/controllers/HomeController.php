<?php

namespace app\controllers;

use app\database\models\User;
use core\library\Response;
use core\library\Twig;
use Doctrine\DBAL\Connection;

class HomeController extends AbstractController
{
    public function __construct(
        private Twig $twig,
        private User $user,
        private Connection $connection,
    ) {
    }

    public function index():Response
    {
        return new Response(
            $this->twig->env->render('home.twig')
        );
    }
}
