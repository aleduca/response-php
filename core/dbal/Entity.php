<?php

namespace core\dbal;

abstract class Entity
{
    public static function create(array|bool $properties):Entity
    {
        if (!is_array($properties)) {
            return new EntityNotFound;
        }

        return new static(...$properties);
    }
}
