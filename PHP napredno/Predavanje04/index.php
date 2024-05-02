<?php

include 'bootstrap/autoload.php';

use App\Classes\Organizer;
use App\Enums\EventType;
use App\Classes\Event;
use App\Classes\Participant;

$organizer1 = new Organizer('Ana', 'Anić');
$organizer2 = new Organizer('Ivan', 'Ivić');

$event1 = new Event('Tech Conference', EventType::Conference, new DateTime('2021-10-15'));
$event2 = new Event('Rock Concert', EventType::Concert, new DateTime('2021-11-20'));

$organizer1->addEvent($event1);
$organizer2->addEvent($event2);

$organizer1->confirmEvent($event1);
$organizer2->confirmEvent($event2);


$participants = [
    new Participant('Ana', 'Anić'),
    new Participant('Ivan', 'Ivić'),
    new Participant('Petar', 'Petrović'),
    new Participant('Marko', 'Markić'),
    new Participant('Jana', 'Janić'),
    new Participant('Ivana', 'Ivanić'),
    new Participant('Pero', 'Perić'),
    new Participant('Mara', 'Marić'),
    new Participant('Janko', 'Jankić'),
    new Participant('Jasna', 'Žasnić')
];

echo '<pre>';
// print_r($participants);
usort($participants, function($a, $b){
    return $a->compareTo($b);
});
print_r($participants);
echo '</pre>';