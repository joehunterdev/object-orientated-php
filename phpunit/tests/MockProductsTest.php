<?php
use App\ProductsRepository;
use PHPUnit\Framework\TestCase;

class MockProductsTest extends TestCase
{
    //Test Doubles (replicating functionalty)
    /**
     * @test
     * @group db
     */
    public function testMockProductsAreReturned()
    {
        $mockRepo = $this->createMock(ProductsRepository::class);

        $mockProductsArray = ["product1", "product2", "product3"];

        $mockRepo->method('fetchProducts')->willReturn($mockProductsArray);

        $products = $mockRepo->fetchProducts();

        $this->assertEquals($mockProductsArray, $products);

    }
}
