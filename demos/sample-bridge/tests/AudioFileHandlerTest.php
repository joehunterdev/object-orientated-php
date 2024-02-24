<?php

use PHPUnit\Framework\TestCase;
use App\AudioFileHandler;

class AudioFileHandlerTest extends TestCase
{
    private $audioFileHandler;
    public array $fileData = [];

    /** @test */
    public function throws_exception_when_directory_does_not_exist()
    {
        $this->expectException(InvalidArgumentException::class);
        new AudioFileHandler('/path/to/nonexistent/directory', 'cache/');
    }

    protected function setUp(): void
    {

        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
        $dotenv->load();
        $sourcePath = $_ENV['SAMPLES_PATH'];
        $cacheFolder = $_ENV['CACHE_FOLDER'];

        if (!is_dir($sourcePath)) {
            $this->markTestSkipped('Directory does not exist: ' . $sourcePath);
        }

        $this->audioFileHandler = new AudioFileHandler($sourcePath, $cacheFolder);
    }

    /** @test */
    public function can_read_raw_files()
    {
        $files = $this->audioFileHandler->getSourceFiles(200, 0);
        $this->assertNotEmpty($files);
        $this->fileData = $files;
    }

    /** @test */
    public function can_write_raw_to_cache()
    {
        $this->can_read_raw_files();
        $cached = $this->audioFileHandler->writeDataToCache($this->fileData);
        $this->assertTrue($cached);
    }

    /** @test */
    public function can_get_cached_data()
    {
        $this->can_read_raw_files();
        $cached = $this->audioFileHandler->getCacheData($this->fileData);
        $this->assertNotEmpty($cached);
    }
}
