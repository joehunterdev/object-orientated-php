<?php

class Connection
{

    private static int $count = 0;

    /**
     * @var string containing id
     */
    private string $connectionId = '1234';

    private int $conferenceId = 0;

    //Magic getter method good for unaccesible or private properties
    public function __get($name)
    {
        return $this->$name;
    }
    /*
    * Decide how to react when treated like a string
    * @return string
    */
    public function __toString()
    {
        return "Conference ID: {$this->conferenceId} Connection ID: {$this->connectionId}";
    }

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }

    /**
     * Destructor will be called when there are no references to a particular object
     */
    public function __destruct()
    {
        self::$count--;
    }

    //1.0 Using this 
    public function setConnectionId($ip)
    {
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            $this->connectionId = $ip;
        } else {

            exit("invalid ip address");
        }
    }
}
