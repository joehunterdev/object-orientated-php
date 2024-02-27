<?php

namespace App\Connection;

use Database\Mysql\Connection;

class MySQLConnection
{

    // public function __construct(public string $databaseUrl = 'mysql://localhost:3306/dbname')
    // {
    //     $this->databaseUrl = $databaseUrl;
    // }

    public function getDatabaseUrl(): string
    {
        //Coming from external source
        $connection = new Connection();
        return $connection->getDatabaseUrl()    ;
    }
}
