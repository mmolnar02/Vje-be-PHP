<?php

/*Zadatak: Kombiniranje Nizova Ključeva i Vrijednosti
Imate dva niza: jedan koji sadrži ključeve, a drugi koji sadrži vrijednosti. Vaš zadatak je spojiti ove nizove u asocijativni niz (mapu) bez korištenja petlji. */

$kljucevi = ['ime', 'prezime', 'godine'];
$vrijednosti = ['Ivan', 'Ivić', 25];

var_dump(empty($kljucevi));

$osoba = array_combine($kljucevi, $vrijednosti);

print_r('<pre>');
print_r($osoba);
print_r('</pre>');

// [
//     'ime1' => 'Ivan',
//     'ime2' => "Pero",
//     'prezime' => 'Ivić',
//     'godine' => 25
// ];