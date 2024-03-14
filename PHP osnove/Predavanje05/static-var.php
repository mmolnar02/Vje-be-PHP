<?php
declare(strict_types=1);

function randomAddition(int $number): int {
    static $sum = 0;
    $sum += $number;
    return $sum;
}

echo randomAddition(5);
echo randomAddition(10);
echo randomAddition(20);
echo randomAddition(50);