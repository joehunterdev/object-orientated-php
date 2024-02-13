<?php

class Bid
{
    private $minimumBid = 500;
    public $bidAmount = 10000;

    public function setBidAmount($amount)
    {
        if ($amount < $this->minimumBid) {
            $this->bidAmount = $this->getMinBidAmount($amount); //setting of a private property
            return;
        }
        $this->bidAmount =  $amount;
    }


    public function getMinBidAmount($amount)
    {
        return $this->minimumBid;
    }
}
