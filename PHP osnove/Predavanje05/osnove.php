<?php
declare(strict_types=1);
/* 
Proizvoljno deklarirajte funkciju koja vraća neki tekst.
 Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
 Ispišite vrijednost varijable.
 */

 function vratiTekst(): string {
    return "Ovo je neki tekst";
 }

$tekst = vratiTekst();

echo $tekst . "<br>";





/*
Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija treba
konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih lokalnoj
varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao rezultat.
Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
Ispišite vrijednost varijable.
*/

function fullName(string $name, string $surname, int $age = 20): string{
    $result = $name . " " . $surname . " - " . $age . " godina ";
    return mb_strtoupper($result);
}

$result = fullName(name:"Pero", surname:"Perić");

echo $result . "<br>";

