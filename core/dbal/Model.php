<?php

namespace core\dbal;

use Doctrine\DBAL\Connection;

abstract class Model
{
    protected string $table;

    public function __construct(
        protected Connection $connection
    ) {
    }

    // public function create(array $data)
    // {
    //     $sql = "insert into {$this->table}(" . implode(',', array_keys($data)) . ') values(' . ':' . implode(',:', array_keys($data)) . ')';
    //     var_dump($sql);
    //     $prepare = $this->connection->prepare($sql);

    //     return $prepare->executeStatement($data);
    // }
}
