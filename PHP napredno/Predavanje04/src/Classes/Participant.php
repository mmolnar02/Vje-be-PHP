<?php

namespace App\Classes;

use App\Classes\Person;
use App\Enums\ParticipantStatus;
use App\Interfaces\Comparable;

class Participant extends Person implements Comparable{
    static private int $nextId = 1;
    private int $id;
    private ParticipantStatus $status;
 
    public function __construct(string $fn, string $ln){
        parent::__construct($fn, $ln);
        $this->id = self::$nextId++;
        $this->status = ParticipantStatus::Pending;
    }

    public function compareTo(mixed $other): int{
       return strcmp($this->last_name, $other->last_name);
    }
}