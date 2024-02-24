<?php

use App\AudioFileHandler;
use App\Library;

use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase
{
    private $sampleData;

    protected function setUp(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
        $dotenv->load();
        $sourcePath = $_ENV['SAMPLES_PATH'];
        $cacheFolder = $_ENV['CACHE_FOLDER'];

        $this->sampleData = new AudioFileHandler($sourcePath, $cacheFolder);
    }

    /** @test */
    public function can_get_audio()
    {

        $library = new App\Library($this->sampleData);
        $this->assertNotEmpty($library->getSamples(100, 0));
    }

    /** @test */
    public function can_get_hydrate_category()
    {

        $library = new App\Library($this->sampleData);
        $library->getSamples(100, 100);
        // Check the first sample
        $firstSample = $library->samples[0];
        dd($firstSample);
    }

    /** @test */
    public function can_by_category()
    {

        $library = new App\Library($this->sampleData);
        $library->getSamples(100, 100);
        // Check the first sample
        $micSamples = $library->getSamplesByCategory('type', 'Close_Mic');
        dd($micSamples);
        $this->assertNotEmpty($micSamples);
    }
}
