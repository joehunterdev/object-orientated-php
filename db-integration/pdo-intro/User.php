<?php

abstract class User
{
    private $id;
    private $name;
    private $email;
    private $created_at;

    abstract public function calculate();
}