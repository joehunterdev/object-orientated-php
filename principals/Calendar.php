<?php
define('YEAR', 2024);
class Calendar {
    //Regular Properties
    public string $name ;

    //Cannot be the result of an expression (array_merge([foo]))
    public $seasons = ['Spring', 'Summer', 'Autumn', 'Winter'];
    
    //Basic maths is allowed
    public float $weeksInAYear = 365 / 7; // More readable than 52.142857142857
     // ?float will accept type or null
    public int $year =  YEAR; // property to constant
    public static $count = 0;

    public function __construct(){
        self::$count++;
    }

    //Static Properties
    //Value is shared across all instances of the class
    public static $daysInFebruary = 28;

    //Class constant
    public const MONTHS_IN_YEAR = 12;

    public function getMonthsInYear()
    {
        echo MONTHS_IN_YEAR;
    }


}

$calendar = new Calendar();
$calendar->name = 'Year Planner'.PHP_EOL;
print Calendar::MONTHS_IN_YEAR.PHP_EOL;
print Calendar::$daysInFebruary.PHP_EOL;//maintain the $
Calendar::$daysInFebruary++.PHP_EOL;
print Calendar::$count.PHP_EOL;
//
$calendar2 = new Calendar();
print Calendar::$count.PHP_EOL;

//Count is 3 because we have created 3 as constructor is called 3 times
$calendar3 = new Calendar();
print Calendar::$count.PHP_EOL;
//Type checking
print($calendar->weeksInAYear ="hiii ");