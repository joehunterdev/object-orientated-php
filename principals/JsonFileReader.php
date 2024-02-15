<?php

class JsonFileReader implements FileReaderInterface
{

    public function readFileAsAssociativeArray(string $path): array
    {
        $json = file_get_contents($path);
        return json_decode($json, true);
    }
}
