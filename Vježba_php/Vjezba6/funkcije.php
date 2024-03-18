<?php

/*
Zadaci:
Napišite funkciju filtrirajPoKategoriji($prodaja, $kategorija) koja vraća niz prodaja samo iz zadane kategorije.
Napišite funkciju izracunajUkupniPrihod($filtrirane_prodaja) koja izračunava i vraća ukupni prihod od prodaja u nizu koji joj je proslijeđen.
Upute:
Koristite foreach petlje za iteraciju kroz nizove.
Obratite pažnju na to da se prihod za svaku prodaju izračunava množenjem cijene i količine.
Testirajte svoje funkcije s različitim kategorijama kako biste osigurali da vaš kod radi kako treba.
*/

$prodaja = [
    ['ime_proizvoda' => 'Laptop', 'kategorija' => 'Elektronika', 'cijena' => 800, 'količina' => 10],
    ['ime_proizvoda' => 'Hladnjak', 'kategorija' => 'Aparati', 'cijena' => 600, 'količina' => 5],
    ['ime_proizvoda' => 'Smartphone', 'kategorija' => 'Elektronika', 'cijena' => 500, 'količina' => 15],
    ['ime_proizvoda' => 'Mikser', 'kategorija' => 'Aparati', 'cijena' => 100, 'količina' => 8],
    ['ime_proizvoda' => 'Televizor', 'kategorija' => 'Elektronika', 'cijena' => 1000, 'količina' => 7],
    ['ime_proizvoda' => 'Perilica', 'kategorija' => 'Aparati', 'cijena' => 750, 'količina' => 4],
    ['ime_proizvoda' => 'Sušilica', 'kategorija' => 'Aparati', 'cijena' => 800, 'količina' => 3],
    ['ime_proizvoda' => 'Slušalice', 'kategorija' => 'Elektronika', 'cijena' => 150, 'količina' => 20],
    ['ime_proizvoda' => 'Toster', 'kategorija' => 'Aparati', 'cijena' => 50, 'količina' => 10],
    ['ime_proizvoda' => 'Blender', 'kategorija' => 'Aparati', 'cijena' => 120, 'količina' => 6],
    ['ime_proizvoda' => 'Tablet', 'kategorija' => 'Elektronika', 'cijena' => 450, 'količina' => 12],
    ['ime_proizvoda' => 'Usisavač', 'kategorija' => 'Aparati', 'cijena' => 400, 'količina' => 5],
    ['ime_proizvoda' => 'Sokovnik', 'kategorija' => 'Aparati', 'cijena' => 300, 'količina' => 7],
];

function filtrirajPoKategoriji($prodaja, $kategorija) {
    $filtriraneProdaje = [];
    foreach ($prodaja as $prodajniArtikl) {
        if ($prodajniArtikl['kategorija'] === $kategorija) {
            $filtriraneProdaje[] = $prodajniArtikl;
        }
    }
    return $filtriraneProdaje;
}

function izracunajUkupniPrihod($filtriraneProdaje) {
    $ukupniPrihod = 0;
    foreach ($filtriraneProdaje as $prodajniArtikl) {
        $ukupniPrihod += $prodajniArtikl['cijena'] * $prodajniArtikl['količina'];
    }
    return $ukupniPrihod;
}

// Imamo 2 različite kategorije, 'Aparati' i 'Elektronika'
$kategorija = 'Aparati';
// Promjenom kategorije možemo testirate funkcije

$filtriraneProdaje = filtrirajPoKategoriji($prodaja, $kategorija);
$ukupniPrihod = izracunajUkupniPrihod($filtriraneProdaje);

echo "Ukupni prihod od prodaje u kategoriji '$kategorija' je: $ukupniPrihod";

print_r('<pre>');
print_r($filtriraneProdaje);
print_r('</pre>');

/*
Strukturirajte podatke tako da imate sve potrebne informacije o filtriranim prodajama i ukupnom prihodu u jednom asocijativnom nizu koji će biti spreman u JSON formatu.
*/

$podatci = [
    'filtriraneProdaje' => $filtriraneProdaje,
    'ukupniPrihod' => $ukupniPrihod
];

$podatciJSON = json_encode($podatci);

file_put_contents(__DIR__."/rezultati.json", $podatciJSON) or die("Unable to write to file!");