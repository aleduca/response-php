<?php

namespace app\database\models;

use core\dbal\Model;

class User extends Model
{
    protected string $table = 'users';

    public function getUserById(int $id)
    {
        $queryBuilder = $this->connection->createQueryBuilder();

        $selected = $queryBuilder->select('id', 'firstName', 'lastName', 'email')
        ->from('users')
        ->where('id = ' . $queryBuilder->createNamedParameter($id));

        return $selected->fetchAssociative();
    }
}
