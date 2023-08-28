<?php

use core\library\Session;

if (!file_exists($app_functions = dirname(__FILE__, 3) . '/app/functions/twig.php')) {
    throw new Exception('Please create functions file inside functions folder');
}

$functions = [
    'flash' => function (string $index, string $cssClass = 'error') {
        $flash = Session::get('__flash');
        if (isset($flash[$index])) {
            return "<span class='{$cssClass}'>{$flash[$index]}</span>";
        }
    },
];

$include_app_functions = require $app_functions;

if (!is_array($include_app_functions)) {
    throw new Exception('twig file must return an array');
}

return [...$functions, ...$include_app_functions];
