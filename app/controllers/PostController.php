<?php

namespace app\controllers;

use core\library\Response;

class PostController
{
    public function show(string $slug):Response
    {
        return new Response($slug);
    }
}
