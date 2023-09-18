<?php

namespace core\library;

class Redirect extends Response
{
    public function __construct(string $uri)
    {
        parent::__construct('', 302, ['location' => $uri]);
    }

    public function withMessage(string $index, string $message)
    {
        Session::flash($index, $message);

        return $this;
    }

    public function send()
    {
        return header('Location: ' . $this->headers['location'], true, $this->statusCode);
    }
}
