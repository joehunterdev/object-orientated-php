<?php
require 'DataModel.php';

class Product extends DataModel{


    public string $name;
    public float $price;
    public int $quantity;
    protected string $table = 'products';
    
    public function __construct($name,$price,$quantity){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function save(){
        print_r('Saving to the database');
    }

    public function getName():string{
        return $this->name;

    }

    public function setName(){
        return $this->name;
    }

    public function getPrice():float{
        return $this->price;
    }

}

