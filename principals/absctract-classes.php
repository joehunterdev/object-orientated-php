<?php
 require 'User.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Classes</title>
</head>
<body>
    <?php
     $user = new User("joe","joey@hunter.es");//Cant directly instante abstract class
     $user->save();
    ?>
</body>
</html>