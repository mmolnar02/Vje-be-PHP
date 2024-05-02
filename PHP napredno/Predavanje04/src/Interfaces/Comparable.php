<?php

namespace App\Interfaces;

interface Comparable{
    public function compareTo(mixed $other): int;
}