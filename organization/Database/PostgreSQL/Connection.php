<?php
namespace Database\PostgreSQL;

class Connection{

    private string $database = "pgsql:host=localhost;dbname=organization";
    
    public function getDatabaseUrl() : string{
        return $this->database;
    }

    
}