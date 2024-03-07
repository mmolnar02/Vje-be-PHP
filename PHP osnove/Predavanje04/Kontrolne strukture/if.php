<?php

/* Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.
 Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.
 Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.
 Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c.*/ 

 $a = 5;
 $b = 10;
 $c = 15;

 if($b > $a){
    if ($b < $c){
        echo "b je između a i c";
    } else{
        echo "b nije između a i c";
    }
 } elseif($b < $a){
    if ($b > $c){
        echo "b je između a i c";
    } else{
        echo "b nije između a i c";
    }

 } else {
    echo "b nije između a i c";
 }

//  Optimizirano
if (($b > $a && $b < $c) || ($b < $a && $b > $c) ) {
    echo 'b je između a i c';
} else {
    echo 'b nije između a i c';
} 