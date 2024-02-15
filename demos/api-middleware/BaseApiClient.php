<?php

use function PHPSTORM_META\type;

require 'HttpClient.php';
require 'Cacher.php';

abstract class BaseApiClient extends HttpClient
{
    protected $apiCache;

    public function __construct($cacheFile)
    {
        $this->apiCache = new Cacher($cacheFile, CACHE_TIME);
    }

    protected function getDataFromApiOrCache($apiRequestCallback): array
    {
        $data = [];
        var_dump($data);
        echo "getDataFromApiOrCache is being called\n";

        $cache = $this->apiCache->getCache();
        var_dump($cache);
        $isExpired = $cache['isExpired'] ?? true;

        if (!$isExpired) {
            $data = $cache['data'];
        } else {
            // Cache is expired or doesn't exist, make a new API request
            try {
                $data = $apiRequestCallback();
                // Save the API response to the cache
                $this->apiCache->setCache($data);
            } catch (Exception $e) {
                // API request failed, log the error and return an empty array
                error_log('API request failed: ' . $e->getMessage());
                $data = [];
            }
        }
 
        return $data;
    }
}
