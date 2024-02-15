<?php

class FileStorage
{
    private $filePath;
    private ?array $fileInfo = [];

    public function __construct($path)
    {

        $this->filePath = $path;

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        if (!is_writable($path)) {
            throw new Exception("Directory is not writable: $path");
        }

        self::getFileProperties();
    }

    public function getFileProperties()
    {
        $fileInfo = new SplFileInfo($this->filePath);

        if (!$fileInfo->isFile()) {
            throw new Exception("File does not exist: $this->filePath");
        }

        $this->fileInfo = [
            'name' => $fileInfo->getFilename(),
            'size' => $fileInfo->getSize(),
            'type' => $fileInfo->getType(),
            'lastModified' => date("F d Y H:i:s.", $fileInfo->getMTime()),
            'created' => date("F d Y H:i:s.", $fileInfo->getCTime())
        ];
    }

    public function store($data)
    {
        if (empty($data)) {
            // throw new Exception("Cannot store null data");
            return;
        }

        $json = json_encode($data);
        file_put_contents($this->filePath, $json);
    }

    public function retrieve()
    {
        $json = file_get_contents($this->filePath);
        return json_decode($json, true);
    }

    public function storeAsCsv($data)
    {
        if (empty($data)) {
            throw new Exception("Cannot store empty data");
        }

        $fileInfo = pathinfo($this->filePath);
        $csvFilePath = $fileInfo['dirname'] . '/' . $fileInfo['filename'] . '.csv';
        $file = fopen($csvFilePath, 'w');


        // Write the header
        fputcsv($file, array_keys($data[0]));

        // Write the data
        foreach ($data as $row) {
            fputcsv($file, $row);
        }

        fclose($file);
    }
}
