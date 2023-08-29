<?php

namespace app\controllers;

use core\library\Response;
use core\library\Twig;

class NotFoundController
{
    public function __construct(
        private Twig $twig,
    ) {
    }

    public function index():Response
    {
        return new Response(
            $this->twig->env->render('404.twig', [], 404)
        );
    }
}
