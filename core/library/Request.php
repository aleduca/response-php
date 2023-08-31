<?php

namespace core\library;

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

    public function getRequest(string $request)
    {
        $request = $request === 'get' ? $this->get : $this->post;

        $sanitize = new Sanitize;

        $sanitize->execute($request);

        return $sanitize;
    }
}
