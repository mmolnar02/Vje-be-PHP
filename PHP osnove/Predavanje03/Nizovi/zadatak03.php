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

$grupiranje = array_reduce($kategorije, function($v1, $v2){
    print_r("1".$v1);
    print_r('<br>');
    print_r("2".$v2);
   });

// [
//     'voće' => [0, 2, 5, 6],
//     'povrće' => [1, 4],
//     'meso' => [3, 7]
// ];