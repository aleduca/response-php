<?php

use core\library\Redirect;
use core\library\Response;

function public_path()
{
    return $_SERVER['DOCUMENT_ROOT'];
}

function base_path()
{
    return dirname(__FILE__, 3);
}

function redirect(string $to):Response
{
    return new Redirect($to);
}

function remove_file(string $file)
{
    @unlink(public_path() . $file);
}
