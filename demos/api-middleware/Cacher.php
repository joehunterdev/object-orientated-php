<?php
require 'env.php';
class Cacher
{
    private $cacheFile;
    private $cacheTime;

    public function __construct($cacheFile, $cacheTime)
    {
        $this->cacheFile = $cacheFile;
        $this->cacheTime = $cacheTime;
    }

    public function getCache()
    {
        $isExpired = false;

        if (file_exists($this->cacheFile)) {
            $data = file_get_contents($this->cacheFile);
            $data = json_decode($data, true);

            if (filemtime($this->cacheFile) > (time() - $this->cacheTime)) {
                // Cache file is less than $cacheTime old. Use the file as the cache.
                return ['data' => $data, 'isExpired' => false];
            } else {
                // Cache file is expired, but return the data anyway.
                $isExpired = true;
            }
        }

        return ['data' => $data ?? null, 'isExpired' => $isExpired];
    }

    public function setCache($data)
    {
        $json = json_encode($data);
        file_put_contents($this->cacheFile, $json);
    }
}
