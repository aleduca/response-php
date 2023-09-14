<?php

namespace core\dbal;

abstract class Entity
{
    public static function create(array $properties = []):static
    {
        return new static(...$properties);
    }
}
