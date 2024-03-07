<?php

/* Zadatak: Grupiranje Elementa Niza
Imate niz koji sadrži stringove koji predstavljaju kategorije. Vaš zadatak je stvoriti novi niz koji grupira elemente po njihovim vrijednostima, tako da svaka jedinstvena vrijednost postaje ključ u novom asocijativnom nizu, a svaki ključ ukazuje na niz koji sadrži indekse tih vrijednosti u izvornom nizu. 
*/

$kategorije = [
    'voće',
    'povrće',
    'voće',
    'meso',
    'povrće',
    'voće',
    'voće',
    'meso'
];

$grupiraniNiz =
    array_reduce(
        array_keys($kategorije),
        function ($izlaz, $kljuc) use ($kategorije) {
            $izlaz[$kategorije[$kljuc]][] = $kljuc;
            return $izlaz;
        },
        
    );

    print_r('<pre>');
    print_r($grupiraniNiz);
    print_r('</pre>');

// [
//     'voće' => [0, 2, 5, 6],
//     'povrće' => [1, 4],
//     'meso' => [3, 7]
// ];