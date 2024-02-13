<?php 
 require 'PremiumCheckingAccount.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        $account = new PremiumCheckingAccount();
        $account->deposit(100); //Notice were still levaraigin from grandparents
        $account->withdraw(50);
        echo $account->minimumBalance;
    ?>
    
</body>
</html>