<?php

namespace core\library;

class Response
{
    public function __construct(
        private mixed $body,
        private int $statusCode = 200,
        private array $headers = [],
    ) {
    }

    public function send()
    {
        http_response_code($this->statusCode);

        if (!empty($this->headers)) {
            foreach ($this->headers as $index => $header) {
                header("$index:$header");
            }
        }

        echo $this->body;
    }
}
