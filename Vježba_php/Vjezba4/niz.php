<?php

$ulazniNiz = [2, 5, 10, 15, 20, 25, 30, 3, 7, 8, 12, 17];

// Filtriramo niz tako da uklonimo sve brojeve manje od 10
$filtriraniNiz = array_filter($ulazniNiz, function($broj) {
    return $broj >= 10;
});

// Udvostručujemo preostale brojeve
$udvostruceniNiz = array_map(function($broj) {
    return $broj * 2;
}, $filtriraniNiz);

// Sortiramo novonastali niz od najmanjeg prema najvećem broju
sort($udvostruceniNiz);

// Ispisujemo rezultat
print_r($udvostruceniNiz);

?>