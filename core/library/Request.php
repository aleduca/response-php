<?php

namespace core\library;

use Exception;

class Request
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $server,
        public readonly array $file,
        public readonly array $cookie,
    ) {
    }

    public static function create()
    {
        return new static($_GET, $_POST, $_SERVER,$_FILES,$_COOKIE);
    }

    public function getRequest(string $request):Sanitize
    {
        $request = strtolower($request);

        if (!in_array($request, ['get', 'post'])) {
            throw new Exception("Request {$request} not accepted");
        }

        $santize = new Sanitize;

        $santize->execute($this->$request);

        return $santize;
    }
}
