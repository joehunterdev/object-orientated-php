<?php require 'Connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Methods</title>
</head>
<body>
    <?php
    $connection1 = new Connection();
    $connection2 = new Connection();
    $connection1->setConnectionId('123.123.1.1');
    //unset($connection1);//Will work with __destruct
    // echo Connection::getCount();
    echo "the number of conx is " . $connection1 -> getCount().PHP_EOL;
    echo "the Conference id is "   .$connection1 -> conferenceId .PHP_EOL;
    echo "the Conference 2 id is "   .$connection2 -> conferenceId.PHP_EOL;

   ?>
</body>
</html>