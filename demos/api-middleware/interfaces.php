<?php
require 'LinkedInApiClient.php';
require 'SalaryApiClient.php';
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

    $linkedInJobsApiClient = new LinkedInApiClient();
    $jobs = $linkedInJobsApiClient->getJobData('Full Stack Developer', 'Malaga', 'spain', 200);

    print_r($jobs, true);

    // $salariesApiClient = new SalaryApiClient();
    // $salaries = $salariesApiClient->getJobData('Full Stack Developer', 'Malaga', 'spain', 200);

    // print_r($salaries, true);
    
    ?>

</body>

</html>