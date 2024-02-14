<?php
require_once 'NonCuboidShape.php';

class Cylinder extends NonCuboidShape
{

    //Signature and return type MUST match that of parent
    /**
     * Calculates the volume of a cylinder.
     *
     * @param array $dimensions The dimensions of the cylinder [radius, height].
     * @return float The volume of the cylinder.
     */
    public function volume(): float
    {
        //This inhereted property is protected so we can access it
        // return 3.14 * $this->dimensions[0] * $this->dimensions[0] * $this->dimensions[1];
        return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
    }
}

?>