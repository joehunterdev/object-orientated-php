<?php
require_once 'NonCuboidShape.php';

class Sphere extends NonCuboidShape
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
        return 4/3 * pi() * pow($this->dimensions['radius'], 3);

    }
}

?>