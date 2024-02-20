<?php

namespace App;

class User
{
    protected string $userName;
    protected int $accountNumber;
 
    public function __construct(string $userName){

        $this->userName = $userName;
        $this->accountNumber = 1234567890;
    }

    // public function getUserDataUser(string $userName): void
    // {
    //     $this->userName = $userName;
    //     $this->accountNumber = 1234567890;
    // }

    public function getUserData(): array
    {
        return ["userName" => $this->userName, "accountNumber" => $this->accountNumber];
    }
}
