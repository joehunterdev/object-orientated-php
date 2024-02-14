<?php

abstract class ThreeDimensionalShape{

    protected array $dimensions;

    public function __construct(array $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    // here ofcourse we can store actual values of the dimensions
    abstract public function volume(): float;  //contract


}

?>