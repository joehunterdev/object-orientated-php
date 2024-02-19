<?php 

namespace App;

class Inventory
{
    private $products = [];
 
    public function __construct(private ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }
}   

