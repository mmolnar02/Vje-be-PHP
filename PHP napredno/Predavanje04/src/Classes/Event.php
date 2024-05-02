<?php

namespace App\Classes;

use App\Enums\EventType;
use App\Enums\EventStatus;
use App\Interfaces\Confirmable;
use DateTime;

class Event implements Confirmable{
    static private int $nextId = 1;
    private int $id;
    private string $name;
    private EventType $type;
    private EventStatus $status;
    private DateTime $start_date;
    private bool $approved;
 
    public function __construct(string $name, EventType $type, DateTime $start_date){
        $this->id = self::$nextId++;
        $this->name = $name;
        $this->type = $type;
        $this->status = EventStatus::Planned;
        $this->start_date = $start_date;
        $this->approved = false;
    }
 
    public function confirm(): void{
        $this->status = EventStatus::Confirmed;
    }
}