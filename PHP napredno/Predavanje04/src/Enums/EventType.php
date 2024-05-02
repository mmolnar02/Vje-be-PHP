<?php

namespace App\Enums;

enum EventType: string {
    case Conference = 'Conference';
    case Concert = 'Concert';
    case Exhibit = 'Exhibit';
}