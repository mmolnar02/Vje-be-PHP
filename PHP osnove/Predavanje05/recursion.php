<?php

function countdown(int $number): void {
    if ($number < 0) {
        return ;
    }
    echo $number . "\n";
    countdown($number - 1);
}

countdown(10);

// napiši funkciju za računanje faktorijela

function factorial(int $number): int | string{
    if ($number < 0) {
        return "Ne može!";
    }
        if ($number === 0) {
        return 1;
    }
    return $number * factorial($number-1);
}

echo factorial(5);