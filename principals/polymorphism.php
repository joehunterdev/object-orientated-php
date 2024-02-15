<?php
require_once 'StockManager.php';
require_once 'CsvFileReader.php';
require_once 'JsonFileReader.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>
</head>

<body>
    <?php

    $stockManager = new StockManager();
    $csvFileReader = new CsvFileReader();
    $jsonFileReader = new JsonFileReader();
    $stockManager->updateStockFromFile(__DIR__.'\\data\\linkedin_api_cache.csv', $csvFileReader);
    $stockManager->updateStockFromFile(__DIR__.'\\data\\linkedin_api_cache.json', $jsonFileReader);


    ?>
</body>

</html>