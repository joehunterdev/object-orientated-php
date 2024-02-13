<?php require 'CsvFileReader.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileReader</title>
</head>

<body>

    <?php
    require 'FileReader.php';
    $reader = new CsvFileReader();
    echo $reader->getData();
    ?>

</body>

</html>