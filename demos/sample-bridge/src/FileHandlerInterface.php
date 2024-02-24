<?php

namespace App;

/**
 * Take care of the file sourcing raw data and caching
 *
 */
interface FileHandlerInterface
{

    /*
    * Set the source folder for the files
    */
    public function setSource(string $sourcePath);

 
    /*
    * Set the file types to be used 
    */
    public function setCacheFile(string $sourcePath);

    /**
     * Get raw samples from a source folder.
     *
     * @param limit the of samples to retrieve
     * @param index the point to start retrieving samples
     * @return array An array of raw samples.
     */
    public function getSourceFiles(int $limit, int $start): array;


    /**
     * Get id3 data from the file itself
     *
     * @param string $filename The name of the file.
     * @return array the file data
     */
    public function getFileId3Data(string $fileName): array;
}
