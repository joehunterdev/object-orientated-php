<?php 
namespace App\Utility;
class RandomUtilityClass
{
    public function __construct(public string $randomProperty = 'random value')
    {
        $this->randomProperty = $randomProperty;
    }

    public function getRandomProperty(): string
    {
        return $this->randomProperty;
    }
}   
?>