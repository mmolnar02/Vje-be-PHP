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
$Veći_od_prosjeka = array_filter($brojevi, function($broj) use ($prosjek) {
    return $broj > $prosjek;
});

// Ispis rezultata


echo "<pre>";
echo "Parni brojevi: ";
print_r($parni);
echo "Neparni brojevi: ";
print_r($neparni);
echo "Ukupna suma brojeva: ";
print_r($suma);
echo "Najveći broj: ";
print_r($najveci_broj);
echo "Prosjek: ";
print_r($prosjek);
echo "Broj veći od prosjeka: ";
print_r($Veći_od_prosjeka);
echo "</pre>";
?>