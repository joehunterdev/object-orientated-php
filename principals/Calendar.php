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
