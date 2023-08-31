<?php

namespace app\controllers;

use app\request\UserCreate;
use core\library\Response;
use core\library\Twig;

class UserController extends AbstractController
{
    public function __construct(
        private Twig $twig
    ) {
    }

    public function create():Response
    {
        return new Response(
            $this->twig->env->render('user_create.twig')
        );
    }

    public function store()
    {
        UserCreate::validate($this->request);
    }
}
