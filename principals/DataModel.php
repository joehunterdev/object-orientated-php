<?php

abstract class DataModel{

  
    protected string $tabl = 'random_table';

    public function save(){
        print_r('Saving to the database');
    }
     

}