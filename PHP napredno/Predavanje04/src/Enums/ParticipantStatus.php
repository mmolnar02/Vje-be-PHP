<?php

namespace App\Enums;

enum ParticipantStatus: string {
    case Accepted = 'Accepted';
    case Declined = 'Declined';
    case Pending = 'Pending';
}