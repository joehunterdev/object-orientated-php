<?php
 class StockManager
{
    /**
     * @var FileReaderInterface
     * Dependacny Injection called now like a service class
     * We can pass in json and csv readers that implement FileReaderInterface
     */
    public function updateStockFromFile(string $path, FileReaderInterface $fileReaderInterface): array
    {
        $stock = $fileReaderInterface->readFileAsAssociativeArray($path);
        foreach ($stock as $item) {
            echo "Updating " . $item['id'] . " in the database" . PHP_EOL;
        }
        return $stock;
    }
}
