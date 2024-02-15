<?php
require_once 'JobsApiClientInterface.php';
require_once 'HttpClient.php';
 
class SalaryApiClient extends HttpClient implements JobsApiClientInterface
{

    public function getJobData($role, $city, $country, $radius): array
    {
        $body = [
            'job_title' => $role,
            'location' => $city . ', ' . $country,
            'radius' => $radius
        ];
        $url = "https://job-salary-data.p.rapidapi.com/job-salary?" . http_build_query($body);
        $headers = SALARY_HEADERS;
        $response = $this->sendRequest($url, 'GET', $headers);
        print_r($response, true);

        return json_decode($response, true);
    }
}
