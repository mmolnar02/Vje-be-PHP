<?php

// Integer
// Dekadska vrijednost
$int_dek = 123;

// Oktalna vrijednost
$int_oct = 00123;
var_dump($int_oct);

// Heksadekadska vrijednost
$int_hex = 0x123AFD;
var_dump($int_hex);

// Float
$float_var = 12.35;
echo $float_var;

// String
$str_double_quote = "Tekst u prvom redu \n tekst u drugom redu";
echo $str_double_quote;

$num = 9;
$str = "Broj: $num";
echo $str;

// Boolean (true, false)
$true = true;
$false = false;

var_dump(0173 == (int)"123");
var_dump((int)"0123");