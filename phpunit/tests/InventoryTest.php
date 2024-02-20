<?php
class InventoryTest extends \PHPUnit\Framework\TestCase
{
    //setup
    
    //do somethiung

    //assert
    
    /**
     * @test
     * @group db
     */
    public function testThatWeCanAddProductToInventory(\App\ProductsRepository $mockRepo)
    {
        $inventory = new \App\Inventory($mockRepo);
        $inventory->addProduct('Desk');
        //Heres wehere we can mock as getting products from a database isnt feasible
        $this->assertEquals("product1", $inventory->getProducts()[0]);
        $this->assertEquals("product2", $inventory->getProducts())[1];

    } 

    // $mockRepo = $this->createMock(ProductsRepository::class);

    // $mockProductsArray = ["product1", "product2", "product3"];

    // $mockRepo->method('fetchProducts')->willReturn($mockProductsArray);

    // $products = $mockRepo->fetchProducts();

    // $this->assertEquals($mockProductsArray, $products);
}
