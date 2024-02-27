<?php
namespace App\Logging;

trait LoggableTrait
{

    protected $logger;
    use LoggableTrait;
    
    public function setLogger(Logger $logger)
    {
        echo 'Called from ' . __METHOD__ . PHP_EOL;

        $this->logger = $logger;
    }

    public function getLogger(): void
    {
        return $this->logger;
    }
    {
        $this->logger;
    }
}
