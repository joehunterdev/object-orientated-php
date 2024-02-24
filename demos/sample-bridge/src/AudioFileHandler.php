<?php

namespace App;

use App\FileHandler;

class AudioFileHandler extends FileHandler
{

    public function __construct(string $sourcePath, string $cacheFolder = null)
    {
        self::setSource($sourcePath);
        self::setFileTypes(['wav', 'mp3']);
        self::setCacheFile($cacheFolder);
    }

    /**
     * Get the audio specific data
     */
    protected function buildFileData($file, string  $extension): array
    {
        $fileData = parent::buildFileData($file, $extension);

        $id3Info = $this->getFileId3Data($file->getPathname());
        $urlParts = parse_url(

            str_replace($this->getSourcePath(), "", $file->getPathname())

        )['path'];

        $pathParts = explode(DIRECTORY_SEPARATOR, $urlParts);
        $fileData['categories'] = $pathParts;
        //print_r($fileData['category']);
        $fileData['duration'] = $id3Info['playtime_seconds'];

        return $fileData;
    }

    /**
     * Get the cached itself
     *
     * @param string $filename The name of the file.
     * @return array the file data
     */
    public function getAudioData(int $limit, int $start): array
    {
        return $this->getCacheData($limit, $start);
    }
}
