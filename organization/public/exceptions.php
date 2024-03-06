<?php require 'autoload.php';

use App\Exceptions\BadJsonException;
use App\Exceptions\FileNotFoundException;
use App\Utility\JsonFileReader;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>

<body>
    <?php
    try {

        
        $jsonFileReader = new JsonFileReader();
        $path = '../Files/inventory.json';
        $inventory = $jsonFileReader->readFileAssociativeArray($path);
        print_r($inventory);


        
    } catch (FileNotFoundException $e ) {

        echo "Message:" . $e->getMessage() . "<br>";
        echo "File:" . $e->getFile() . "<br>";
        echo "Line:" . $e->getLine() . "<br>";

    } catch (BadJsonException $e) {

        echo "Message:" . $e->getMessage() . "<br>";
        echo "File:" . $e->getFile()       . "<br>";
        echo "Line:" . $e->getLine()       . "<br>";
    }

    // Grouped
    try{

        $path = '../Files/inventory.json';
        $inventory = $jsonFileReader->readFileAssociativeArray($path);

    } catch (FileNotFoundException | BadJsonException $e ){

        echo "Message:" . $e->getMessage() . "<br>";
        echo "File:" . $e->getFile() . "<br>";
        echo "Line:" . $e->getLine() . "<br>"; 

    } finally {

        echo "Finally block";

    }

    ?>
</body>

</html>