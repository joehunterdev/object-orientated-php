<?php 
namespace App\Users;
use App\Logging\LoggableTrait;
use App\Logging\Logger; 

class User
{
    use LoggableTrait;

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

}