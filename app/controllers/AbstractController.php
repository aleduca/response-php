<?php

namespace app\controllers;

use core\library\Request;

abstract class AbstractController
{
    protected Request $request;

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
}
