<?php

namespace App\Classes;

use App\Classes\Person;
use App\Interfaces\Confirmable;
use App\Classes\Event;

class Organizer extends Person{
    static private int $nextId = 1;
    private int $id;
    private array $events = [];
 
    public function __construct(string $fn, string $ln){
        parent::__construct($fn, $ln);
        $this->id = self::$nextId++;
    }
 
    public function addEvent(Event $event): void{
        $this->events[] = $event;
    }

    public function confirmEvent(Confirmable $event): void{
        if(in_array($event, $this->events)) {
            $event->confirm();
        }
    }

    public function moveEvents(Organizer $o){
        $o->events = array_merge($o->events, $this->events);
        $this->events = [];
    }
}