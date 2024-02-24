<?php
namespace App;

class Sample
{
    public $author;
    public $packname;
    public $instrument;
    public $type;
    public $key;
    public $sample;

    public function __construct(array $sample)
    {
        //Todo: Put in meta object or something
        $this->author = $sample['categories'][0];
        $this->packname =  $sample['categories'][1];
        $this->instrument =  $sample['categories'][2] ?? null;
        $this->type =  $sample['categories'][3] ?? null;
        $this->key = $this->extractKeyFromFilename($sample['sourcePath']) ?? null;
        $this->sample = $sample;

    }

    private function extractKeyFromFilename($filename) {
      
        // Remove the file extension
        $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
    
        // Use a regular expression to find the key
        if (preg_match('/_([A-Z][^_]*)$/', $filenameWithoutExtension, $matches)) {
            return $matches[1];
        }
    
        // Return null if no key was found
        return null;
    }
}
?>