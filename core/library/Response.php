<?php

namespace core\library;

class Response
{
    public function __construct(
        protected mixed $body,
        protected int $statusCode = 200,
        protected array $headers = [],
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

        echo (in_array('application/json', $this->headers)) ?
            json_encode($this->body) :
            $this->body;
    }
}
