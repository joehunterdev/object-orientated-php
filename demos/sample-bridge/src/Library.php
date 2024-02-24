<?php

namespace App;

class Library
{
    private static $isFromCache = false;
    private $audioFileHandler;
    public $samples = [];

    public function __construct(AudioFileHandler $audioFileHandler)
    {
        $this->audioFileHandler = $audioFileHandler;
    }

    public function getSamples(int $limit, int $start)
    {
        $rawSamples = $this->audioFileHandler->getAudioData($limit, $start);
        $this->samples = $this->categorizeSamples($rawSamples);
        return $this->samples;
    }


    private function categorizeSamples(array $rawSamples)
    {
        $categorizedSamples = [];

        // dd($this->audioFileHandler->getSourcePath());
        foreach ($rawSamples as $sample) {

            // $urlParts = parse_url(str_replace($this->audioFileHandler->getSourcePath(), "", $sample['sourcePath']))['path'];
            // $pathParts = explode(DIRECTORY_SEPARATOR, $urlParts);
            // $categorizedSamples[] = [
            //     'author' => $pathParts[0],
            //     'packname' =>  $pathParts[1],
            //     'instrument' =>  $pathParts[2] ?? null,
            //     'type' =>  $pathParts[3] ?? null,
            //     'key' => $this->extractKeyFromFilename($sample['sourcePath']) ?? null,
            //     'sample' => $sample,
            // ];
            
            $categorizedSamples[] = new Sample($sample, $this->audioFileHandler->getSourcePath());
        }

        return $categorizedSamples;
    }

    function extractKeyFromFilename($filename) {
        // Remove the file extension
        $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
    
        // Use a regular expression to find the key
        if (preg_match('/_([A-Z][^_]*)$/', $filenameWithoutExtension, $matches)) {
            return $matches[1];
        }
    
        // Return null if no key was found
        return null;
    }
    /**
     * Get samples by category
     * @param string $key
     * @param string $category
     * @return array
     */
    public function getSamplesByCategory(string $key,string $category)
    {
        return array_filter($this->samples, function ($sample) use ($key,$category) {
            return $sample[$key] === $category;
        });
    }


}
