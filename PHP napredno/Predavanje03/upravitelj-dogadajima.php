<?php
 
enum EventType: string {
    case Conference = 'Conference';
    case Concert = 'Concert';
    case Exhibit = 'Exhibit';
}
 
enum EventStatus: string {
    case Planned = 'Planned';
    case Confirmed = 'Confirmed';
    case Canceled = 'Canceled';
}
 
enum ParticipantStatus: string {
    case Accepted = 'Accepted';
    case Declined = 'Declined';
    case Pending = 'Pending';
}
 
interface Sortable{
    public function sort(string $field): void;
}
 
interface Filterable{
    public function filter(array $criteria): array;
}
 
interface Approvable{
    public function approve(): void;
}
 
interface Confirmable{
    public function confirm(): void;
}
 
abstract class Person{
    protected string $first_name;
    protected string $last_name;
 
    public function __construct(string $fn, string $ln){
        $this->first_name = $fn;
        $this->last_name = $ln;
    }
}
 
class Participant extends Person{
    static private int $nextId = 1;
    private int $id;
    private ParticipantStatus $status;
 
    public function __construct(string $fn, string $ln){
        parent::__construct($fn, $ln);
        $this->id = self::$nextId++;
        $this->status = ParticipantStatus::Pending;
    }
}
 
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
 
class Director extends Person{
    static private int $nextId = 1;
    private int $id;
 
    public function __construct(string $fn, string $ln){
        parent::__construct($fn, $ln);
        $this->id = self::$nextId++;
    }
}
 
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
 
$organizer1 = new Organizer('Ana', 'Anić');
$organizer2 = new Organizer('Ivan', 'Ivić');

$event1 = new Event('Tech Conference', EventType::Conference, new DateTime('2021-10-15'));
$event2 = new Event('Rock Concert', EventType::Concert, new DateTime('2021-11-20'));

$organizer1->addEvent($event1);
$organizer2->addEvent($event2);

$organizer1->moveEvents($organizer2);
$organizer2->confirmEvent($event1);
$organizer2->confirmEvent($event2);

var_dump($organizer1);
var_dump($organizer2);
