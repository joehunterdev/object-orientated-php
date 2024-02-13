<?php

class FileReader{

    //protected $data = "Hello World"; //can be accessed by children
    private $data = "Hello World"; //can only be accessed here

    public function getData(){

        return $this->data;

    }

}

?>