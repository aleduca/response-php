<?php

namespace core\library;

class Sanitize
{
    private array $data = [];

    public function execute(array $request = [])
    {
        if (empty($request)) {
            return $this;
        }

        foreach ($request as $index => $value) {
            $this->data[$index] = trim(strip_tags($value));
        }
    }

    public function all()
    {
        return $this->data;
    }

    public function get(string $index)
    {
        return $this->data[$index] ?? null;
    }
}
