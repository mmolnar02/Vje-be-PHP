<?php
declare(strict_types=1);

class Car {
    public string $color;
    private string $model;

    public function __construct(string $color, string $model) {
        $this->$color = $color;
        $this->model = $model;
    }
}

$car = new Car('red', 'Volkswagen');
echo '<pre>';
var_dump($car);
echo '</pre>';

$car->color = 'blue';
echo "Dobio sam auto u boji: $car->color na poklon!";

echo '<pre>';
var_dump($car);
echo '</pre>';