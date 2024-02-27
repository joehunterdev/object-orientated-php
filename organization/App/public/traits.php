<?php require_once 'autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>

<body>
    <?php

    use App\Logging\Logger;
    use App\Users\User;

    $logger = new Logger();
    $user = new User();
    $user->setLogger($logger);

    ?>
    <?= $user->getLogger() ?>
</body>

</html>