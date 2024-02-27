<?php 
require 'Database/MySQL/Connection.php';
require 'Database/PostgreSQL/Connection.php';

use Database\PostgreSQL\Connection as PostgreConnection;
use Database\Mysql\Connection;
 
$mySqlCnx = new Connection();
$postgreSqlCnx = new PostgreConnection();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespaces</title>
</head>

<body>
    <ul>
        <li><?php echo $mySqlCnx->getDatabaseUrl(); ?></li>
        <li><?php echo $postgreSqlCnx->getDatabaseUrl(); ?></li>
    </ul>
</body>
</html>