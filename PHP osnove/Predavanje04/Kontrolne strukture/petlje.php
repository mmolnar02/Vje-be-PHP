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

// Definirajte varijablu names i dodijelite joj niz koji sadrži pet imena.
//  Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti.

$names = [ "Ivan", "Marko", "Josip", "Stjepan", "Ante" ];

foreach ($names as $key => $value) {
    echo "Ključ: ".$key;
    echo "Vrijednost: ".$value."<br>";
}

?>