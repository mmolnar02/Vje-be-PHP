<?php

// Definiranje varijabli
$a = 10;
$b = 5;
$c = 'Marko';
$d = 'Molnar';

// Primjena svih aritmetičkih operatora nad varijablama $a i $b
echo $a + $b."<br>";
echo $a - $b."<br>";
echo $a * $b."<br>";
echo $a / $b."<br>";
echo $a % $b."<br>";

// Primjena konkatenacije nad varijablama $c i $d te dodjeljivanje rezultata varijabli $f
echo $f = $c . $d . "<br>";

// Primjena kombiniranog operatora dodjele nad varijablama $a i $b
$a *= $b;
echo $a."<br>";

// Primjena operatora usporedbe (veće od) nad varijablama $a i $b
echo var_dump($a > $b)."<br>";

// Primjena operatora inkrementa nad varijablom $a
$a++;
echo $a."<br>";
// Rezultat je ispao 51 zato što sam kod primjene kombiniranog operatora mnozio $a sa $b pa se tamo varijabla $a promjenila u 50

// Primjena operatora dekrementa nad varijablom $b
$b--;
echo $b."<br>";

?>