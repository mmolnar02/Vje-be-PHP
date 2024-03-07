<?php

// Koristeći petlju while, ispišite prvih deset brojeva.

$i = 1;
while($i <= 10){
    echo $i." ";
    $i++;
}

// Koristeći petlju for, ispišite sve parne brojeve do 100.
for ($i = 0; $i < 100; $i += 2) {
    if ($i == 0){
        continue;
    }
    echo $i." ";
}
?>