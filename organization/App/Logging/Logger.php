<?php 
namespace App\Logging;

class Logger 
{
    public function log(): string
    {
        $message = "Im logging";
        return $message;
    }
}   