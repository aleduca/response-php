<?php

use core\library\Redirect;

function public_path()
{
    return $_SERVER['DOCUMENT_ROOT'];
}

function base_path()
{
    return dirname(__FILE__, 3);
}

function redirect(string $to):Redirect
{
    return new Redirect($to);
}

function remove_file(string $file)
{
    @unlink(public_path() . $file);
}
