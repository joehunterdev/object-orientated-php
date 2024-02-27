<?php

namespace App\Users;
use App\Logging\LoggableTrait;
use App\Logging\Logger; 
class Customer extends User {

    use LoggableTrait;

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

}