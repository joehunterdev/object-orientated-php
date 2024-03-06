<?php

echo date("Y"). PHP_EOL;
echo date('H:i'). PHP_EOL;
echo date("Y-m-d H:i:s"). PHP_EOL;

echo time(). PHP_EOL;   

$timestamp =  strtotime('last day of December'). PHP_EOL;

echo date('Y-m-d H:i:s', $timestamp). PHP_EOL;  
echo date('Y-m-d H:i:s (L)', strtotime('+ 2 days')). PHP_EOL;
$tz = date_default_timezone_get('Europe/Madrid');

echo $tz. PHP_EOL;

//hours, mins and secs, month
echo mktime(0, 0, 0, 1, 1, 2024). PHP_EOL;


