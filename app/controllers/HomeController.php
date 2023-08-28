<?php

namespace app\controllers;

use app\database\model\User;
use core\library\Response;
use core\library\Twig;

class HomeController
{
    public function __construct(
        private Twig $twig,
    ) {
    }
    public function index():Response
    {
        $user = new User;
        $user = $user->find('id', 5);

        return new Response(
            $this->twig->env->render('home.twig', ['user' => $user])
        );
    }
}
