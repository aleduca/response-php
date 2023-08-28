<?php

namespace core\library;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

class Twig
{
    public readonly Environment $env;

    public function __construct()
    {
        $loader = new FilesystemLoader(dirname(__FILE__, 3) . '/app/views');

        $this->env = new Environment($loader);
    }

    public function add_functions()
    {
        $functions = require dirname(__FILE__, 2) . '/functions/twig.php';
        foreach ($functions as $index => $function) {
            $function = new TwigFunction($index, $function);
            $this->env->addFunction($function);
        }
    }
}
