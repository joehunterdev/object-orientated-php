<?php
namespace App;

class ProductsRepository
{

    private array $products = [];

    public function fetchProducts()
    {
        $productsRepo = new ProductsRepository();
        $this->products = $productsRepo->fetchProducts();
    }


    public function getProducts()
    {
        return $this->products;
    }

}