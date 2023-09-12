<?php

namespace app\controllers;

use app\database\models\User;
use core\library\Response;
use core\library\Twig;

class HomeController extends AbstractController
{
    public function __construct(
        private Twig $twig,
        private User $user
    ) {
    }

    public function index()
    {
        $user = $this->user->create([
            'firstName' => 'Alexandre',
            'lastName' => 'Cardoso',
            'email' => 'xandecar@hotmail.com',
            'password' => password_hash('123', PASSWORD_DEFAULT),
        ]);

        var_dump($user);
        die();
        // return new Response(
        //     $this->twig->env->render('home.twig')
        // );
    }
}
