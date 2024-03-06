<?php 
require 'vendor/autoload.php';

$dt = new DateTime('last day of May');

//dd($dt->format('d-m-y'));

$dt = new DateTime('tomorrow', new DateTimeZone('Europe/Madrid')); 

/*Comparisons*/
$today    = date_create('today');
$nextWeek = date_create('next week');

// dd($nextWeek > $today);
// dd($nextWeek == $today);

//Static Instantiation
$dateTime = DateTime::createFromFormat('Y-m-d H:i:s', '2024-05-01 12:00:00');

//Date Interval
$past = new DateTime('2020-01-01');
$present = new DateTime('now');
$interval = $past->diff($present); // This will just give you an int of the difference in days not abs() -/+ 

//dd($interval->format('%R%a days')); //%r will apply the - sign if the date is in the past

$interval = date_diff($present, $past); 
$interval = new DateInterval('P2Y4DT6H8M');

$past->add($interval);
$future->sub($interval);

$interval = date_interval_create_from_date_string((string) $interval);

/** Imutable DateInterval ***/
$start = new DateTimeImmutable('2020-01-01'); // This will now be fixed and cannot be changed can be good for password reset where user needs just a fixed frame of time to reset password
$finish = $start->add(new DateInterval('P3D'));
$uct = new DateTimeZone('UTC'); //utc stands for universal coordinated time


dd($finish->format('Y-m-d'));



