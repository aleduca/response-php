<?php

namespace core\dbal;

interface AuthInterface
{
    public function auth(string $email):Entity;
}
