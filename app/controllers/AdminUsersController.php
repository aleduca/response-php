<?php

namespace app\controllers;

use core\library\Response;

class AdminUsersController
{
    public function index():Response
    {
        return new Response('admin users controller');
    }
}
