<?php

namespace App\Classes;

use App\Classes\Person;

class Director extends Person{
    static private int $nextId = 1;
    private int $id;
 
    public function __construct(string $fn, string $ln){
        parent::__construct($fn, $ln);
        $this->id = self::$nextId++;
    }
}