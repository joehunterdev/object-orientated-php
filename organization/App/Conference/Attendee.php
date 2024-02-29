<?php

namespace App\Conference;

class Attendee extends Registrant
{

    protected static $meta = 'Conference Attendee';
    private static int $count = 0;
    private static int $nextId = 1;

    private string $username;
    private int $id;

    public function __construct()
    {
        self::$count;

        //Create a property off static
        $this->id = self::$nextId;
        self::$nextId++;
    }


    public static function getCount(): int
    {
        return self::$count;
    }

    /*
    * Laravel style factory method
    */
    public static function create(array $atts): Attendee
    {
        $attendee = new self;
        $attendee->username = $atts['username'];
        return $attendee;
    }
}

// $joe = new Attendee();
// $bill = new Attendee();

// var_dump(Attendee::getCount()); // 

$joe = Attendee::create(['username' => 'joe']);
$bill = Attendee::create(['username' => 'bill']);

print_r($joe);

var_dump(Attendee::getCount()); // 2    