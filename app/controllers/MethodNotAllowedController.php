<?php

namespace app\controllers;

use core\library\Response;
use Twig\Environment;

class MethodNotAllowedController
{
    public function __construct(
        private Environment $twig
    ) {
    }

    public function index():Response
    {
        return new Response($this->twig->render('405.php'), 405);
    }
}
