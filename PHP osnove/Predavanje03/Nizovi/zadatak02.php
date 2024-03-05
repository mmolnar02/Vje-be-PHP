<?php

/*  Zadatak: Inverzija Ključeva i Vrijednosti Niza
Imate asocijativni niz (mapu) gdje su i ključevi i vrijednosti stringovi. Vaš zadatak je stvoriti novi niz gdje će ključevi postati vrijednosti, a vrijednosti ključevi, bez korištenja petlji. */ 

$voce = [
    'jabuka' => 'crvena',
    'kruška' => 'žuta',
    'banana' => 'žuta'
];

$inverzija = array_flip($voce);

print_r('<pre>');
print_r($inverzija);
print_r('</pre>');

// [
//     'crvena' => 'jabuka',
//     'žuta' => [
//          0 => 'kruška',
//          1 => 'banana'
//      ]
// ];