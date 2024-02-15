<?php
require 'LinkedInApiClient.php';
require 'SalaryApiClient.php';
require 'FileStorage.php';
require 'env.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>

<body>
    <?php

    $linkedInStorage = new FileStorage(CACHE_DIR . 'linkedin_api_cache.json');
    // $linkedInJobsApiClient = new LinkedInApiClient();
    // $linkedInResult = $linkedInJobsApiClient->getJobData('Full Stack Developer', 'Malaga', 'spain', 200);
    $linkedInStorage->retrieve($linkedInResult);
    $linkedInStorage->storeAsCsv($linkedInStorage->retrieve());

    $salariesStorage = new FileStorage(CACHE_DIR . 'salary_api_cache.json');
    $salariesApiClient = new SalaryApiClient();
    $salariesResult = $salariesApiClient->getJobData('Full Stack Developer', 'Malaga', 'spain', 200);
    $salariesStorage->store($salariesResult); 

    ?>

    <pre>
        <?php 
            print_r($linkedInStorage->retrieve());
            print_r($salariesStorage->retrieve());
            ?>
    </pre>
</body>

</html>