<?php

namespace app\controllers;

use core\library\Request;
use core\library\Response;

class UserController
{
    public function __construct(
        private Request $request
    ) {
    }
    public function index():Response
    {
        return new Response('users');
    }

    public function show($id)
    {
    }
}
