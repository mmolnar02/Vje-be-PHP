<?php

// Definiranje početnog niza
$brojevi = [3, 7, 2, 8, 1, 4, 6, 9, 5, 10];

// Pronalaženje parnih i neparnih brojeva
$parni = [];
$neparni = [];

foreach ($brojevi as $broj) {
    if ($broj % 2 === 0) {
        $parni[] = $broj;
    } else {
        $neparni[] = $broj;
    }
}

// Izračunavanje sume svih brojeva
$suma = array_sum($brojevi);

// Pronalaženje najvećeg broja
$najveci_broj = max($brojevi);

// Izračunavanje prosječne vrijednosti
$prosjek = $suma / count($brojevi);

// Filtriranje i ispis brojeva većih od prosječne vrijednosti
$brojevi_veći_od_prosjeka = array_filter($brojevi, function($broj) use ($prosjek) {
    return $broj > $prosjek;
});

// Ispis rezultata
echo "Parni brojevi: " . implode(", ", $parni) . "\n" . "</br>";
echo "Neparni brojevi: " . implode(", ", $neparni) . "\n" . "</br>";
echo "Ukupna suma svih brojeva: " . $suma . "\n" . "</br>";
echo "Najveći broj: " . $najveci_broj . "\n" . "</br>";
echo "Brojevi veći od prosjeka (" . $prosjek . "): " . implode(", ", $brojevi_veći_od_prosjeka) . "\n" . "</br>";

?>