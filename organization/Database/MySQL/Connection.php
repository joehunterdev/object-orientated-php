<?php 
namespace Database\Mysql;

class Connection{

    private string $database = "mysql:host=localhost;dbname=organization";
    
    public function getDatabaseUrl() : string{
        return $this->database;
    }
}


?>