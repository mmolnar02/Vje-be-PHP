<?php

namespace App\Classes;

abstract class Person{
    protected string $first_name;
    protected string $last_name;
 
    public function __construct(string $fn, string $ln){
        $this->first_name = $fn;
        $this->last_name = $ln;
    }
}