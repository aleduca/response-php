<?php

namespace app\controllers;

use core\library\Response;
use Twig\Environment;

class NotFoundController
{
    public function __construct(
        private Environment $twig,
    ) {
    }

    public function index():Response
    {
        return new Response('Erro 404', 404);
    }
}
