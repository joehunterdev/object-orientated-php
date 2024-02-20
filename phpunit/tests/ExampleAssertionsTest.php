<?php

require __DIR__ . '/../vendor/autoload.php';

class ExampleAssertionsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testThatStringsMatch()
    {

        //Action
        //Arrange 

        $string1 = 'Hello World';
        $string2 = 'Hello World2 ';
        $string3 = 'hello World ';

        //Assertion
        $this->assertSame($string1, $string2);
      //  $this->assertSame($string1, $string3);

    }

    public function testsThatNumbersAddUp(){
        /*
        //Expected and operation
        */
        $this->assertSame(10, 9+1);
    }
}
?> 