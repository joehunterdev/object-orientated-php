<?php
require_once 'JobsApiClientInterface.php';
require_once 'BaseApiClient.php';
require_once 'env.php';
class LinkedInApiClient extends BaseApiClient implements JobsApiClientInterface
{
    public function __construct()
    {
        parent::__construct(CACHE_DIR.'linkedin_api_cache.json');
    }

    public function getJobData($role, $city, $country, $radius): array
    {

 
        $data2 = $this->getDataFromApiOrCache(function () use ($role, $city) {
            $url = "https://linkedin-jobs-scraper-api.p.rapidapi.com/jobs";
            $body = [
                'title' => $role,
                'location' => $city,
                'rows' => 10
            ];
            $headers = LINKEDIN_HEADERS;
            $response = $this->sendRequest($url, 'POST', $headers, $body);

            return json_decode($response, true);
        });

        return $data2 ?? [];
    }
}
