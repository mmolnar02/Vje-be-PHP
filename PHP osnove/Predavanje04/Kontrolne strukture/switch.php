<?php
/* Napisati PHP skriptu koja provjerava je li trenutni dan u tjednu radni dan ili vikend i ispisuje odgovarajuću poruku. Također, skripta treba odrediti i koji je točno dan u tjednu te ispisati specifičnu poruku za taj dan. Dan u tjednu bi trebao biti određen pomoću broja (1 za ponedjeljak, 2 za utorak, itd.), a skripta bi trebala iskoristiti switch strukturu za ispisivanje imena dana na temelju tog broja. */

$dan_u_tjednu = date('N');

if ($dan_u_tjednu < 6) {
    echo "Danas je radni dan";
} else {
    echo "Danas je vikend";
}

switch ($dan_u_tjednu) {
    case 1:
        echo "Danas je ponedjeljak.";
        break;
    case 2:
        echo "Danas je utorak.";
        break;
    case 3:
        echo "Danas je srijeda.";
        break;
    case 4:
        echo "Danas je četvrtak.";
        break;
    case 5:
        echo "Danas je petak.";
        break;
    case 6:
        echo "Danas je subota";
        break;
    case 7:
        echo "Danas je nedjelja.";
        break;
    default:
    echo "Nepostojeći dan.";
    break;
}