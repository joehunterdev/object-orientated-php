<?php
require 'Bid.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>encapsulation</title>
</head>

<body>
    <?php

    $bid = new Bid();
    $bid->setBidAmount(200)

    ?>
    <?php echo "Bid amount is:" . $bid->bidAmount;    ?>
</body>

</html>