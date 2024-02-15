<?php

interface JobsApiClientInterface
{
    //Implement a comon interface
    public function getJobData($role, $city, $country, $radius): array;
}
