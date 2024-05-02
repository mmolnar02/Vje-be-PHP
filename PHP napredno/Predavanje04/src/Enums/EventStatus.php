<?php

namespace App\Enums;

enum EventStatus: string {
    case Planned = 'Planned';
    case Confirmed = 'Confirmed';
    case Canceled = 'Canceled';
}