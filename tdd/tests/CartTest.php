<?php

use App\Cart;
use PHPUnit\Framework\TestCase;




class CartTest extends TestCase
{
    protected $cart;
    /*
    * This method is called before each test.
    */
    protected function setUp(): void
    {
        $this->cart = new Cart();
    }
    /**
     * Reset the cart tax value after each test
     */
    protected function tearDown(): void
    {
        $this->cart::$tax = 1.2;
    }

    public function testThatTaxIsApplied()
    {

        $this->cart->price = 10;
        $netPrice = $this->cart->getNetPrice($this->cart->price);
        $this->assertEquals(12, $netPrice);
    }

    /**
     * @test
     * snake_case naming is a little clearer
     */
    public function the_cart_tax_value_can_be_changed_statically()
    {

        $this->cart = new Cart();
        $this->cart::$tax = 1.5; //This is just a test
        $this->cart->price = 10;
        $netPrice = $this->cart->getNetPrice($this->cart->price);
        $this->assertEquals(1, $netPrice);
    }

    /**
     * @test
     */
    public function a_type_error_is_thrown_when_trying_to_add_a_string_to_the_price()
    {
        $this->expectException(TypeError::class);
        $this->cart->price = 10;
        $this->cart->addToPrice('a string');
    }
 
}
