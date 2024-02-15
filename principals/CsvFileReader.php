<?php
require 'FileReaderInterface.php';

class CsvFileReader implements FileReaderInterface
{

    public function readFileAsAssociativeArray(string $path): array
    {
        $file = fopen($path, 'r');
        $data = [];
        $header = fgetcsv($file);
        while ($row = fgetcsv($file)) {
            $data[] = array_combine($header, $row);
        }
        fclose($file);
        return $data;
    }
 
}

 