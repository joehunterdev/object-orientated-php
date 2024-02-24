<?php

namespace App;

use getID3;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use InvalidArgumentException;
use Exception;

class FileHandler implements FileHandlerInterface
{
    private $sourcePath;
    private $sourceFolder;
    protected $cachePath = 'data.dat';

    private  $fileTypes = [];

    public function __construct($sourcePath, $cacheFolder)
    {
        $this->setSource($sourcePath);
        $this->setCacheFile($cacheFolder);
    }

    public function setFileTypes(array $fileTypes)
    {
        $this->fileTypes = $fileTypes;
    }

    public function setSource(string $sourcePath)
    {
        if (!is_dir($sourcePath) || !is_readable($sourcePath)) {
            throw new InvalidArgumentException("The source directory $sourcePath does not exist or is not readable.");
        }

        $this->sourceFolder = basename($sourcePath);
        $this->sourcePath = $sourcePath;
    }
    /**
     * Set the destination cache file
     */
    public function setCacheFile($cacheFolder)
    {

        if (!is_dir($cacheFolder) || !is_writable($cacheFolder)) {
            throw new InvalidArgumentException("The cache directory $cacheFolder does not exist or is not writable.");
        }


        $date = date('Y-m-d');
        $filename =  $this->sourceFolder . '_' . implode("-", $this->fileTypes) . "-" . $date . '.dat';

        if (!file_exists($filename)) {
            touch($filename);
        }

        $this->cachePath = $cacheFolder . $filename;
    }

    /**
     * Define array structure
     */

    protected function buildFileData($file, string $extension): array
    {



        return [
            'sourcePath' => $file->getPathname(),
            'filename' => $file->getFilename(),
            'extension' => $extension,
            'size' => $file->getSize(),
            'creation_time' => filectime($file),
        ];
    }


    /**
     * Implements the getRawSamplesData method
     * to retrieve structured data from the source folder of just sample stuff
     *
     * @param $limit number of results
     * @param index where to start from
     * @return array
     */
    public function getSourceFiles(int $limit = 20, int $start = 0): array
    {
        $files = [];
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->sourcePath));

        $count = 0;

        foreach ($iterator as  $file) {

            if ($file->isDir()) {
                continue;
            }

            // Skip files until we reach the start point
            if ($count++ < $start) {
                continue;
            }

            $extension =  pathinfo($file, PATHINFO_EXTENSION);

            if (!in_array($extension, $this->fileTypes)) {
                continue;
            }

            $files[] = $this->buildFileData($file, $extension);

            if (count($files) >= $limit) {
                break;
            }
        }


        return $files;
    }

    /**
     * Store cached data to file
     * @param array $files
     * @return bool
     */
    public function writeDataToCache(array $files): bool
    {
        $result = @file_put_contents($this->cachePath, serialize($files));

        if ($result === false) {
            throw new Exception('File write failed');
        }

        return true;
    }

    /**
     * Read files from cache
     * @return array of cached files
     */
    public function getCacheData(): array
    {
        // dd($this->cachePath);
        if (!file_exists($this->cachePath)) {
            throw new Exception('Cache file does not exist');
        }
        return unserialize(file_get_contents($this->cachePath));
    }


    /**
     * Get id3 data from the file itself
     */
    public function getFileId3Data($file): array
    {
        $getID3 = new getID3;
        $fileInfo = $getID3->analyze($file);
        return $fileInfo;
    }

    public function getSourcePath()
    {
        return $this->sourcePath;
    }
}
