<?php

use App\Connection\MySQLConnection;
use App\Utility\RandomUtilityClass;

include_once 'autoload.php';
$mySqlCnx = new MySQLConnection();
$utility =  new RandomUtilityClass();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading</title>
</head>

<body>

    <?php
    echo $mySqlCnx->getDatabaseUrl();
    echo $utility->getRandomProperty();
    ?>

</body>

</html>