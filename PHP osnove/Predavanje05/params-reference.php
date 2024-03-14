<?php

function addFive(int &$number): void {
    $number += 5;
}

$my_number = 10;
addFive($my_number);

echo $my_number;

// $a = 10;
// $b = &$a;
// echo $b;
// $a = 15;
// echo $b;