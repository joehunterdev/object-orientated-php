<?php
require_once 'JobsApiClientInterface.php';
require_once 'HttpClient.php';
class LinkedInApiClient extends HttpClient implements JobsApiClientInterface
{

    public function getJobData($role, $city, $country, $radius): array
    {

        $url = "https://linkedin-jobs-scraper-api.p.rapidapi.com/jobs";
        $body = [
            'title' => $role,
            'location' => $city,
            'rows' => 10
        ];
        $headers = LINKEDIN_HEADERS;
        $response = $this->sendRequest($url, 'POST', $headers, $body);
        $data = json_decode($response, true);
        if (!isset($data['items'])) {
            return [];
        }
        return $data;
    }
}
