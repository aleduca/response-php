<?php

namespace app\database\models;

use app\database\entities\UserEntity;
use core\dbal\Model;

class User extends Model
{
    protected string $table = 'users';

    public function getUserById(int $id):UserEntity
    {
        $queryBuilder = $this->connection->createQueryBuilder();

        $selected = $queryBuilder->select('firstName', 'lastName', 'email', 'password')
        ->from('users')
        ->where('id = ' . $queryBuilder->createNamedParameter($id));

        return UserEntity::create([...$selected->fetchAssociative()]);
    }

    public function create(UserEntity $entity)
    {
        $sql = 'insert into users(firstName,lastName,email,password,image,updated_at) values(:firstName,:lastName,:email,:password,:image,:updated_at)';
        // var_dump($sql);
        $prepare = $this->connection->prepare($sql);
        $prepare->bindValue('firstName', $entity->firstName);
        $prepare->bindValue('lastName', $entity->lastName);
        $prepare->bindValue('email', $entity->email);
        $prepare->bindValue('password', $entity->password);
        $prepare->bindValue('image', $entity->image);
        $prepare->bindValue('updated_at', $entity->updated_at);

        return $prepare->executeStatement();
    }
}
