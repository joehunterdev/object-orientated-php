<?php require 'Cylinder.php'; ?>
<?php require 'Sphere.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Methods</title>
</head>

<body>

    <?php
    $cylinder = new Cylinder(['radius' => 2, 'height' => 3]);
    $cylinderVolume = $cylinder->volume();
    echo "The volume of the cylinder is $cylinderVolume" . PHP_EOL;


    $sphere = new Sphere(['radius' => 2, 'height' => 3]);
    $sphereVolume = $sphere->volume();
    echo "The volume of the sphere is $sphereVolume" . PHP_EOL;
    // create spherer

    ?>


</body>

</html>