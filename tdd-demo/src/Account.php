<?php

namespace App;

class Account
{

    protected $accountNumber;
    protected $accountHolder;

    public function __construct(array $atts = [])
    {
        foreach ($atts as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
                dd($this->$key, $value);
            }
        }
    }

    public function setAccountHolder(User $accountHolder)
    {
        $this->accountHolder = $accountHolder;
    }

    public function getAccountNumber(): int
    {
        return $this->accountHolder->getUserData()['accountNumber'];
    }
}
