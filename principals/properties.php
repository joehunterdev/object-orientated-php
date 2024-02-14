<?php require 'Calendar.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties</title>
</head>

<body>
    <?php


    $calendar = new Calendar();
    $calendar->name = 'Year Planner' . PHP_EOL;
    print Calendar::MONTHS_IN_YEAR . PHP_EOL;
    print Calendar::$daysInFebruary . PHP_EOL; //maintain the $
    Calendar::$daysInFebruary++ . PHP_EOL;
    print Calendar::$count . PHP_EOL;
    //
    $calendar2 = new Calendar();
    print Calendar::$count . PHP_EOL;

    //Count is 3 because we have created 3 as constructor is called 3 times
    $calendar3 = new Calendar();
    print Calendar::$count . PHP_EOL;
    //Type checking
    print($calendar->weeksInAYear = "hiii ");

    ?>
</body>

</html>