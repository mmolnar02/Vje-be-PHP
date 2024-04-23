<?php

// Nacrt klase
class Car {
    public $color;
    public $model;
}
echo '<pre>';
// Instanciranje klase
$car = new Car();
$car->color = 'red';
var_dump($car);
$carRef = $car;
var_dump($car);

$car1 = new Car();
var_dump($car1);
echo '</pre>';

class Oglas{
    public $naslov;
    public $sadrzaj;
};

echo '<pre>';
$oglas = new Oglas();
$oglas->naslov = 'Prodajem auto';
$car = new Car();
$car->model = 'Volkswagen';
$car->color = 'black';
$oglas->sadrzaj = $car;
var_dump($oglas);
echo '</pre>';