<?php
namespace App;
class Cart {

    public float $price;
    //static means that the variable is shared between all instances of the class
    public static float $tax = 1.2;

    public function getNetPrice(float $price)
    {
        $this->price =  ($price * self::$tax);
    }

    public function addToPrice(int $amount){

        $this->price += $amount;    
    }
}

?>