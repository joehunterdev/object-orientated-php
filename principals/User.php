<?php
require 'DataModel.php';

class User extends DataModel
{


    public string $userName;
    private string $email;
 

    protected string $table = 'user';

    public function __construct($userName, $email)
    {
        $this->userName = $userName;
        $this->email = $email;
    }

    public function save()
    {
        print_r('Saving to the database');
    }
}
